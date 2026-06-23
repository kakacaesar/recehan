<?php

namespace App\Helpers;

use App\Models\Keuangan\Pemasukan;
use App\Models\Keuangan\Pengeluaran;

class NomorTransaksiHelper
{
    public static function pemasukan(): string
    {
        $prefix = 'MSK';
        $periode = now()->format('my');

        // $last = Pemasukan::whereMonth('tanggal', now()->month)
        //     ->whereYear('tanggal', now()->year)
        //     ->count();

        $last = Pemasukan::latest()->value('id');

        $nomor = str_pad(
            $last + 1,
            4,
            '0',
            STR_PAD_LEFT
        );

        return "{$prefix}-{$periode}-{$nomor}";
    }

    public static function pengeluaran(): string
    {
        $prefix = 'KLR';
        $periode = now()->format('my');

        // $last = Pengeluaran::whereMonth('tanggal', now()->month)
        //     ->whereYear('tanggal', now()->year)
        //     ->count();
        
        $last = Pengeluaran::latest()->value('id');
        
        $nomor = str_pad(
            $last + 1,
            4,
            '0',
            STR_PAD_LEFT
        );

        return "{$prefix}-{$periode}-{$nomor}";
    }
}