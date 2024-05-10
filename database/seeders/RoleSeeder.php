<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create roles and assign created permissions
        Role::create(['name' => 'super-administrator'])
            ->givePermissionTo(Permission::all());
        Role::create(['name' => 'system-administrator'])
            ->givePermissionTo([]);
        Role::create(['name' => 'Staff'])
            ->givePermissionTo([]);
        Role::create(['name' => 'Manager'])
            ->givePermissionTo([]);
        Role::create(['name' => 'owner'])
            ->givePermissionTo([]);
        Role::create(['name' => 'HR Executive'])
            ->givePermissionTo([]);

    }
}
