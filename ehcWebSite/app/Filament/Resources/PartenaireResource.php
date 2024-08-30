<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartenaireResource\Pages;
use App\Filament\Resources\PartenaireResource\RelationManagers;
use App\Models\Partenaire;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartenaireResource extends Resource
{
    protected static ?string $model = Partenaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('partenaire')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('Image')
                    ->required(),
            ]);
          
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('partenaire'),
                Tables\Columns\ImageColumn::make('Image'),
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
            'index' => Pages\ListPartenaires::route('/'),
            'create' => Pages\CreatePartenaire::route('/create'),
            'edit' => Pages\EditPartenaire::route('/{record}/edit'),
        ];
    }
}
