<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','string']
        ]);

        $admin = \App\Models\Admin::where('email', $data['email'])->first();
        if ($admin && \Illuminate\Support\Facades\Hash::check($data['password'], $admin->password)) {
            $request->session()->put('admin_id', $admin->id);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_id');
        return redirect()->route('admin.login');
    }
}
