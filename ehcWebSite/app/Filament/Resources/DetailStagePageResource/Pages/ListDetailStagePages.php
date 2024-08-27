<?php

namespace App\Filament\Resources\DetailStagePageResource\Pages;

use App\Filament\Resources\DetailStagePageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailStagePages extends ListRecords
{
    protected static string $resource = DetailStagePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
