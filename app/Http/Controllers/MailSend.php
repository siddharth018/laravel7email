<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;

class MailSend extends Controller
{
    public function mailsend()
    {
     $details = [
        'title' => 'Title: Mail from Real Programmer',
        'body' => 'Body: This is for testing email using smtp'
    ];
   
    \Mail::to('siddharth.shukla@kreativstreet.com')->send(new SendMail($details));
   	return view('emails.thanks');
    }
}
