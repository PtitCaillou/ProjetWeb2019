<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function student()
    {
        return view('student');
    }
}
