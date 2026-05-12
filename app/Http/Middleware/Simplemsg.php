<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Simplemsg
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  /*  public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    } */


public function handle($request, Closure $next)
{
    //return response('Hello World');
    // return $next($request)->setContent('Hello World');


     // Let the request continue and get the original response
    $response = $next($request);

    // Modify the response content
    $originalContent = $response->getContent();
    $newContent = 'MIDDLEWARE MESSAGE.</br> ' . $originalContent;

   $response->setContent($newContent);

    return $response;
}

}
