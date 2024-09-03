<?php

namespace App\Http\Middleware;

use App\Exceptions\UserNotAuthenticatedException;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     * @throws UserNotAuthenticatedException
     */
    public function handle(Request $request, Closure $next): Response
    {
        dd(Auth::user());
        if (!auth()->check()) {
            throw new UserNotAuthenticatedException();
        }

        return $next($request);
    }
}
