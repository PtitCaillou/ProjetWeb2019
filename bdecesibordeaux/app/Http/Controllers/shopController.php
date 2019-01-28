<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Basket;
use GuzzleHttp\Client;

class shopController extends Controller
{
    public function shop() {
        $datas = json_decode(file_get_contents('http://bdecesibordeaux:3000/products'), true);
        $products = [];
        foreach($datas as $data){
            $product = new Product();
            $product->id = $data['id'];
            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->description = $data['description'];
            $product->image = $data['path'];
            array_push($products, $product);
        }
        return view('shop', ['product'=>$products]);
    }

    public function add(){
    	return view('addProduct');
    }

    public function basket(){
        $user_id = auth()->user()->id;
        $url = "http://bdecesibordeaux:3000/baskets/uncomplete/" . $user_id;
        $datas = json_decode(file_get_contents($url), true);
        $products = [];
        foreach($datas as $data){
            $product = new Product();
            $product->id = $data['name'];
            $product->name = $data['quantity'];
            $product->image = $data['path'];
            array_push($products, $product);
        }
        return view('basket', ['product'=>$products]);
    }
    public function addBasket(Request $request){
        $client = new Client();
        $user_id = auth()->user()->id;
        $product_id = $request->add;
        $url = "http://bdecesibordeaux:3000/baskets/add/" . $user_id;
        $body['product'] = $product_id;
        $body['quantity'] = "1";
        $body['status'] = "1";
        $response = $client->post($url, ['form_params'=>$body]);
        return $this->shop();
    }

    public function search(Request $request){
        $research = $request->search;
        $uri = "http://bdecesibordeaux:3000/products/" . $research;
        $datas = json_decode(file_get_contents($uri), true);
        $products = [];
        foreach($datas as $data){
            $product = new Product();
            $product->id = $data['id'];
            $product->type = $data['type'];
            $product->price = $data['price'];
            $product->description = $data['description'];
            $product->image = $data['path'];
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
