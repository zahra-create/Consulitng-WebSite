<?php

namespace App\Filament\Resources\ChiffreResource\Pages;

use App\Filament\Resources\ChiffreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChiffres extends ListRecords
{
    protected static string $resource = ChiffreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
