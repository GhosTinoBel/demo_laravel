<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function read()
	{
		return view('pages/a_propos');
	}
}
