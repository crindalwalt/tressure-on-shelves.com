<?php



// ADMIN ROUTES =============================================================

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;


//============================================================================
//=========================== ADMIN ROUTES (protected) =======================
//============================================================================
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


    //? ORDER CRUD
    Route::get("/orders",[OrderController::class,"index"])->name("admin.order.index");
    Route::get("/orders/{order}/process",[OrderController::class,"process"])->name("admin.order.process");
    Route::get("/orders/{order}/cancell",[OrderController::class,"cancel"])->name("admin.order.cancel");
});



