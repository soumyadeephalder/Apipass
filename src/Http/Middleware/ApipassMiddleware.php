<?php

namespace Deepsoumya\Apipass\Http\Middleware;


use Closure;
use Deepsoumya\Apipass\Helpers;
use Illuminate\Http\Request;

class ApipassMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $user =  Helpers::loginToken($request, $guard);
        if ($request->is('api/register') || $request->is('api/login')) {
            return $next($request);
        }
        if ($user['status'] == false) {
            $response = array(
                'status' => false, 
                'msg' => 'pls login and add token', 
                'error' => 'token missing', 
                'guard' => $guard
            );
            return response()->json($response, 413);
        } else {
            $request->userData = $user['user'];
            $request->guard = $guard;
            return $next($request);
        }
    }
}
