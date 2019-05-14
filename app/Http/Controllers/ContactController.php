<?php

namespace App\Http\Controllers;

use App\Models\Message;
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
		$message = new Message;
		$message->nom = $request->nom;
		$message->prenom = $request->prenom;
		$message->email = $request->email;
		$message->message = $request->message;
		$message->save();

		$mailable = new  ContactMessageCreated($message);
        Mail::to('belemgnegreetienne@gmail.com')->queue($mailable);
		flashy('Nous vous répondrons dans les plus brefs délais !');

		return redirect()->route('root_path');
	}
}
