<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/users', App\Http\Controllers\User\IndexController::class)->name('admin.users.index');
Route::post('/admin/users', App\Http\Controllers\User\StoreController::class)->name('admin.users.store');