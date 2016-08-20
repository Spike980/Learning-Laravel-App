<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
        \Mail::send('emails.contact',
            [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
            ], function($message) {
                $message->from('akm_spike@example.com');
                $message->to('anandmallick980@gmail.com', 'Admin')->subject('First Mail');
            });
        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
