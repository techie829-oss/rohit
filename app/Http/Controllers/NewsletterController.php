<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscriber = Subscriber::firstOrCreate(
            ['email' => $request->email],
            ['ip_address' => $request->ip(), 'status' => 'active']
        );

        // If they were previously unsubscribed, resubscribe them
        if ($subscriber->status === 'unsubscribed') {
            $subscriber->update(['status' => 'active', 'ip_address' => $request->ip()]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thanks for subscribing! You will receive our latest updates.'
        ]);
    }
}
