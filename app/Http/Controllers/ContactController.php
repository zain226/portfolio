<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        Mail::raw("New contact message from {$contact->name}\n\nMessage:\n{$contact->message}", function ($msg) use ($contact) {
            $msg->to('info@nexisdevsolution.com') // 👈 change this
                ->subject($contact->subject ?? 'New Contact Message');
        });

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
}
