<?php

namespace App\Filament\Resources\DetailServiceResource\Pages;

use App\Filament\Resources\DetailServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailService extends EditRecord
{
    protected static string $resource = DetailServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
