<?php

use App\Http\Controllers\Public\ProductsController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    });
    Route::get('/products/create', [ProductsController::class, 'create'])->name('public.products.create');
});

Route::get('/products', [ProductsController::class, 'index'])->name('public.products.index');
Route::get('/products/{product}', [ProductsController::class, 'show'])->name('public.products.show');
