<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create() {
        return view('vitrine.contact');
    }

    public function store(Request $request) {
        //dd($request->all());
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail->to('contact@medpharmacom.fr')->subject('Message depuis le formulaire de contact');
        });

        return redirect()->back()->with('flash_message', 'Merci pour votre message.');
    }
}
