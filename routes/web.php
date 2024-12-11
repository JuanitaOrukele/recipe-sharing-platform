<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;
// Recipe routes
Route::resource('recipes', RecipeController::class);

// Comment routes
Route::post('recipes/{recipe}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/', function () {
    return view('welcome');
});
