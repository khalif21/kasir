<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Membuat peran 'admin'
        $adminRole = Role::where('name', 'admin')->first();

    if (!$adminRole) {
        // Jika peran 'admin' belum ada, maka buat peran 'admin'
        $adminRole = Role::create(['name' => 'admin']);
    }

    // Membuat peran 'user' (jika belum ada)
         $userRole = Role::firstOrCreate(['name' => 'user']);

        // Membuat izin 'manage products'
        $manageProductsPermission = Permission::create(['name' => 'kategori']);

        // Menetapkan izin kepada peran 'admin'
        $adminRole->givePermissionTo($manageProductsPermission);

        // Menetapkan peran 'admin' kepada pengguna tertentu
        // Misalnya, dengan ID pengguna 1
        $user = \App\Models\User::find(1);
        $user->assignRole('admin');
    }
}
