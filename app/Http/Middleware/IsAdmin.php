<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function __construct(Guard $auth)
    {

        $this->auth = $auth;

    }
    public function handle($request, Closure $next)
    {
        $segments = $request->segments();




        if (Auth::user() && Auth::user()->admin==1) {


            $roles = [];

            $user_roles = @$this->auth->user()->roles;

            foreach ($user_roles as $role) {

                $permission = unserialize($role->permission);

                if($permission){

                    $roles = array_merge($roles, $permission);

                }
            }



            if ($segments[0] == config('site.admin')){




                // dd($roles);
                if (in_array(Route::currentRouteName(), $roles)) {

                    return $next($request);
                }
            }
        }
        else
        {


            return redirect('/login');
        }


        if ($request->ajax()) {

            return response('Unauthorized.', 401);
        }
        elseif(!str_contains('api',Route::currentRouteName())) {

            if (Auth::check() and Auth::user()->admin == 1) {

                return redirect('/')->with('error', 'شما به این بخش دسترسی ندارید.');
            } else {
                return redirect('/');
            }
        }

    }
}
