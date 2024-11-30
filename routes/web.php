<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticated;
use App\Models\Product;
use App\Models\Category;

Auth::routes();
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    $products = Product::all();
    return view('user.index',compact('products'));
})->name('user.index');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::middleware(Authenticated::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/destroy/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/create-product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/store-product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/edit-product/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update-product/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/destroy-product/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

});

Route::get('/all-products', [\App\Http\Controllers\FrontController::class, 'products'])->name('uproducts.index');
Route::get('/all-categories', [\App\Http\Controllers\FrontController::class, 'categories'])->name('categories.index');
Route::get('/related-products/{id}', [\App\Http\Controllers\FrontController::class, 'categorizedProducts'])->name('product.by.catgory');

Route::post('/add-to-cart/{id}', [\App\Http\Controllers\CartController::class, 'store'])->name('cart.add');
Route::post('/order/{id}', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.add');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'orders'])->name('order.index');


