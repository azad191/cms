<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }
<<<<<<< HEAD
=======
//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check() && Auth::user()->role_id == 3) {
//              //  return redirect('freelancer/profile');
//                return 'ok';
//            }else{
//                return redirect('buyer/dashboard');
//            }
//        }
>>>>>>> 8b71f0b5417b4f2e43fb2edfdbb8267735cb2016

        return $next($request);
    }
}
