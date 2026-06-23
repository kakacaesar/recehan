<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ShieldRoleSeeder extends Seeder
{
    public function run(): void
    {
        $superadmin = Role::firstOrCreate([
            'name' => 'superadmin',
            'guard_name' => 'web',
        ]);

        $superadmin->syncPermissions(
            Permission::all()
        );
    }
}