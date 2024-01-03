<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProdukMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk_masuks')->insert([
            [
                'namaProduk' => 'Mie Sedap Ayam Bawang',
                'jumlahMasuk' => 20,
                'jenis' => 'makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namaProduk' => 'Bikuit Roma Kelapa',
                'jumlahMasuk' => 35,
                'jenis' => 'makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Schema::create('produk_masuks', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('namaProduk', 60);
        //     $table->integer('jumlahMasuk');
        //     $table->enum('jenis', ['makanan', 'minuman']);
        //     $table->timestamps();       
        // });
    }
}
