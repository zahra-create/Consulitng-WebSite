<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChiffreResource\Pages;
use App\Filament\Resources\ChiffreResource\RelationManagers;
use App\Models\EHCChiffre;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChiffreResource extends Resource
{
    protected static ?string $model = EHCChiffre::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Chiffre')
               ,
            Forms\Components\Textarea::make('descriptionChiffre')
               ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Chiffre'),
                Tables\Columns\TextColumn::make('descriptionChiffre'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->groupedBulkActions([
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
            'index' => Pages\ListChiffres::route('/'),
            'create' => Pages\CreateChiffre::route('/create'),
            'edit' => Pages\EditChiffre::route('/{record}/edit'),
        ];
    }
}
