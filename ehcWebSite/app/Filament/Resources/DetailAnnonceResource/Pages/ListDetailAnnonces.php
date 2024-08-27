<?php

namespace App\Filament\Resources\DetailAnnonceResource\Pages;

use App\Filament\Resources\DetailAnnonceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailAnnonces extends ListRecords
{
    protected static string $resource = DetailAnnonceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
