<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        $permission = explode('|', $permission);

        //neu thoa man dieu kien permission
        if(checkPermission($permission)){
            $request->session()->put('permission', $permission);
            return $next($request);
        }

        $request->session()->flush();
        return response()->view('permission_error');
    }
}
