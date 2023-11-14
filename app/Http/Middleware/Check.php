<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Auth;
class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id=2;
        if($id==3){
            return $next($request);
        }
        else{
            // $url='http://127.0.0.1:8000/';
            return  redirect(route('index'));
        }
    }
}
