<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Basket;

class shopController extends Controller
{
    public function shop() {
       $prod = Product::all();
        return view('shop', ['product'=>$prod]);
    }

    public function add(){
    	return view('addProduct');
    }
    public function basket(){
    	return view('basket');
    }
    public function addBasket(Request $request){
        $add = $request->add;
        $basket = new Basket;
    dump(Product::where('id', '=', $add)->find('id'));
    $product=Product::where('id', '=', $add)->get()->pluck('id');
    Basket::create(['product_id' => $product]);
     $user_id= auth()->user()->id;
    Basket::create(['user_id'=> $user_id]);
    Basket::create(['quantity' => '1']);
    Basket::create(['status'=>'1']);

   $prod = Product::all();
        return view('shop', ['product'=>$prod]);
    }

    public function search(Request $request){
        $research = $request->search;
        $prod = Product::where('name', '=', $research)->get();
        dump($prod);
        return view('shop', ['product'=>$prod]);
    }
    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
       if ($request->type == "1") {
        $product->productType_id = '1';
    }
    elseif (($request->type == "2")) {
        $product->productType_id = '2';
    }
    else{
        $product->productType_id = '3';
    }
    dump($product);
        $prod = Product::all();
        return view('shop', ['product'=>$prod]);
    }
}
