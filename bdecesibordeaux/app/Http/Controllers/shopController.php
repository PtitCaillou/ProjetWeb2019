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
    public function addBasket(){
        $basket = new Basket;
        dd(Product::find('id'));
    	return view('shop');
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
