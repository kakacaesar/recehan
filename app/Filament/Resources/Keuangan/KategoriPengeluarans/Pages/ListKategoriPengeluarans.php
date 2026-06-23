<?php

namespace App\Filament\Resources\Keuangan\KategoriPengeluarans\Pages;

use App\Filament\Resources\Keuangan\KategoriPengeluarans\KategoriPengeluaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPengeluarans extends ListRecords
{
    protected static string $resource = KategoriPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
