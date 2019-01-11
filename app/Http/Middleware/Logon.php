<?php

namespace App\Http\Middleware;

use Closure;

class Logon
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
        //判断某个 Session 值是否存在
        if ($request->session()->has('admin_login')) {
            return $next($request);
        }else{
             return redirect('home/logon');
        }
        //执行下一次请求
    }
}
