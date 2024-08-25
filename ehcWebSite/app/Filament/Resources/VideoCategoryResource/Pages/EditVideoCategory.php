<?php

namespace App\Filament\Resources\VideoCategoryResource\Pages;

use App\Filament\Resources\VideoCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideoCategory extends EditRecord
{
    protected static string $resource = VideoCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
