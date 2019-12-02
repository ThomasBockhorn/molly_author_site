<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{


    /**
     * Show the form for creating a new resource for mail.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactform.create');
    }

    /**
     * This will submit the email
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('/');
    }

}