<?php

namespace App\Filament\Resources\ClientCommentResource\Pages;

use App\Filament\Resources\ClientCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClientComment extends EditRecord
{
    protected static string $resource = ClientCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
