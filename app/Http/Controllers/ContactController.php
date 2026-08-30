<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    /**
     * Display Contact Page
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle Contact Form Submission with Anti-Bot & Rate Limiting Protection
     */
    public function submit(Request $request)
    {
        // 1. Honeypot check for automated spam bots
        if (!empty($request->input('website_url'))) {
            // Silently drop bot submission
            return redirect()->back()->with('success', 'Thank you! Your message has been received.');
        }

        // 2. Anti-spam Rate Limiter (Max 3 submissions per minute per IP)
        $throttleKey = 'contact-submit|' . $request->ip();
        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return redirect()->back()->withErrors([
                'message' => "Too many submission attempts! Please wait {$seconds} seconds before trying again.",
            ])->withInput();
        }

        // 3. Strict Input Validation
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|min:10|max:2000',
        ]);

        RateLimiter::hit($throttleKey, 60);

        // 4. Sanitize Input against XSS
        $name = strip_tags($validated['name']);
        $email = filter_var($validated['email'], FILTER_SANITIZE_EMAIL);
        $phone = isset($validated['phone']) ? strip_tags($validated['phone']) : null;
        $subject = isset($validated['subject']) ? strip_tags($validated['subject']) : 'General Inquiry';
        $message = strip_tags($validated['message']);

        // 5. Store Contact Message in DB
        ContactMessage::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
            'is_read' => false,
        ]);

        return redirect()->back()->with('success', 'Thank you for getting in touch! Rohit Kumar will reply to your message shortly.');
    }
}
