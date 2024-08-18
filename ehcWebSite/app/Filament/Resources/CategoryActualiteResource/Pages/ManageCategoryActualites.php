<?php

namespace App\Filament\Resources\CategoryActualiteResource\Pages;

use App\Filament\Resources\CategoryActualiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

use App\Models\Actualite;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\BooleanColumn;

use Closure;
use Illuminate\Support\Str;

class ManageCategoryActualites extends ManageRecords
{
    protected static string $resource = CategoryActualiteResource::class;



    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
