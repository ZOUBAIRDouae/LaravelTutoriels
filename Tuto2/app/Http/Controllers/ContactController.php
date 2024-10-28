<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('emails.contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send('send', $data, function($message) use ($data) {
            $message->to('zoubairdouae5@exemple.com', 'Destinataire')
            ->subject('Nouveau message de contact');
        });

        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');
    }
}

