<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RoleCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        if(!Auth::check()) return redirect('/login');

        if($request->getRequestUri() === '/' || $request->getRequestUri() === '') {
            return $next($request);
        }

        $uri = explode('/', $request->getRequestUri());
        $role = session('role');

        switch ($uri[2]){
            case 'project':
            case 'task':
                if($role !== 'manager' || $role !== 'admin') return redirect('/login')->with('error', 'Access denied');
                break;
            case 'user':
                if($role !== 'admin') return redirect('/login')->with('error', 'Access denied');
                break;
        }

        return $next($request);
    }
}
