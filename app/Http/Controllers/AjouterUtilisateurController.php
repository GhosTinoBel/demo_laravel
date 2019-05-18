<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests\SeConnecterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AjouterUtilisateurController extends Controller
{

	public function enregistrer(SeConnecterRequest $request)
	{
        $user = new users;
		$user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
		$user->save();

        $message = DB::table('messages')->get();
        return view('home', ['message' => $message]);

    }

}
