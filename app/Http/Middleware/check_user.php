<?php

namespace App\Http\Middleware;

use Closure;

class check_user
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
        /*if (Auht::user()->admin != 7)
        {
        return redirect('about');
      }
      */
      return $next($request);
    }

}
