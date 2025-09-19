<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'message');

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('admin@infrasoft.id')
                    ->subject('Pesan baru dari ' . $data['name'])
                    ->replyTo($data['email']);
        });

        return back()->with('success', 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
