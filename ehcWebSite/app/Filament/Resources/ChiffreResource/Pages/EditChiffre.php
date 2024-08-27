<?php

namespace App\Filament\Resources\ChiffreResource\Pages;

use App\Filament\Resources\ChiffreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChiffre extends EditRecord
{
    protected static string $resource = ChiffreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
