<?php

namespace App\Filament\Resources\ActualiteResource\Pages;

use App\Filament\Resources\ActualiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActualite extends EditRecord
{
    protected static string $resource = ActualiteResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
