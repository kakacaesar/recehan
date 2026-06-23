<?php

namespace App\Filament\Resources\Keuangan\KategoriPengeluarans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class KategoriPengeluaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Kategori')
                    ->required(),
                Textarea::make('deskripsi')
                    ->label('Deskripsi Kategori')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->required(),
            ]);
    }
}
