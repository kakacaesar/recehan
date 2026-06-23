<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Keuangan\Pemasukan;
use App\Models\Keuangan\KategoriPemasukan;

class PemasukanSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $kategori = KategoriPemasukan::first();

        for ($i = 1; $i <= 20; $i++) {

            Pemasukan::create([
                'nomor_transaksi' => 'INC-' . now()->format('Ymd') . '-' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'tanggal' => now()->subDays(rand(0, 90)),
                'kategori_pemasukan_id' => $kategori->id,
                'jumlah' => rand(100000, 5000000),
                'sumber' => 'Transfer BCA',
                'status' => 'final',
                'keterangan' => 'Data dummy pemasukan',
                'created_by' => $user->id,
            ]);
        }
    }
}