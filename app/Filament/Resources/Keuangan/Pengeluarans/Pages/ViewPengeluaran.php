<?php

namespace App\Filament\Resources\Keuangan\Pengeluarans\Pages;

use App\Filament\Resources\Keuangan\Pengeluarans\PengeluaranResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPengeluaran extends ViewRecord
{
    protected static string $resource = PengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
