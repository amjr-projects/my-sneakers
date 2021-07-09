<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class CheckAuth
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
        try {
            if ($request->is('login')) {
                if (session('token', null) !== null) {
                    $token = JWT::decode(session('token'), 'jcj', ['HS256']);
                   if (isset($token)) {
                       return redirect('allTenis');
                   }
                } else {
                    return $next($request);
                }
            } else {
                if (session('token', null) !== null) {
                    $token = JWT::decode(session('token'), 'jcj', ['HS256']);
                   if (isset($token)) {
                       session(['user_cd' => $token->cd_usuario]);
                       session(['user_name' => $token->nome]);
                       return $next($request);
                   }
                } else {
                    return redirect('login');
                }
            }
        } catch (\Throwable $th) {
            session(['token' => null]);
            return redirect('login');
        }
    }
}
