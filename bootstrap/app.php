<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

      //  $middleware->alias([
      //      'test' => \App\Http\Middleware\Testmiddleware::class,
      //  ]);

        $middleware->alias([
        'simplemsg' => \App\Http\Middleware\Simplemsg::class,
        'Hellomiddleware' =>   \App\Http\Middleware\Hellomiddleware::class,
        'Testnew' =>   \App\Http\Middleware\Testnew::class,
        'CheckCreds' =>   \App\Http\Middleware\CheckCreds::class,
        

    ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();