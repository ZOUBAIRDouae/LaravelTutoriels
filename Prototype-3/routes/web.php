<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth.middleware')->group(function () {
    Route::resource('articles' , AdminController::class);
});

Route::post('/logout' , function(){
    Auth::logout();
    return  redirect('/login');
})->name('logout');



