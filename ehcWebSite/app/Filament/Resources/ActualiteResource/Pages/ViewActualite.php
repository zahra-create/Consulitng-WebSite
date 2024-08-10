<?php

namespace App\Filament\Resources\ActualiteResource\Pages;

use App\Filament\Resources\ActualiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewActualite extends ViewRecord
{
    protected static string $resource = ActualiteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
