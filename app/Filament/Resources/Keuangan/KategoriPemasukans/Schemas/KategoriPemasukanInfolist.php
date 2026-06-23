<?php

namespace App\Filament\Resources\Keuangan\KategoriPemasukans\Schemas;

use App\Models\Keuangan\KategoriPemasukan;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KategoriPemasukanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama')
                    ->label('Nama Kategori'),
                TextEntry::make('deskripsi')
                    ->label('Deskripsi Kategori') 
                    ->placeholder('-')
                    ->columnSpanFull(),
                IconEntry::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Diperbarui pada')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->label('Dihapus pada')
                    ->dateTime()
                    ->visible(fn (KategoriPemasukan $record): bool => $record->trashed()),
            ]);
    }

}
