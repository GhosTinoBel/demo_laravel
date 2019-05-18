<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PageAdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index()
	{
        // User::create(['name' => 'admin', 'email' => 'test@test.fr', 'password' => Hash::make('admin')]);
        $message = DB::table('messages')->get();
        return view('home', ['message' => $message]);
    }

    public function delete(Request $request)
	{
        $id=$request->id_message;
        DB::table('messages')->delete($id);
        $message = DB::table('messages')->get();
        return view('home', ['message' => $message]);
    }

}
