<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroceryItemController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('grocery', GroceryItemController::class);
