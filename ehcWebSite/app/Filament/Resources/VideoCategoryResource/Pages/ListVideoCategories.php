<?php

namespace App\Filament\Resources\VideoCategoryResource\Pages;

use App\Filament\Resources\VideoCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideoCategories extends ListRecords
{
    protected static string $resource = VideoCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
