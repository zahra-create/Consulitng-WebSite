<?php

namespace App\Filament\Resources\CategoryPodcastResource\Pages;

use App\Filament\Resources\CategoryPodcastResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryPodcasts extends ManageRecords
{
    protected static string $resource = CategoryPodcastResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
