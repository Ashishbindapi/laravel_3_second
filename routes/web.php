<?php

use App\Http\Controllers\AdminContrller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user/')->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('create', 'create');
        Route::get('list', 'list');
        Route::get('update', 'update');
        Route::get('delete', 'delete');
    });
});

Route::resource('admin', AdminContrller::class);