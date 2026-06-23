<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Keuangan\Pemasukan;
use App\Models\Keuangan\Pengeluaran;

class StatsOverview extends StatsOverviewWidget
{
protected function getStats(): array
{
    $totalPemasukan = Pemasukan::sum('jumlah');

    $totalPengeluaran = Pengeluaran::sum('jumlah');

    $saldo = $totalPemasukan - $totalPengeluaran;

    return [

        Stat::make(
            'Total Pemasukan',
            'Rp ' . number_format($totalPemasukan, 0, ',', '.')
        )
            ->description('Seluruh pemasukan')
            ->color('success'),

        Stat::make(
            'Total Pengeluaran',
            'Rp ' . number_format($totalPengeluaran, 0, ',', '.')
        )
            ->description('Seluruh pengeluaran')
            ->color('danger'),

        Stat::make(
            'Saldo',
            'Rp ' . number_format($saldo, 0, ',', '.')
        )
            ->description('Saldo saat ini')
            ->color($saldo >= 0 ? 'success' : 'danger'),

    ];
}
}
