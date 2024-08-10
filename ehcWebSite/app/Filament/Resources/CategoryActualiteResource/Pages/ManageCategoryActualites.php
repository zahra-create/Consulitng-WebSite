<?php

namespace App\Filament\Resources\CategoryActualiteResource\Pages;

use App\Filament\Resources\CategoryActualiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryActualites extends ManageRecords
{
    protected static string $resource = CategoryActualiteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
