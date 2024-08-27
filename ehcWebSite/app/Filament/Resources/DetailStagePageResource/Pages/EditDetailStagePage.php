<?php

namespace App\Filament\Resources\DetailStagePageResource\Pages;

use App\Filament\Resources\DetailStagePageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailStagePage extends EditRecord
{
    protected static string $resource = DetailStagePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
