<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', App\Http\Controllers\User\Api\IndexController::class);

Route::get('/posts', App\Http\Controllers\Post\Api\IndexController::class);
Route::get('/posts/{post}', App\Http\Controllers\Post\Api\ShowController::class);
Route::post('/posts', App\Http\Controllers\Post\Api\StoreController::class);
Route::get('/notifications/{user}', App\Http\Controllers\User\Api\Notification\ShowController::class);