<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard', [
            'appointments' => Appointment::latest()->paginate(10),
            'contacts' => ContactMessage::latest()->paginate(10),
            'subscriptions' => Subscription::latest()->paginate(10),
        ]);
    }

    public function replyAppointment(Request $request, Appointment $appointment)
    {
        $data = $request->validate([
            'admin_reply' => ['required', 'string'],
            'status' => ['nullable', 'string'],
        ]);
        $appointment->admin_reply = $data['admin_reply'];
        if (!empty($data['status'])) {
            $appointment->status = $data['status'];
        } else {
            $appointment->status = 'replied';
        }
        $appointment->replied_at = now();
        $appointment->save();

        return back()->with('success', 'Appointment updated.');
    }

    public function replyContact(Request $request, ContactMessage $contact)
    {
        $data = $request->validate([
            'admin_reply' => ['required', 'string'],
            'status' => ['nullable', 'string'],
        ]);
        $contact->admin_reply = $data['admin_reply'];
        if (!empty($data['status'])) {
            $contact->status = $data['status'];
        } else {
            $contact->status = 'replied';
        }
        $contact->replied_at = now();
        $contact->save();

        return back()->with('success', 'Contact message updated.');
    }
}
