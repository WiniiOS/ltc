<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
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
