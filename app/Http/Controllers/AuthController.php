<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TypeError;

class AuthController extends Controller
{
    public function login()
        {
            return view('login');
        }

        public function register()
        {
            return view('register');
        }

        public function authentication(Request $request)
        {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            // cek apakah login valid
            // cek apakah user status = active
            if (Auth::attempt($credentials)) {
                //cek apakah user status = active
                if(Auth::user()->status != 'active'){
                    Session::flash('status', 'failde');
                    Session::flash('message', 'Your account is not active yet. please contact admin!');
                    return redirect('/login');
                }
                //$request->session()->regenerate();
                //return redirect()->intended('dashboard');
            }

                    Session::flash('status', 'failde');
                    Session::flash('message', 'Login Invalid');
                    return redirect('/login');

        }
}
