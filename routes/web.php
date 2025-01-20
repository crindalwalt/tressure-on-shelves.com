<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get("/",[NavigationController::class,"homepage"])->name("home");
Route::get("/products",[NavigationController::class,"shoppage"])->name("product.all");
















// BREEZE ROUTES =============================================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
