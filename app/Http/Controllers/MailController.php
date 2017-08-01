<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;

class MailController extends Controller
{
    public function send()
    {
    	Mail::send(['text'=>'mail'].['name','Sarthak'],function($message)
    	{
    		$message->to('helganovelo@gmail.com','To Helga')->subject('Test email');
    		$message->from('helganovelo@gmail.com','From Helga');
    	});
    }
}
