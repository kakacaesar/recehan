<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRolesSeeder extends Seeder
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
                'model_id' => 1,
                'model_type' => 'App\\Models\\User',
                'role_id' => 1,
            ],
            [
                'model_id' => 2,
                'model_type' => 'App\\Models\\User',
                'role_id' => 2,
            ]
        ];
        
        DB::table("model_has_roles")->insert($dataTables);
    }
}