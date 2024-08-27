<?php

namespace App\Filament\Resources\DetailServiceResource\Pages;

use App\Filament\Resources\DetailServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailServices extends ListRecords
{
    protected static string $resource = DetailServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
