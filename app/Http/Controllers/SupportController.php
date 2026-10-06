<?php

namespace App\Http\Controllers;

use App\Mail\UserThankYouMail;
use Illuminate\Http\Request;
use App\Models\SupportRequest;
use App\Mail\NewSupportRequestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SupportController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name'  => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email',
        'support_type'  => 'required|string',
    ]);

    try {
        $data = SupportRequest::create($validated);

        $email = config('app.supportEmail');

        Mail::to($email)->send(new NewSupportRequestMail($data));

        Mail::to($validated['email'])
            ->send(new UserThankYouMail($validated['name']));

        return redirect()
            ->back()
            ->with('success', 'Thank you! Your request has been received. Our team will contact you soon.');

    } catch (\Throwable $e) {

        Log::error('Support form error: '.$e->getMessage());

        return redirect()
            ->back()
            ->with('error', 'Sorry, we could not send your request right now. Please try again later.');
    }
}
}
