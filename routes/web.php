<?php

// use App\Http\Controllers\AdminContrller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::prefix('user/')->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('create', 'create');
        Route::get('list', 'list');
        Route::get('update', 'update');
        Route::get('delete', 'delete');
        //Route::get('{id}', 'show');
    });
});

// Route::resource('admin', AdminContrller::class);

Route::get('/',[RegisterController::class, 'index']);
Route::get('user/register',[RegisterController::class, 'store']);

Route::get('/login', function(){
    return view('login');
});
Route::post('user/login',[LoginController::class, 'login']);