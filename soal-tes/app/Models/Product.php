<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Soal 2: Migration & Model
// Buatlah migration dan model untuk tabel products yang memiliki kolom: id, name, price, dan stock.
class Product extends Model
{
    protected $fillable = ["name", "price", 'stock']; // agar mass-assignment bisa dilakukan
}

// fillable digunakan agar kamu bisa insert data massal seperti Product::create([...])