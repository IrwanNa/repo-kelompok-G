<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::updateOrCreate(
            [
                'name' => 'admin',
            
            ],
            ['name' => 'admin']
        );

        Role::updateOrCreate(
            [
                'name' => 'supervisor',
            
            ],
            ['name' => 'supervisor']
        );

        Role::updateOrCreate(
            [
                'name' => 'kasir',
            
            ],
            ['name' => 'kasir']
        );

        Role::updateOrCreate(
            [
                'name' => 'gudang',
            
            ],
            ['name' => 'gudang']
        );
    }
}
