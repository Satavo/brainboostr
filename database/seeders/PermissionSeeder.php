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
        $updatePermission = Permission::create(['name' => 'update users']);

        // Create roles
        $adminRole = Role::create(['name' => 'admin']);

        // Assign permissions to roles
        $adminRole->givePermissionTo($updatePermission);
    }
}
