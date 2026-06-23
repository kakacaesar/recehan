<?php

namespace App\Filament\Resources\Sistem\ActivityLogs\Pages;

use App\Filament\Resources\Sistem\ActivityLogs\ActivityLogResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewActivityLog extends ViewRecord
{
    protected static string $resource = ActivityLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
