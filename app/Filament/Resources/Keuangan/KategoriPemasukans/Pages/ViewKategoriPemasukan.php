<?php

namespace App\Filament\Resources\Keuangan\KategoriPemasukans\Pages;

use App\Filament\Resources\Keuangan\KategoriPemasukans\KategoriPemasukanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKategoriPemasukan extends ViewRecord
{
    protected static string $resource = KategoriPemasukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

}
