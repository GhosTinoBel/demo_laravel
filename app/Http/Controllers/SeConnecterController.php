<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests\SeConnecterRequest;
use Illuminate\Http\Request;

class SeConnecterController extends Controller
{
    
    public function connect()
	{
		return view('pages/se_connecter');
	}

	public function store(SeConnecterRequest $request)
	{
		$user = new users;
		$user->pseudo = $request->pseudo;
		$user->mot_de_passe = $request->mot_de_passe;
		$user->save();

		return redirect()->route('root_path');
	}

}
