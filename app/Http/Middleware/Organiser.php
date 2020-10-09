<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Organiser
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
        return $next($request);
      }
      //role user=3
      if(Auth::user()->role == 3){
        return redirect()->route('user');
      }
    }
}
