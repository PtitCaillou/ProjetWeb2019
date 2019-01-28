<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        Mail::to('leo.chazeau@viacesi.fr')
            ->send(new Contact($request->except('_token')));
 
        return view('confirm');
    }
}
