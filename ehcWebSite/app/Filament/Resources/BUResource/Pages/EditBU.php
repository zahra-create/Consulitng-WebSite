<?php

namespace App\Filament\Resources\BUResource\Pages;

use App\Filament\Resources\BUResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBU extends EditRecord
{
    protected static string $resource = BUResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
