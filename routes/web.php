<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

// Recipe routes
Route::resource('recipes', RecipeController::class);

// Comment routes
//Route::post('recipes/{recipe}/comments', [CommentController::class, 'store'])->name('comments.store');

// Update the root route to render the index view for recipes
Route::get('/', [RecipeController::class, 'index'])->name('home');
