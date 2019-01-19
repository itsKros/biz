<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Listing;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth')->only('myaccount','admin');
    }

   
    
     public function index()
    {
        $listings = Listing::orderBy('created_at', 'desc')->get();
        return view('frontend.home')->with('listings', $listings);
    }

    public function myaccount()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        return view('frontend.myaccount')->with('listings', $user->listings);
    }

    
}
