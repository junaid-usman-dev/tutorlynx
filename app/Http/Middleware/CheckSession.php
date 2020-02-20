<?php

namespace App\Http\Middleware;

use Closure;

class CheckSession
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
        // check user session value
        // $request->session()->get('key');
        // $ip = $request->ip();
        if (empty($request->session()->get('session_user_id ') )) {
            return redirect ('/signin'); // Go to dashboard
        }

        return $next($request);
    }
}
