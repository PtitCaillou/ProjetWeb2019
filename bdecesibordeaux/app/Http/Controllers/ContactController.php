<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function sendMail(){
    	$title = "Signalement d'une publication";
    	$content = "Une publication a été signalée";
    	$user_email = "email";
    	$user_name = "nom";

    	try{
    		$data = ['email'=>$user_email, 'name'=> ]
    	}
    }
}
