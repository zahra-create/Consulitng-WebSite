<?php

namespace App\Filament\Resources\PubliciteResource\Pages;

use App\Filament\Resources\PubliciteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublicites extends ListRecords
{
    protected static string $resource = PubliciteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
