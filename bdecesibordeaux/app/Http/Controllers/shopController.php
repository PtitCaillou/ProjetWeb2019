<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
    public function shop() {
        return view('shop');
    }
}
