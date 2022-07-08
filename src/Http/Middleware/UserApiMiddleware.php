<?php

namespace Deepsoumya\ApiPass\Http\Middleware;

// use App\Helpers\Token;

use App\Helpers\ApiAuth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserApiMiddleware
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user =  ApiAuth::loginToken($request);
        if ($request->is('api/register') || $request->is('api/login')) {
            return $next($request);
        }
        if ($user['status'] == false) {
            $response = array('status' => false, 'msg'=> 'pls login and add token', 'error' => 'token missing');
            return response()->json($response, 413);
        } else {
            $request->userData = $user['user'];
            return $next($request);
        }

    }
}
