<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create()
	{
		return view('pages/contact');
	}

	public function store(ContactRequest $request)
	{
        $mailable = new  ContactMessageCreated($request->nom, $request->prenom, $request->email, $request->message);
        Mail::to('belemgnegreetienne@gmail.com')->send($mailable);
        return 'Done';
	}
}
