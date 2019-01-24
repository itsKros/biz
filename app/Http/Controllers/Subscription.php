<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Subscription extends Controller
{
    public function subscribe(Request $request, $id){
        $user = User::find($id);
        $user->isSubscribed = $request->input('bio');
    }
}
