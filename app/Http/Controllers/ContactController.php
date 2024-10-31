<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email menggunakan Mail
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('sehandiki17@gmail.com') // Ganti dengan alamat email tujuan
                    ->subject($request->subject)
                    ->from($request->email, $request->name);
        });

        // Kembali ke halaman dengan pesan sukses
        return back()->with('success', 'Email sent successfully!');
    }
}
