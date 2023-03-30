<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function Signup(Request $request)
    {
        $request->validate([
            's_name' => 'required',
            's_email' => 'email|required',
            's_password' => 'required|confirmed',
            'password_confirmation' => 'required'
            // 'password' => 'required|',
            // 'password_confirmation' => 'required|same:password'
        ]);
        return view('demo');
    }
}
