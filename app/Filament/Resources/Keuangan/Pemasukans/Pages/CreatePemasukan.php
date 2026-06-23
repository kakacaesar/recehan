<?php

namespace App\Filament\Resources\Keuangan\Pemasukans\Pages;

use App\Filament\Resources\Keuangan\Pemasukans\PemasukanResource;
use Filament\Resources\Pages\CreateRecord;
use App\Helpers\NomorTransaksiHelper;

class CreatePemasukan extends CreateRecord
{
    protected static string $resource = PemasukanResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['nomor_transaksi']
            = NomorTransaksiHelper::pemasukan();

        return $data;
    }
}
