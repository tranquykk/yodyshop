<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        
        $username = Auth::user()->username;
        if($username != 'admin' && $username != 'mod' && $username != 'user') {
            Auth::logout();
            return redirect()->route('auth.login')->with('error', 'Bạn vui lòng đăng nhập');
        }

        if(strpos($role, $username) === false) {
            return redirect()->route('admin.index.index')->with('error', 'Bạn không được quyền thực hiện chức năng này');
        }

        return $next($request);
    }
}
