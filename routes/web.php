<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\BooktableController;
use App\Http\Controllers\Frontend\AboutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/book', [BooktableController::class, 'index']);