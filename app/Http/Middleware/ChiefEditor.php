<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChiefEditor
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
        return $next($request);

        if(auth()->user()->role == 2){
            return $next($request);
        }

        return redirect('home')->with('error',"Halaman ini Hanya Boleh Diakses oleh Super Admin dan Chief Editor");
    }
}
