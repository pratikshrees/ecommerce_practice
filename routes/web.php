<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[Pagescontroller::class,'home']);
Route::get('/about',[Pagescontroller::class,'about']);
Route::get('/contact',[Pagescontroller::class,'contact']);
Route::get('/services',[Pagescontroller::class,'services']);
Route::get('/login',[Pagescontroller::class,'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories', [CategoryController::class, 'index'])-> name('categories.index'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
