<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_barangs')->insert([
            [
                'jenis' => 'makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
