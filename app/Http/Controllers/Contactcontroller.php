<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MemberCredentials;
use App\Models\Contactus;

class Contactcontroller extends Controller
{

    public function index()
    {
        if (session()->has('User_name') && session()->has('User_email')) {

            return view('contact');
        }
        return view('layouts._login');
    }
    public function contactus(Request $request)
    {
        $validated = $request->validate(
            [
                'Name' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ],


        );
        $details = [
            'Name'  => $request['Name'],
            'user_email'  => session('User_email'),
            'subject' => $request['subject'],
            'message' => $request['message'],
        ];

        // Mail::to('')->send(new MemberCredentials($details));

        $con = new Contactus;
        $con->u_name =  $request['Name'];
        $con->u_email =  session('User_email');
        $con->u_id =  session('User_id');
        $con->subject = $request['subject'];
        $con->message = $request['message'];
        $con->save();
        dd($con);
        return redirect('contact');
    }
}
