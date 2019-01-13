<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        return view('frontend.myaccount')->with('listings', $user->listings);
    }

    
}
