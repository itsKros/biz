<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth')->only('myaccount','admin');
    }

   
    
     public function index()
    {
        return view('frontend.home');
    }

    public function myaccount()
    {
        return view('frontend.myaccount');
    }

    public function admin()
    {
        return view('backend.admin');
    }
}
