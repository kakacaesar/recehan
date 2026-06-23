<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --mode=table --all-tables
         *
         */

        $dataTables = [
            [
                'created_at' => '2026-06-22 12:54:03',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'superadmin',
                'updated_at' => '2026-06-22 12:54:03',
            ],
            [
                'created_at' => '2026-06-22 12:54:03',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'bendahara',
                'updated_at' => '2026-06-22 12:54:03',
            ],
            [
                'created_at' => '2026-06-22 12:54:03',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'staf',
                'updated_at' => '2026-06-22 12:54:03',
            ]
        ];
        
        DB::table("roles")->insert($dataTables);
    }
}