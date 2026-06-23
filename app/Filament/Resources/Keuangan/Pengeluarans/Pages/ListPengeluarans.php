<?php

namespace App\Filament\Resources\Keuangan\Pengeluarans\Pages;

use App\Filament\Resources\Keuangan\Pengeluarans\PengeluaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengeluarans extends ListRecords
{
    protected static string $resource = PengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
