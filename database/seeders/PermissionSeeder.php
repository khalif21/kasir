<?php

// database/seeders/PermissionSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Membuat roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);

        // Membuat permissions dan assign ke role
        Permission::create(['name' => 'dashboard'])->assignRole($roleAdmin);
        Permission::create(['name' => 'kategori'])->assignRole($roleAdmin);
        Permission::create(['name' => 'penjualan'])->assignRole($roleUser);
    }
}

