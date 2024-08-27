<?php

namespace App\Filament\Resources\BUResource\Pages;

use App\Filament\Resources\BUResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBUS extends ListRecords
{
    protected static string $resource = BUResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
