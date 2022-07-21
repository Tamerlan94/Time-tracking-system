<?php

namespace App\Http\Middleware;

use App\Service\BaseService;
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
        if($request->getRequestUri() === '/' || $request->getRequestUri() === '') {
            if(!Auth::check()){
                return redirect()->route('index');
            }
        }

        $baseService = new BaseService();

        $uri = explode('/', $request->getRequestUri());
        $role = $request->cookie('role');

        if(key_exists(2, $uri)){
            switch ($uri[2]){
                case 'project':
                case 'task':
                    if($role !== 'manager' && $role !== 'admin') return redirect()->route('index')->with('error', 'Access denied');
                    else return $next($request);
                case 'user':
                    if(session('role') !== 'admin') return redirect()->route('index')->with('error', 'Access denied');
                    break;
            }
        }

        return $next($request);
    }
}
