<?php

namespace App\Filament\Resources\Keuangan\KategoriPengeluarans\Pages;

use App\Filament\Resources\Keuangan\KategoriPengeluarans\KategoriPengeluaranResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKategoriPengeluaran extends ViewRecord
{
    protected static string $resource = KategoriPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
