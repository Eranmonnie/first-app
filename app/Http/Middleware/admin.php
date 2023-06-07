<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    { 
        if (auth()->user()?->name !== 'ajala feranmi' ){
            session()->flash('success', 'you need to be signed in to create a post');
            return back();

        }
        else{
            return $next($request);
        }
        
    }
}
