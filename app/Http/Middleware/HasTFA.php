<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HasTFA
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
        if (Session::has('tfa')) {
            // dd(auth()->check());
            if (auth()->check()) {
                if (auth()->user()->role == 'customer') {
                    return redirect('dashboard');
                }else {
                    return redirect('admin');
                }
            }else {
                session()->forget('tfa');
            }
            
        }else {
            return $next($request);
        }
    }
}
