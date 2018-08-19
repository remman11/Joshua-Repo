<?php

namespace App\Http\Middleware;

use Closure;

class userTypes
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
        if(auth()->check() && $request->user()->intUUserTypeID == 1)
        {
            return redirect('/tugboat');
        }
        else if(auth()->check() && $request->user()->intUUserTypeID == 2)
        {

        }
        else if(auth()->check() && $request->user()->intUUserTypeID == 3)
        {
            
        }
        return $next($request);
    }
}
