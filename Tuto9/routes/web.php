<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\CheckRole;

Route::resource('articles' , ArticleController::class);

// Route::get('/dashboard' , [DashboardController::class , 'index'])->middleware('auth');

Route::middleware([CheckRole::class])->group(function() {
    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard']);
    Route::resource('/admin/articles' , AdminArticleController::class);
});

Route::get('/login' , function(){
    return 'login page' ;
})->name('login');

Route::get('/home' , function(){
    return 'home page' ;
})->name('home');



