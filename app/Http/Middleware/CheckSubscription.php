<?php

namespace App\Http\Middleware;

use Closure;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isSubscribed == 1 || auth()->user()->isSubscribed == 0 && count(auth()->user()->listings) < 3){
            return $next($request);
        }
        return redirect('/my-account')->with('error', 'You are not Subscribed');
    }
}
