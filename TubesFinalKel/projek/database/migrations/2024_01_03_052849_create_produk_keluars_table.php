<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('namaProduk', 60);
            $table->integer('jumlahKeluar');
            $table->enum('jenis', ['makanan', 'minuman']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_keluars');
    }
};
