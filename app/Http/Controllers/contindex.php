<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\comment;

class contindex extends Controller
{
    public function index(){

        return view('index',[
            'comment' => comment::get()
        ]);
    
    }

    public function store(Request $request){

        $comment = $request->validate([
            'user_id'=>'required',
            'comment'=>'required'
        ]);

        comment::create($comment);

        return back();
    
    //    comment::create($comment);
        

    }
}
