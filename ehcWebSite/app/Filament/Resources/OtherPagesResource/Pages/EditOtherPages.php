<?php

namespace App\Filament\Resources\OtherPagesResource\Pages;

use App\Filament\Resources\OtherPagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherPages extends EditRecord
{
    protected static string $resource = OtherPagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
