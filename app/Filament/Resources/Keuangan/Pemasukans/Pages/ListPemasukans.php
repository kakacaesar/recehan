<?php

namespace App\Filament\Resources\Keuangan\Pemasukans\Pages;

use App\Filament\Resources\Keuangan\Pemasukans\PemasukanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPemasukans extends ListRecords
{
    protected static string $resource = PemasukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
