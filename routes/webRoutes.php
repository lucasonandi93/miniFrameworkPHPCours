<?php

use app\Controllers\EvenNumberController;
use app\Controllers\RandomNumberController;
use Lib\Route;
use app\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
    return 'test page contact';
});

Route::get('/variable/:change', function($change){
    return 'test page variable: ' . $change;
});
Route::get('/random', [RandomNumberController::class, 'index']);

Route::get('/even', [EvenNumberController::class, 'listEvenNumbers']);

Route::get('/even/:startAt/:quantity', [EvenNumberController::class, 'listEvenNumbers']);


Route::post('/even', [EvenNumberController::class, 'isEven']);



Route::dispatch();