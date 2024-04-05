<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function handleOrderEmail(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'sender' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
        ]);

        // Extract information from the incoming request
        $sender = $request->input('sender');
        $subject = $request->input('subject');
        $body = $request->input('body');

        // Log the received email
        Log::info("Received email from: $sender, Subject: $subject, Body: $body");

        // Perform any additional processing logic here
        // For example, you can save the received email to a database, trigger events, etc.

        // Return a response indicating successful processing
        return response()->json(['message' => 'Email processed successfully']);
    }
}
