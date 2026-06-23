<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPemasukanSeeder extends Seeder
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
                'deskripsi' => 'Pendapatan hasil penjualan produk atau jasa',
                'id' => 1,
                'is_active' => 1,
                'nama' => 'Penjualan',
                'updated_at' => '2026-06-22 13:22:02',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => 'Pendapatan dari investasi',
                'id' => 2,
                'is_active' => 1,
                'nama' => 'Investasi',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => 'Sumbangan atau hibah',
                'id' => 3,
                'is_active' => 1,
                'nama' => 'Donasi',
                'updated_at' => '2026-06-22 12:54:04',
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'deleted_at' => NULL,
                'deskripsi' => 'Pendapatan di luar kategori utama',
                'id' => 4,
                'is_active' => 1,
                'nama' => 'Pendapatan Lain',
                'updated_at' => '2026-06-22 12:54:04',
            ]
        ];
        
        DB::table("kategori_pemasukan")->insert($dataTables);
    }
}