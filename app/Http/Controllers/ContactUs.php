<?php

namespace App\Http\Controllers;
use App\Mail\ContactReceived;
use App\Mail\ContactAlertSender;
use Mail;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function send(){

    	$r = request();
    	$this->validate($r,[
    		'contactName' => 'required',
    		'contactEmail' => 'required|email',
    		'contactSubject' => 'required',
    		'contactMessage' => 'required'
    	]);
    	Mail::to('info@booksforcast.com')
	    ->send(new ContactReceived($r));

        Mail::to($r->contactEmail)
        ->send(new ContactAlertSender($r));

    	return "OK";
    }

    public function test(){
        dd('hello');
    }
}
