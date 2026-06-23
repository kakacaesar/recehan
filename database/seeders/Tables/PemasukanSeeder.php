<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemasukanSeeder extends Seeder
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
                'jumlah' => 4376343,
                'kategori_pemasukan_id' => 4,
                'keterangan' => 'Data dummy pemasukan',
                'nomor_transaksi' => 'INC-2606-0001',
                'status' => 'final',
                'sumber' => 'Tunai',
                'tanggal' => '2026-05-03',
                'updated_at' => '2026-06-22 23:23:07',
                'updated_by' => 1,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 2,
                'jumlah' => 5205000,
                'kategori_pemasukan_id' => 1,
                'keterangan' => 'Data dummy pemasukan',
                'nomor_transaksi' => 'INC-2606-0002',
                'status' => 'final',
                'sumber' => 'Transfer BCA',
                'tanggal' => '2026-05-06',
                'updated_at' => '2026-06-23 10:57:51',
                'updated_by' => 1,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 3,
                'jumlah' => 1771434,
                'kategori_pemasukan_id' => 1,
                'keterangan' => 'Data dummy pemasukan',
                'nomor_transaksi' => 'INC-2606-0003',
                'status' => 'final',
                'sumber' => 'Transfer BCA',
                'tanggal' => '2026-04-26',
                'updated_at' => '2026-06-22 12:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 4,
                'jumlah' => 4157631,
                'kategori_pemasukan_id' => 1,
                'keterangan' => 'Data dummy pemasukan',
                'nomor_transaksi' => 'INC-2606-0004',
                'status' => 'final',
                'sumber' => 'Transfer BCA',
                'tanggal' => '2026-04-20',
                'updated_at' => '2026-06-22 12:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 12:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 5,
                'jumlah' => 4821197,
                'kategori_pemasukan_id' => 1,
                'keterangan' => 'Data dummy pemasukan',
                'nomor_transaksi' => 'INC-2606-0005',
                'status' => 'final',
                'sumber' => 'Transfer BCA',
                'tanggal' => '2026-06-04',
                'updated_at' => '2026-06-22 12:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 19:54:04',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 6,
                'jumlah' => 2491567,
                'kategori_pemasukan_id' => 1,
                'keterangan' => 'Data dummy pemasukan',
                'nomor_transaksi' => 'INC-2606-0006',
                'status' => 'final',
                'sumber' => 'Transfer BCA',
                'tanggal' => '2026-04-07',
                'updated_at' => '2026-06-22 19:54:04',
                'updated_by' => NULL,
            ],
            [
                'created_at' => '2026-06-22 23:17:15',
                'created_by' => 1,
                'deleted_at' => NULL,
                'id' => 21,
                'jumlah' => 9000000,
                'kategori_pemasukan_id' => 3,
                'keterangan' => 'pol',
                'nomor_transaksi' => 'MSK-0626-0007',
                'status' => 'final',
                'sumber' => 'QRIS',
                'tanggal' => '2026-06-22',
                'updated_at' => '2026-06-22 23:17:15',
                'updated_by' => NULL,
            ]
        ];
        
        DB::table("pemasukan")->insert($dataTables);
    }
}