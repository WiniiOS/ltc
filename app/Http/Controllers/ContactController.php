<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendmail(ContactRequest $request)
    {

        Mail::to('ltcgroup@cyberjob.cm')->send(new ContactMail($request->name,$request->email,$request->message));

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
