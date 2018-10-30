<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactAdminController extends Controller
{
    public function send(Request $request){
      $data = $request->all();
      $template = "emails.contact";
      $receiver = "StephenGeorge1130@gmail.com";
      $subject = "New Question from ".data_get($data, "name");
      Mail::send($template, $data, function ($message) use($receiver, $subject){
        $message->to($receiver)->bcc('mzaalan@gmail.com');
        $message->subject($subject);
      });
    }
}
