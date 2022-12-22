<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contlogin extends Controller
{
    public function index(){

        return view('login.index');

    }

    public function authentication(Request $request){

        $account = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($account)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error', 'Login Failed! Please try again');

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return back();
    }
}
