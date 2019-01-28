<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request){
    	$title = $request->title;
    	$content = $request->content;
    	$user_email = $request->email;
    	$user_name = $request->name;
    	$to_email = $request->to_email;

    	try{
    		$data = ['email'=>$user_email, 'name'=> $user_name, 'subject' => $title, 'content'=>$content, 'to_email'=>$to_email ];
    		Mail::send('warning', $data, function($message) use($data){
    			$subject=$data['subject'];
    			 $message->from($data['email'], $data['name'])->subject($subject);
                $message->to($data['to_email']);
               
    		});
    	} 
    	catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
