<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;

// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');