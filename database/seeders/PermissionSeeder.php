<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            // User
            'view_user',
            'create_user',
            'update_user',
            'delete_user',

            // Pemasukan
            'view_pemasukan',
            'create_pemasukan',
            'update_pemasukan',
            'delete_pemasukan',

            // Pengeluaran
            'view_pengeluaran',
            'create_pengeluaran',
            'update_pengeluaran',
            'delete_pengeluaran',

            // Kategori Pemasukan
            'view_kategori_pemasukan',
            'create_kategori_pemasukan',
            'update_kategori_pemasukan',
            'delete_kategori_pemasukan',

            // Kategori Pengeluaran
            'view_kategori_pengeluaran',
            'create_kategori_pengeluaran',
            'update_kategori_pengeluaran',
            'delete_kategori_pengeluaran',

            // Laporan
            'view_laporan',

            // Activity Log
            'view_activitylog',
        ];

        $superadmin = Role::where('name', 'superadmin')->first();
        $bendahara = Role::where('name', 'bendahara')->first();
        $staf = Role::where('name', 'staf')->first();

        $superadmin->givePermissionTo(Permission::all());

        foreach ($permissions as $permission) {

            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }

        $bendahara->givePermissionTo([

            'view_pemasukan',
            'create_pemasukan',
            'update_pemasukan',
            'delete_pemasukan',

            'view_pengeluaran',
            'create_pengeluaran',
            'update_pengeluaran',
            'delete_pengeluaran',

            'view_kategori_pemasukan',
            'create_kategori_pemasukan',
            'update_kategori_pemasukan',
            'delete_kategori_pemasukan',

            'view_kategori_pengeluaran',
            'create_kategori_pengeluaran',
            'update_kategori_pengeluaran',
            'delete_kategori_pengeluaran',

            'view_laporan',
        ]);

        $staf->givePermissionTo([
        'view_pemasukan',
        'view_pengeluaran',
        'view_kategori_pemasukan',
        'view_kategori_pengeluaran',
        ]);
    }
}