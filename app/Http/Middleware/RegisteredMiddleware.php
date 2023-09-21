<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class RegisteredMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next)
    {
        if ($this->auth->user() && $this->auth->user()->registered) {
            return $next($request);
        }

        return redirect('/register')->with('error', 'Please complete the registration process.');
    }
}