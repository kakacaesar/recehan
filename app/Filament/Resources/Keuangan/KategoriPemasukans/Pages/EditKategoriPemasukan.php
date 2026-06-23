<?php

namespace App\Filament\Resources\Keuangan\KategoriPemasukans\Pages;

use App\Filament\Resources\Keuangan\KategoriPemasukans\KategoriPemasukanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPemasukan extends EditRecord
{
    protected static string $resource = KategoriPemasukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
