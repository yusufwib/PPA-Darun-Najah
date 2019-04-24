<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){

        $request->validate([
            'mail' => 'required|max:255|email',
            'text' => 'required',
        ]);

        $mail = Mail::raw($request->input('text'), function($message) use ($request){
            $message->to('yusufw2429@gmail.com')->subject('SMAN3 WEBSITE');
            $message->replyTo($request->input('mail'));
            $message->from('yusufw2429@gmail.com',$request->input('mail'));

        });
        $posted = [
            'data' => [[
                'email' => $request->input('mail'),
                'text' => $request->input('text')
            ]]
        ];
        return response()->json($posted,200);
    }
}
