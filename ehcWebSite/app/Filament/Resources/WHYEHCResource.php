<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WHYEHCResource\Pages;
use App\Filament\Resources\WHYEHCResource\RelationManagers;
use App\Models\Valeurs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WHYEHCResource extends Resource
{
    protected static ?string $model = Valeurs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Valeur')
                ->required(),
            Forms\Components\FileUpload::make('ImageValeur')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Valeur'),
                Tables\Columns\ImageColumn::make('ImageValeur'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWHYEHCS::route('/'),
            'create' => Pages\CreateWHYEHC::route('/create'),
            'edit' => Pages\EditWHYEHC::route('/{record}/edit'),
        ];
    }
}
