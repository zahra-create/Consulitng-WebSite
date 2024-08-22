<?php

namespace App\Filament\Resources\DemandeDeDevisResource\Pages;

use App\Filament\Resources\DemandeDeDevisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemandeDeDevis extends EditRecord
{
    protected static string $resource = DemandeDeDevisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
