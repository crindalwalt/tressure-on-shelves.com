<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;









//============================================================================
//=========================== STORE ROUTES  ==================================
//============================================================================
Route::get("/", [NavigationController::class, "homepage"])->name("home");
Route::get("/products", [NavigationController::class, "shoppage"])->name("product.all");
Route::get("/products/{product}/view", [NavigationController::class, "product_detail"])->name("product.single");

Route::get("/404", [NavigationController::class, 'notFound'])->name("admin.404");

//============================================================================
//=========================== STORE ROUTES (protected) =======================
//============================================================================
Route::middleware(['auth'])->group(function () {
    Route::get("buy/{product}", [NavigationController::class, "checkout"])->name("checkout");
    Route::post("/buy",[OrderController::class,"store"])->name("checkout.post");
});









// External routes files included here

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
