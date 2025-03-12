<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', function () {
    return view('dashboard');
});

Route::resource('article', ArticleController::class);

// Route::get('/editor', function () {
//     return view('dashboard');
// })->middleware('role:editor');