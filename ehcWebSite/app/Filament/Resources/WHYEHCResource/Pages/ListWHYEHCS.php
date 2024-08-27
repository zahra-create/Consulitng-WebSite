<?php

namespace App\Filament\Resources\WHYEHCResource\Pages;

use App\Filament\Resources\WHYEHCResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWHYEHCS extends ListRecords
{
    protected static string $resource = WHYEHCResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
