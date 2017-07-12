<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function flushUser(){
	\Auth::logout();

	return redirect('/');
}
}
