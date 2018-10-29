<?php

namespace App\Http\Controllers;
use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Mail\SendVerificationToken;

class TokenController extends Controller
{
    public function verify($token)
    {
    	$exists = User::where('verify_token',$token)->exists();

    	if($exists)
    	{
    		$activate = User::where('verify_token',$token)->update([
    			'verify_token' 	=> null,
    			'status'		=> 1,
    		]);

    		return redirect()->route('login')->with('success','You account has been activated successfully, Please log in with your credentials');
    	
    	} else {
    		abort(403,'Sorry this token is either expired or doesnot exist');
    	}
    }

    public function resend(Request $request)
    {
    	$email = $request->email;
    	$exists = User::where('email',$email)->exists();
    	if($exists)
    	{
    		$user = User::where('email',$email)->first();
    		$user->update(['verify_token' => str_random(60)]);
    		Mail::to($user)->send(new SendVerificationToken($user));
    		return redirect()->route('login')->with('success','Email with verification link has been sent to your mail');

    	} else {
    		return redirect()->route('login')->with("failed","Sorry !!! This email account doesnot exists. click <a href='#!' data-toggle='modal' data-target='#resend-verification'>here</a> to resend activation email");
    	}
    }
}
