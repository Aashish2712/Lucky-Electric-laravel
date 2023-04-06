<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Str;
use function PHPUnit\Framework\assertNotEmpty;
use App\Mail\Invoices;
use App\Mail\MemberCredentials;
use Illuminate\Support\Facades\Mail;


class Signupcontroller extends Controller
{

    public function Signup()
    {
        return view('layouts._signup');
    }

    public function Create(Request $request)
    {
        $validated = $request->validate(
            [
                'sg-name' => 'required',
                'sg-email' => 'email|required|unique:users,email',
                'sg-password' => [
                    'required',
                    'min:8',

                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
                ],
                'password_confirmation' => 'required|same:sg-password'

            ],
            [
                'sg-name.required' => 'Please enter your name.',
                'sg-email.required' => 'Please enter your email address.',
                'sg-email.email' => 'Please enter a valid email address.',
                'sg-email.unique' => 'This email address is already Registered .',
                'sg-password.required' => 'Please enter your password.',
                'sg-password.confirmed' => 'The password field confirmation does not match.',
                'sg-password.min' => 'The password  field must be at least :min characters.',
                'password_confirmation.same' => 'The Password field must match Confirm password',
                'sg-password.regex' => 'The password field must contain at least one uppercase letter, one lowercase letter, one number, and one special character.'
            ]
        );



        session(['name' => $request['sg-name']]);
        session(['email' => $request['sg-email']]);
        session(['password' => password_hash($request['sg-password'], PASSWORD_DEFAULT)]);

        $veri_code = strval(mt_rand(100000, 999999));
        session(['veri_code' => $veri_code]);
        // session(['useremail' => $userd['email']]);
        $details = [
            'name'  => session('name'),
            'email'  => session('email'),
            'code'   => $veri_code,
        ];
        Mail::to(session('email'))->send(new Invoices($details));
        return redirect('/verify');
    }


    public function Showverify()
    {
        return view('layouts._otpverification');
    }




    public function enroll_user(Request $request)
    {
        $validated = $request->validate(
            [
                'otp' => 'required|numeric',
            ]
        );
        if (session('veri_code') == $request['otp']) {

            $udata = new User;
            $udata->name = session('name');
            $udata->email = session('email');
            $udata->password = session('password');
            $udata->save();
            $request->session()->flush();
            return redirect('login');
        } else {
            return redirect('/verify')
                ->withErrors(['otp' => 'The OTP you entered do not match']);
        }
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
                session(['User_name' => $userd['name']]);
                session(['User_email' => $userd['email']]);
                session(['User_id' => $userd['id']]);
                return view('index');
            } else {
                return redirect('/login')
                    ->withErrors(['password' => 'The Password do not match']);
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('index');
    }
}
