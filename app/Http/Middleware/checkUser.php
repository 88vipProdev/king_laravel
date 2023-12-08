<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Auth;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) {

        if(!Auth::check()) {
          return response()->json(['error'=>'Unauthorized'], 403);
        }
     
        if(Auth::user()->isAdmin()) {
          return $next($request); 
        }
     
        return response()->json(['error'=>'Forbidden'], 403);
     
     }
     
    }

    

