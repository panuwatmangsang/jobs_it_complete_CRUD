<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EntCheck
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
        if (!session()->has('LoggedEnt') && ($request->path() != 'auth/ent_login' && $request->path() != 'auth/ent_register')) {
            return redirect('auth/ent_login')->with('fail', 'คุณต้อง login ก่อน');
        }

        if (session()->has('LoggedEnt') && ($request->path() == 'auth/ent_login' || $request->path() == 'auth/ent_register')) {
            return back();
        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
            ->header('Prangma', 'no-cache')
            ->header('Expires', 'Sat 01 Jan 2021 00:00:00 GMT');
    }
}
