<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthMW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $username = Session::get('username');
        $auth = Session::get('authenticated');

        if (($username !== "") && ($auth == "true")){
            return $next($request);
        }
        else{
            return redirect('/login');
        }
        
    }
}
