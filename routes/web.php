<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;


Route::get('/items',[ItemsController::class, 'index']);
Route::post('/items',[ItemsController::class, 'store']);
Route::get('/items/{id}',[ItemsController::class, 'show']);
Route::put('/items/{id}',[ItemsController::class, 'update']);
Route::delete('/items/{id}',[ItemsController::class, 'destroy']);
