<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class activityController extends Controller
{
        public function activity() {
        return view('activity');
    }
}