<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAdminControler;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DBsteamController;




Route::get('/', [MainController::class, 'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});


Route::get('/steam', [DBsteamController::class, 'show']);
// Маршруты для админпанели
Route::get('/myadmin', [MyAdminControler::class, 'index']);



Route::get('/about', function () {
    return view('front.about');
});
