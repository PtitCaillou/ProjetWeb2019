<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Event;

class mailController extends Controller
{
    public function warningProduct(Request $request){
    	$id = $request->warningID;

    	$product = Product::where('id', '=', $id)->get();
dd($product);
    	return view('warning', ['product'=>$product]);

    }

    public function warningEvent(Request $request){
    	$id = $request->warningID;
    	$event = Event::where('id', '=', $id)->get();
    	return view('warning', ['product'=>$event]);
    }
}
