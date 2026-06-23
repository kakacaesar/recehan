<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keuangan\KategoriPengeluaran;

class KategoriPengeluaranSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            ['nama' => 'Operasional'],
            ['nama' => 'Transportasi'],
            ['nama' => 'Gaji'],
            ['nama' => 'Listrik'],
            ['nama' => 'Air'],
            ['nama' => 'Internet'],
            ['nama' => 'Pajak'],
            ['nama' => 'Perawatan'],
            ['nama' => 'ATK'],
            ['nama' => 'Lain-lain'],

        ];

        foreach ($data as $item) {
            KategoriPengeluaran::firstOrCreate(
                ['nama' => $item['nama']],
                [
                    'deskripsi' => null,
                ]
            );
        }
    }
}