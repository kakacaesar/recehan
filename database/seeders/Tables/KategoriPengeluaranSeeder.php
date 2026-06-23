<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPengeluaranSeeder extends Seeder
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
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 1,
                'is_active' => 1,
                'nama' => 'Operasional',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 2,
                'is_active' => 1,
                'nama' => 'Transportasi',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 3,
                'is_active' => 1,
                'nama' => 'Gaji',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 4,
                'is_active' => 1,
                'nama' => 'Listrik',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 5,
                'is_active' => 1,
                'nama' => 'Air',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 6,
                'is_active' => 1,
                'nama' => 'Internet',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 7,
                'is_active' => 1,
                'nama' => 'Pajak',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 8,
                'is_active' => 1,
                'nama' => 'Perawatan',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 9,
                'is_active' => 1,
                'nama' => 'ATK',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => NULL,
                'id' => 10,
                'is_active' => 1,
                'nama' => 'Lain-lain',
                'updated_at' => '2026-06-22 12:54:04',
            ]
        ];
        
        DB::table("kategori_pengeluaran")->insert($dataTables);
    }
}