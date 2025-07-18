<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["name", "price", 'stock']; // agar mass-assignment bisa dilakukan
}

// fillable digunakan agar kamu bisa insert data massal seperti Product::create([...])