<?php

namespace App\Filament\Resources\DemandeDeDevisResource\Pages;

use App\Filament\Resources\DemandeDeDevisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemandeDeDevis extends ListRecords
{
    protected static string $resource = DemandeDeDevisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
