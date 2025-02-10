<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;









// STORE ROUTES =============================================================
Route::get("/", [NavigationController::class, "homepage"])->name("home");
Route::get("/products", [NavigationController::class, "shoppage"])->name("product.all");
Route::get("/products/{product}/view", [NavigationController::class, "product_detail"])->name("product.single");



Route::middleware(['auth'])->group(function () {
    Route::get("buy/{product}", [NavigationController::class, "checkout"])->name("checkout");
});


Route::get("/404", [NavigationController::class, 'notFound'])->name("admin.404");


// ADMIN ROUTES =============================================================

Route::middleware(['auth', AdminCheck::class])->prefix("/admin")->group(function () {
    //? PRODUCT CRUD
    Route::get("/", [AdminController::class, "dashboard"])->name("admin.dashboard");
    Route::get("/products", [ProductController::class, "index"])->name("admin.products.all");
    Route::get("/products/create", [ProductController::class, "create"])->name("products.create");
    Route::post("/product/store", [ProductController::class, "store"])->name("product.store");


    //? CATEGORY CRUD
    Route::get("/categories", [CategoryController::class, 'index'])->name("admin.categories");
    Route::get("/categories/create", [CategoryController::class, 'create'])->name("admin.categories.create");
    Route::post("/categories/store", [CategoryController::class, 'store'])->name("category.store");
    Route::get("/categories/{cat}/delete", [CategoryController::class, 'destroy'])->name("admin.categories.destroy");
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

require __DIR__ . '/auth.php';
