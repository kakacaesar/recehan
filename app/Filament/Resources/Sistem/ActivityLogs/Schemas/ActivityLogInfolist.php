<?php

namespace App\Filament\Resources\Sistem\ActivityLogs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use App\Models\User;
use App\Models\Sistem\ActivityLog;


class ActivityLogInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('log_name')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('subject_type')
                    ->placeholder('-'),
                TextEntry::make('subject_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('event')
                    ->placeholder('-'),
                TextEntry::make('causer_type')
                    ->placeholder('-'),
                TextEntry::make('causer_id')
                    ->state(function ($record) {
                        $user = User::find($record->causer_id); 
                        return $user ? $user->name : 'N/A';
                    })
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
