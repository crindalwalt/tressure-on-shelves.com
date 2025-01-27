<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// STORE ROUTES =============================================================
Route::get("/",[NavigationController::class,"homepage"])->name("home");
Route::get("/products",[NavigationController::class,"shoppage"])->name("product.all");
Route::get("/products/{product}/view",[NavigationController::class,"product_detail"])->name("product.single");




// ADMIN ROUTES =============================================================

Route::prefix("/admin")->group(function (){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");
    Route::get("/products",[ProductController::class,"index"])->name("admin.products.all");







});


































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
