<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /**
     * @Route("subscribe", name="subscribe")
     */
    public function subscribe(Request $request)
    {
        return [];
    }
}
