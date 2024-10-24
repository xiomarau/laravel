<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OperacionesController;



Route::get('/saludo',[ProductController::class,'saludo']);

Route::get('/create',[ProductController::class,'create']);

Route::post('/store',[ProductController::class,'store'])->name('store');


