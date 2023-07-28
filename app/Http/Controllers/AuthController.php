<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TypeError;

class AuthController extends Controller
{
    public function login(Request $request)
        {
            return view('login');
        }

        public function register()
        {
            return view('register');
        }
}
