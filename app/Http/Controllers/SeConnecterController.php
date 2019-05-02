<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeConnecterController extends Controller
{
    
    public function connect()
	{
		return view('pages/se_connecter');
	}
}
