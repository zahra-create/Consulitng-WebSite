<?php

namespace App\Filament\Resources\DetailAnnonceResource\Pages;

use App\Filament\Resources\DetailAnnonceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailAnnonce extends EditRecord
{
    protected static string $resource = DetailAnnonceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
