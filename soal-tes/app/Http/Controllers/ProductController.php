<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Soal 1: Routing dan Controller
    // Buatlah sebuah route dan controller untuk menampilkan data produk dari database menggunakan Eloquent.
    public function index()
    {
        $products = Product::all(); // ambil semua data
        return view('products', compact('products')); // kirim ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

// PENJELASAN:
// Route::get('/products'...): Mendefinisikan route untuk URL /products.
// ProductController@index: Method index dipanggil ketika user mengakses route tersebut.
// Product::all(): Mengambil semua data dari tabel products menggunakan Eloquent ORM.
// compact('products'): Mengirim variabel $products ke view 