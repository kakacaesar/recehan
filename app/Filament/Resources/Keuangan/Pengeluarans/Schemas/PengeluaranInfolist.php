<?php

namespace App\Filament\Resources\Keuangan\Pengeluarans\Schemas;

use App\Models\Keuangan\Pengeluaran;
use App\Models\User;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PengeluaranInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nomor_transaksi')
                    ->label('Nomor Transaksi'),
                TextEntry::make('tanggal')
                    ->label('Tanggal')
                    ->date(),
                TextEntry::make('kategori_pengeluaran_id')
                    ->label('Kategori')
                    ->getStateUsing(fn ($record) => $record->kategori?->nama)
                    ->numeric(),
                TextEntry::make('jumlah')
                    ->label('Jumlah')
                    ->formatStateUsing(fn (string $state): string => 'Rp. ' . number_format($state, 0, ',', '.')),
                TextEntry::make('tujuan')
                    ->label('Tujuan')
                    ->placeholder('-'),
                TextEntry::make('keterangan')
                    ->label('Keterangan')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('Status')
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
                    })
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Pengeluaran $record): bool => $record->trashed()),
            ]);
    }
}
