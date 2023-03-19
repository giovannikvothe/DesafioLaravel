<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermMiddleware
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
        $user = Auth()->user();

        if( $user->type != 0 ) {
            return redirect('/aulas');
        }
        return $next($request);
    }
}
