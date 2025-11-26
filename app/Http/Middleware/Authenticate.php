<?php
namespace App\Models;Middleware;

use Illuminate\auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login.create');
        }
    }
}