<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User
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
      if(!Auth::check()){
        return redirect()->route('login');
      }
      //role admin=1
      if(Auth::user()->role == 1){
        return redirect()->route('admin');
      }
      //role organiser=2
      if(Auth::user()->role == 2){
        return redirect()->route('organiser');
      }
      //role user=3
      if(Auth::user()->role == 3){
        return $next($request);
      }
    }
}
