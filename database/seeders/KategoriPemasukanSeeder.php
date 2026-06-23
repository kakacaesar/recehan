<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keuangan\KategoriPemasukan;

class KategoriPemasukanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            [
                'nama' => 'Penjualan',
                'deskripsi' => 'Pendapatan hasil penjualan produk atau jasa',
            ],
            [
                'nama' => 'Investasi',
                'deskripsi' => 'Pendapatan dari investasi',
            ],
            [
                'nama' => 'Donasi',
                'deskripsi' => 'Sumbangan atau hibah',
            ],
            [
                'nama' => 'Pendapatan Lain',
                'deskripsi' => 'Pendapatan di luar kategori utama',
            ],
        ];

        foreach ($data as $item) {
            KategoriPemasukan::firstOrCreate(
                ['nama' => $item['nama']],
                $item
            );
        }
    }
}