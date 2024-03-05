<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    public function index( Request $request ){
      $request->validate([
            'to' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);


  $to = $request->input('to');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // You can customize the mail view and parameters as per your requirements
        Mail::to($to)->queue(new DemoMail($subject, $message));

        return response()->json(['message' => 'Email added to queue']);



    }
}
