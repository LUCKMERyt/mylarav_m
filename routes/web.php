<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAdminControler;
use App\Http\Controllers\DBsteamController;
use App\Http\Controllers\MainController;




Route::get('/',[MainController::class,'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});



// Маршруты для админпанели
Route::get('/myadmin',[MyAdminControler::class,'index']);

Route::get('/steam',[DBsteamController::class,'show']);
