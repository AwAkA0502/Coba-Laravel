<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DesignController;


Route::get('/designs/create', function () {
    return view('designs.create');
})->middleware('auth');

Route::get('products/create', function () {
    return view('products.create');
});

Route::get('/designs/create', [DesignController::class, 'create'])->name('designs.create');
Route::post('/designs', [DesignController::class, 'store'])->name('designs.store');
Route::get('/designs', [DesignController::class, 'index'])->name('designs.index');


Route::post('products', [ProductController::class, 'store'])->name('products.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
