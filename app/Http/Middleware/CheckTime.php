<?php

namespace App\Http\Middleware;

use Closure;
use Hekmatinasser\Verta\Facades\Verta;

class CheckTime
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
        if(config('app.timer')) {
            if (!(Verta::parse(config('app.day1s'))->isPast() && Verta::parse(config('app.day1e'))->isFuture())) {
                abort(270,"It's not play time");
            }elseif (!(Verta::parse(config('app.day2s'))->isPast() && Verta::parse(config('app.day2e'))->isFuture())) {
                abort(270,"It's not play time");
            }
        }
        return $next($request);
    }
}
