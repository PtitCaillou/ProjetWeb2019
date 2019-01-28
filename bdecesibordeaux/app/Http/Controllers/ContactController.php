<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Contact;

class ContactController extends Controller
{

	
    public function sendMail(Request $request){
    	$datas= [];
    	$data = new Contact;
    	$data->email  = $request->email;
    	$data->title = $request->title;
    	$data->content = $request->content;
    	$data->name = $request->name;
    	$data->to_email = $request->to_email;
    	array_push($datas, $data);


    	try{
    		//$data = ['email'=>$user_email, 'name'=> $user_name, 'subject' => $title, 'content'=>$content, 'to_email'=>$to_email ];
    		Mail::send('contact',['data'=> $datas], function($message) use($data){
    			$subject=$data->title;
    			 $message->from($data->email, $data->name)->subject($subject);
                $message->to($data->to_email);
               
    		});

    	} 
    	catch (\Exception $e)
        {
            dd($e->getMessage());
        }
        return view('welcome');
    }
}
