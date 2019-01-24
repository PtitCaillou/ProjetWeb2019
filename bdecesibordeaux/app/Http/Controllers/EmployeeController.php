<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function employee()
    {
        return view('employee');
    }
}
