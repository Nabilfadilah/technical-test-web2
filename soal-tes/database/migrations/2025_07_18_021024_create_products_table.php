<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Soal 2: Migration & Model
    // Buatlah migration dan model untuk tabel products yang memiliki kolom: id, name, price, dan stock.
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // primary key auto increment
            $table->string('name'); // nama product
            $table->decimal('price', 10, 2); // harga dengan dua angka desimal
            $table->integer('stock'); // stok product
            $table->timestamps(); // kolom createdd_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // menghapus tabel saat rollback
    }
};
