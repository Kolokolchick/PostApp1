<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', App\Http\Controllers\User\API\IndexController::class);

Route::get('/posts', App\Http\Controllers\Post\API\IndexController::class);
Route::get('/posts/{id}', App\Http\Controllers\Post\API\ShowController::class);
Route::post('/posts', App\Http\Controllers\Post\API\StoreController::class);