<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $role = Role::create(['name' => 'Manager QRCode']);
        // $permission1 = Permission::create(['name' => 'Créer QRCode']);
        // $permission2 = Permission::create(['name' => 'Modifier QRCode']);
        // $permission3 = Permission::create(['name' => 'Supprimer QRCode']);

        // $role->givePermissionTo($permission1);
        // $permission1->assignRole($role);

        // $role->givePermissionTo($permission2);
        // $permission2->assignRole($role);

        // $role->givePermissionTo($permission3);
        // $permission3->assignRole($role);

    }
}
