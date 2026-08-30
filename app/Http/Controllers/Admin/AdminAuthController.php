<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AdminAuthController extends Controller
{
    /**
     * Show Admin Login Page
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    /**
     * Handle Admin Login Submission with Anti-Bot Brute-Force Rate Limiting
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:150',
            'password' => 'required|string|max:100',
        ]);

        // Rate limiter key based on IP + Email
        $throttleKey = Str::lower($request->input('email')) . '|' . $request->ip();

        // Allow maximum 5 login attempts per 60 seconds
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return back()->withErrors([
                'email' => "Too many failed login attempts! Bot protection activated. Please try again in {$seconds} seconds.",
            ])->onlyInput('email');
        }

        if (Auth::attempt($credentials, $request->has('remember'))) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Welcome back to Admin Control Center!');
        }

        // Increment rate limiter on failure
        RateLimiter::hit($throttleKey, 60);

        return back()->withErrors([
            'email' => 'Invalid admin email or password credentials.',
        ])->onlyInput('email');
    }

    /**
     * Handle Admin Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
