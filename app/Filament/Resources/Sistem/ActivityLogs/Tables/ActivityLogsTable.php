<?php

namespace App\Filament\Resources\Sistem\ActivityLogs\Tables;

use Filament\Actions\BulkActionGroup;
// use Filament\Actions\DeleteBulkAction;
// use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\User;

class ActivityLogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('log_name')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('subject_type')
                    ->label('Tipe Subjek')
                    ->searchable(),
                TextColumn::make('subject_id')
                    ->label('ID Subjek')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('event')
                    ->searchable(),
                TextColumn::make('causer_type')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('causer_id')
                    ->label('Diubah Oleh')
                    ->state(function ($record) {
                        $user = User::find($record->causer_id); 
                        return $user ? $user->name : 'N/A';
                    })
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
            ]);
    }
}
