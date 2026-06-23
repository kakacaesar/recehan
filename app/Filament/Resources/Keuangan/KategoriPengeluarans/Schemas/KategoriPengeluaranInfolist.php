<?php

namespace App\Filament\Resources\Keuangan\KategoriPengeluarans\Schemas;

use App\Models\Keuangan\KategoriPengeluaran;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KategoriPengeluaranInfolist
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
                    ->label('Tanggal Dibuat')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Tanggal Diubah')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->label('Tanggal Dihapus')
                    ->dateTime()
                    ->visible(fn (KategoriPengeluaran $record): bool => $record->trashed()),
            ]);
    }
}
