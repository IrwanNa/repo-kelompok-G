<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_stok',
            ],
            ['name' => 'view_stok']
        );

        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            
            ],
            ['name' => 'admin']
        );

        $role_admin->givePermissionTo($permission);

    }
}
