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
            $product->description = $data['description'];
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
  
     public function autocomplete(Request $request)
    {
        $data = Product::select("name")
                ->where("name","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }

}
