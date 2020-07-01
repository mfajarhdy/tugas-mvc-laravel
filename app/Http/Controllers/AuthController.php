<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request)
    {   
        $data = $request->all();
        $first = $data['Firstname'];
        $last = $data['Lastname'];
        
        return view('welcome',compact('first','last'));
    }
}
