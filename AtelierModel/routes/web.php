<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\VisitorsController;

Route::get('/visitors', [VisitorsController::class, 'display']);