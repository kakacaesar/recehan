<?php

namespace App\Filament\Resources\Keuangan\Pemasukans\Schemas;

use App\Models\Keuangan\Pemasukan;
use App\Models\User;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PemasukanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nomor_transaksi')
                    ->label('Nomor Transaksi')
                    ->placeholder('Otomatis Terisi'),
                TextEntry::make('tanggal')
                    ->label('Tanggal Transaksi')
                    ->date(),
                TextEntry::make('kategori_pemasukan_id')
                    ->label('Kategori Pemasukan')
                    ->getStateUsing(fn ($record) => $record->kategori?->nama)
                    ->placeholder('-'),
                TextEntry::make('jumlah')
                    ->label('Jumlah')   
                    ->formatStateUsing(fn (string $state): string => 'Rp. ' . number_format($state, 0, ',', '.')),
                TextEntry::make('sumber')
                    ->label('Sumber Pemasukan')
                    ->placeholder('-'),
                TextEntry::make('keterangan')
                    ->label('Keterangan')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('Status Simpan')
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'warning',
                        'final' => 'success',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'draft' => 'Draft',
                        'final' => 'Difinalisasi',
                    })
                    ->badge(),
                TextEntry::make('created_by')
                    ->label('Dibuat Oleh')
                    ->state(function ($record) {
                        $user = User::find($record->created_by); 
                        return $user ? $user->name : 'N/A';
                    }),
                TextEntry::make('updated_by')
                    ->label('Diperbarui Oleh')
                    ->state(function ($record) {
                        $user = User::find($record->updated_by); 
                        return $user ? $user->name : 'N/A';
                    }),
                TextEntry::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->label('Dihapus Pada')
                    ->dateTime()
                    ->visible(fn (Pemasukan $record): bool => $record->trashed()),
            ]);
    }
}
