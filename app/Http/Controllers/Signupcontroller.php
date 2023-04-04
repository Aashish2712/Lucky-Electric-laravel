<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\assertNotEmpty;

class Signupcontroller extends Controller
{


    public function Create(Request $request)
    {
        $validated = $request->validate(
            [
                'sg-name' => 'required',
                'sg-email' => 'email|required|unique:users,email',
                'sg-password' => 'required|min:8',
                'password_confirmation' => 'required|same:sg-password|min:8'

            ],
            [
                'sg-name.required' => 'Please enter your name.',
                'sg-email.required' => 'Please enter your email address.',
                'sg-email.email' => 'Please enter a valid email address.',
                'sg-email.unique' => 'This email address is already Registered .',
                'sg-password.required' => 'Please enter your password.',
                'sg-password.confirmed' => 'The password field confirmation does not match.',
                'sg-password.min' => 'The password  field must be at least :min characters.',
                'password_confirmation.same' => 'The Password field must match Confirm password'
            ]
        );


        $udata = new User;
        $udata->name = $request['sg-name'];
        $udata->email = $request['sg-email'];
        $udata->password = password_hash($request['sg-password'], PASSWORD_DEFAULT);
        $udata->save();
        return redirect('login');
    }




    public function Signup()
    {
        return view('layouts._signup');
    }
    public function Showlogin()
    {
        return view('layouts._login');
    }
    public function userLogin(Request $request)
    {
        $validated = $request->validate(
            [

                'email' => 'email|required',
                'password' => 'required|min:8',
            ]
        );
        $email = $request->input('email');
        $pass = $request->input('password');
        $userd = User::where('email', $email)->first();
        if (empty($userd)) {
            return redirect('/login')
                ->withErrors(['email' => 'The User not Found please Register your email '])
                ->withInput();
        } else {
            if (password_verify($pass, $userd['password'])) {


                // dd($session = session()->all());
                session(['username' => $userd['name']]);
                session(['useremail' => $userd['email']]);
                session(['userid' => $userd['id']]);

                dd(session()->all());
            } else {
                return redirect('/login')
                    ->withErrors(['password' => 'The Password do not match']);
            }
        }
    }
}