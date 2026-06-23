<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Keuangan\Pengeluaran;
use App\Models\Keuangan\KategoriPengeluaran;

class PengeluaranSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $kategori = KategoriPengeluaran::first();

        for ($i = 1; $i <= 20; $i++) {

            Pengeluaran::create([
                'nomor_transaksi' => 'EXP-' . now()->format('Ymd') . '-' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'tanggal' => now()->subDays(rand(0, 90)),
                'kategori_pengeluaran_id' => $kategori->id,
                'jumlah' => rand(50000, 3000000),
                'tujuan' => 'Operasional Kantor',
                'status' => 'final',
                'keterangan' => 'Data dummy pengeluaran',
                'created_by' => $user->id,
            ]);
        }
    }
}