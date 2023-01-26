<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendmail(Request $request)
    {
        $request->validate([
            'name'  => ['required'],
            'email' => ['required','email'],
            'subject'  => ['required'],
            'message'  => ['required'],
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        $emailContact = new ContactMail($data);

        Mail::to('franckndi5@gmail.com')->send($emailContact);

        return back()->with('successMail', 'Votre Mail a bien été envoyé');


    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => ['required','email']
        ]);

        //we save the email address in database 
        Contact::create([
            'email' => $request->email
        ]);

        return back()->with('success', 'Votre e-mail a bien été ajouté à notre newsletter');

    }

}
