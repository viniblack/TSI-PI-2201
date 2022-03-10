<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/create/', [ProductController::class,"create"])->name('product.create');
Route::post('/product/create/', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{product}/', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/edit/{product}/', [ProductController::class, 'update'])->name('product.update');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/destroy/{product}/', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
Route::get('/product/trash/restore/{product}/', [ProductController::class, 'restore'])->name('product.restore');


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create/', [CategoryController::class,"create"])->name('category.create');
Route::post('/category/create/', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{category}/', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/edit/{category}/', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{category}/', [CategoryController::class, 'destroy'])->name('category.destroy');
