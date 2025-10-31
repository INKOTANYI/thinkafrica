<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Subscription;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WebFormController extends Controller
{
    public function storeAppointment(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['nullable','string','max:50'],
            'service' => ['required','string','max:255'],
            'preferred_date' => ['nullable','date'],
            'preferred_time' => ['nullable','date_format:H:i'],
            'message' => ['nullable','string'],
        ]);

        if (!empty($data['preferred_date'])) {
            // If time provided, combine; else default to 09:00
            $time = $data['preferred_time'] ?? '09:00';
            $data['preferred_date'] = date('Y-m-d H:i:s', strtotime($data['preferred_date'].' '.$time));
        }
        unset($data['preferred_time']);

        Appointment::create($data);

        return back()->with('success', 'Your appointment request has been submitted. We will get back to you soon.');
    }

    public function storeSubscription(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required','email','max:255'],
            'name' => ['nullable','string','max:255'],
        ]);

        Subscription::firstOrCreate(['email' => $data['email']], ['name' => $data['name'] ?? null]);

        return back()->with('success', 'Thanks for subscribing.');
    }

    public function storeContact(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['nullable','string','max:50'],
            'subject' => ['required','string','max:255'],
            'message' => ['required','string'],
        ]);

        ContactMessage::create($data);

        return back()->with('success', 'Your message has been sent. We will respond shortly.');
    }
}
