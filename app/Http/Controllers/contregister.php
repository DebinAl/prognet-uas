<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class contregister extends Controller
{
    public function index(){

        return view('register.index');
    }

    public function store(Request $request){

        $account = $request->validate([
            'name'=>'required',
            'email'=>'required|email:dns',
            'password'=>'required|min:8'
        ]);

        $account['password'] = Hash::make($account['password']);
        User::create($account);

        return back()->with('success', 'Regitration Successfull! Please Login');
    }
}
