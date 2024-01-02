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
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            
            ],
            ['name' => 'admin']
        );

        $role_supervisor = Role::updateOrCreate(
            [
                'name' => 'supervisor',
            
            ],
            ['name' => 'supervisor']
        );

        $role_kasir = Role::updateOrCreate(
            [
                'name' => 'kasir',
            
            ],
            ['name' => 'kasir']
        );

        $role_gudang = Role::updateOrCreate(
            [
                'name' => 'gudang',
            
            ],
            ['name' => 'gudang']
        );
    }
}
