<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('authenticated')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('me', [AuthController::class, 'me']);
    });
});

Route::prefix('character')->middleware('authenticated')->group(function () {
    Route::get('list', [CharacterController::class, 'index']);
    Route::get('show/{uuid}', [CharacterController::class, 'show'])->where('uuid', '[0-9a-f-]+');

    Route::post('create', [CharacterController::class, 'store']);

    Route::delete('delete/{uuid}', [CharacterController::class, 'delete'])->where('uuid', '[0-9a-f-]+');

    Route::put('update/{uuid}', [CharacterController::class, 'update'])->where('uuid', '[0-9a-f-]+');
});
