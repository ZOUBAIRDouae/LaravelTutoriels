<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PostController;


Route::prefix('api')->group(function () {
    Route::apiResource('posts', PostController::class);
});