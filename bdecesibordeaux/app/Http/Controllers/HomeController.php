<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       /* $request->user()->authorizeRoles(['BDE', 'student']);*/
        return view('welcome');
    }
   /* public function someAdminStuff(Request $request)
  {
    $request->user()->authorizeRoles('BDE');
    return view('boutique');
  }*/
}
