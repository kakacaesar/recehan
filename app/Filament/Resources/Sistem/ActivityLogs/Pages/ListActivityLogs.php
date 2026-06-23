<?php

namespace App\Filament\Resources\Sistem\ActivityLogs\Pages;

use App\Filament\Resources\Sistem\ActivityLogs\ActivityLogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListActivityLogs extends ListRecords
{
    protected static string $resource = ActivityLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->disabled()
            ->hidden(),
        ];
    }
}
