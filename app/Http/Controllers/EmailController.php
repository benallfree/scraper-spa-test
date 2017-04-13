<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendMail(Request $request) {
        Mail::send(['html' => 'emails.alertEmail'], ['data' => $request], function($message) use ($request)
        {
            echo ($request->email);
            $message->to('splash.igor@gmail.com');
        });
    }
}
