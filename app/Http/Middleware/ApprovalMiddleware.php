<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class ApprovalMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->approved) {
                auth()->logout();

                return redirect()->route('login')->with('message', 'Your Account Needs To Be Approved Before You Can Log In For The First Time');
            }
        }

        return $next($request);
    }
}