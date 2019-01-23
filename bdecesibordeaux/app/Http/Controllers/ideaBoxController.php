<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ideaBoxController extends Controller
{
    public function idBox() {
    return view('idBox');
    }
}
