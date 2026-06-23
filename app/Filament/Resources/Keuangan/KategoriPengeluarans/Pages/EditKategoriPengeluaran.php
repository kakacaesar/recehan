<?php

namespace App\Filament\Resources\Keuangan\KategoriPengeluarans\Pages;

use App\Filament\Resources\Keuangan\KategoriPengeluarans\KategoriPengeluaranResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPengeluaran extends EditRecord
{
    protected static string $resource = KategoriPengeluaranResource::class;

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
