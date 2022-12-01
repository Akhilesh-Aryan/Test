<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu_CategoryController;



Route::get('/', function () {
    return view('dashboard');
});

Route::get('add-cat',[Menu_CategoryController::class, "addCat"]);
Route::get('add-menu/{category_id}',[Menu_CategoryController::class, "addMenu"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
