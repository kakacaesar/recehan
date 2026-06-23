<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengeluaranSeeder extends Seeder
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
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 1,
                'jumlah' => 1300821,
                'kategori_pengeluaran_id' => 1,
                'keterangan' => 'Data dummy pengeluaran',
                'nomor_transaksi' => 'EXP-2606-0001',
                'status' => 'final',
                'tanggal' => '2026-06-04',
                'tujuan' => 'Operasional Kantor',
                'updated_at' => '2026-06-22 12:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => '2026-06-23 10:30:35',
                'id' => 2,
                'jumlah' => 1350833,
                'kategori_pengeluaran_id' => 1,
                'keterangan' => 'Data dummy pengeluaran',
                'nomor_transaksi' => 'EXP-2606-0002',
                'status' => 'final',
                'tanggal' => '2026-06-20',
                'tujuan' => 'Operasional Kantor',
                'updated_at' => '2026-06-23 10:30:35',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 3,
                'jumlah' => 1507151,
                'kategori_pengeluaran_id' => 1,
                'keterangan' => 'Data dummy pengeluaran',
                'nomor_transaksi' => 'EXP-2606-0003',
                'status' => 'final',
                'tanggal' => '2026-04-21',
                'tujuan' => 'Operasional Kantor',
                'updated_at' => '2026-06-22 12:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 4,
                'jumlah' => 1151484,
                'kategori_pengeluaran_id' => 1,
                'keterangan' => 'Data dummy pengeluaran',
                'nomor_transaksi' => 'EXP-2606-0004',
                'status' => 'final',
                'tanggal' => '2026-06-16',
                'tujuan' => 'Operasional Kantor',
                'updated_at' => '2026-06-22 12:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 5,
                'jumlah' => 107850,
                'kategori_pengeluaran_id' => 1,
                'keterangan' => 'Data dummy pengeluaran',
                'nomor_transaksi' => 'EXP-2606-0005',
                'status' => 'final',
                'tanggal' => '2026-05-08',
                'tujuan' => 'Operasional Kantor',
                'updated_at' => '2026-06-23 11:20:20',
                'updated_by' => 1,
            ],
            [
                'created_at' => '2026-06-22 18:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 6,
                'jumlah' => 1631328,
                'kategori_pengeluaran_id' => 1,
                'keterangan' => 'Data dummy pengeluaran',
                'nomor_transaksi' => 'EXP-2606-0006',
                'status' => 'final',
                'tanggal' => '2026-05-23',
                'tujuan' => 'Operasional Kantor',
                'updated_at' => '2026-06-22 12:18:04',
                'updated_by' => NULL,
            ]
        ];
        
        DB::table("pengeluaran")->insert($dataTables);
    }
}