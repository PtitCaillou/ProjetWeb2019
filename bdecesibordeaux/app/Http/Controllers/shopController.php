<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Basket;

class shopController extends Controller
{
    public function shop() {
        $datas = json_decode(file_get_contents('http://siteweb:3000/products'), true);
        $products = [];
        foreach($datas as $data){
            $product = new Product();
            $product->name = $data['name'];
            $product->price = $data['price'];
            array_push($products, $product);
        }
        return view('shop', ['product'=>$products]);
    }

    public function add(){
    	return view('addProduct');
    }
    public function basket(){
    	return view('basket');
    }
    public function addBasket(){
        $basket = new Basket;
        $product = new Product;
        //dd($product);
        //$basket->name = $product->name;

    	return view('shop', ['product'=>$product]);
    }

    public function search(Request $request){
        $research = $request->search;
        $uri = "http://siteweb:3000/products/" . $research;
        $datas = json_decode(file_get_contents($uri), true);
        $products = [];
        foreach($datas as $data){
            $product = new Product();
            $product->name = $data['name'];
            $product->price = $data['price'];
            array_push($products, $product);
        }
        return view('shop', ['product'=>$products]);
    }
}
