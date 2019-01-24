<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BDEController extends Controller
{
    public function construct(){
    	$this->middleware('auth');
    }
    public function BDE(){
    	
    	return view('boutique');
    }
}
