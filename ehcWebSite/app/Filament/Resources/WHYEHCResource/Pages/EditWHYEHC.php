<?php

namespace App\Filament\Resources\WHYEHCResource\Pages;

use App\Filament\Resources\WHYEHCResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWHYEHC extends EditRecord
{
    protected static string $resource = WHYEHCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
