<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Role yang ada sesuai studi kasus

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

        // Permisssion untuk diakses role

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_stok',
            ],
            ['name' => 'view_stok']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_cetaklaporan',
            ],
            ['name' => 'view_cetaklaporan']
        );


        // Memberikan permission sesuai role

        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_supervisor->givePermissionTo($permission2);

        // memberikan hak role ke user

        $user = User::find(1);

        $user->assignRole(['admin', 'supervisor']);

    }
}
