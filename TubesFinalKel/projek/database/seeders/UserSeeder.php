<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'gudang',
                'email' => 'gudang@gmail.com',
                'password' => 'password',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@gmail.com',
                'password' => 'password',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'supervisor',
                'email' => 'supervisor@gmail.com',
                'password' => 'password',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'password',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
