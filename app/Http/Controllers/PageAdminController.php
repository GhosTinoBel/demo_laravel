<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PageAdminController extends Controller
{
    public function __construct() {
        //User::create(['name' => 'admin', 'email' => 'test@test.fr', 'password' => Hash::make('admin')]);
        $this->middleware('auth');
    }


    public function index()
	{
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
