<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $exception) {
            return response([
                'success' => false,
                'message' => 'Route not found'
            ], Response::HTTP_NOT_FOUND);
        });

        $exceptions->render(function (ValidationException $exception) {
            return response([
                'success' => false,
                'message' => $exception->validator->errors()->first()
            ], Response::HTTP_BAD_REQUEST);
        });

        $exceptions->render(function (\Exception $exception) {
            return response([
                'success' => false,
                'message' => 'An error occurred'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        });
    })->create();
