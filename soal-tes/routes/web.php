<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Soal 1: Routing dan Controller
// Buatlah sebuah route dan controller untuk menampilkan data produk dari database menggunakan Eloquent.

Route::get('/products', [ProductController::class, 'index']);
// Route::resource('products', ProductController::class);

// PENJELASAN:
// Route::get('/products'...): Mendefinisikan route untuk URL /products.