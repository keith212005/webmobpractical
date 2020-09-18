<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Route::middleware(['auth:sanctum', 'verified'])->get('/product', function () {
//    return view('product');
//})->name('product.list');


Route::get('/product', [ProductController::class, 'index'])->name('product.list');

Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');

Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::get('/delete-product/{id}', [ProductController::class, 'delete']);

Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');

