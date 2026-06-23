<?php

namespace App\Filament\Resources\Keuangan\KategoriPemasukans\Pages;

use App\Filament\Resources\Keuangan\KategoriPemasukans\KategoriPemasukanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPemasukans extends ListRecords
{
    protected static string $resource = KategoriPemasukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
