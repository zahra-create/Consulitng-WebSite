<?php

namespace App\Filament\Resources\ClientCommentResource\Pages;

use App\Filament\Resources\ClientCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientComments extends ListRecords
{
    protected static string $resource = ClientCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
