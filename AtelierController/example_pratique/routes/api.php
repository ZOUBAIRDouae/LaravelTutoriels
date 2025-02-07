<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
 |--------------------------------------------------------------------------
 | API Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register API routes for your application. These
 | routes are loaded by the RouteServiceProvider within a group which
 | is assigned the "api" middleware group. Enjoy building your API!
 |
 */


 use App\Http\Controllers\PostController;
 



 Route::post('/posts', [PostController::class, 'store']);
 Route::get('/posts', [PostController::class, 'index']);
 Route::get('/posts/{post}', [PostController::class, 'show']);
 Route::put('/posts/{post}', [PostController::class, 'update']);
 Route::delete('/posts/{post}', [PostController::class, 'destroy']);
 
 
