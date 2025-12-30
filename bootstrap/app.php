<?php

use App\Http\Middleware\AgeChecker;
use App\Http\Middleware\CountryChecker;
use App\Http\Middleware\LanguageChecker;
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

        // Global middleware is needed to be appended here
        // $middleware -> append(AgeChecker::class);

        // Group Middlewares are needed to be appended here
        $middleware -> appendToGroup('user_middleware',[CountryChecker::class,LanguageChecker::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
