<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailAnnonceResource\Pages;
use App\Filament\Resources\DetailAnnonceResource\RelationManagers;
use App\Models\DetailAnnonce;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailAnnonceResource extends Resource
{
    protected static ?string $model = DetailAnnonce::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('TypeAnnonce')
                ->label('Type de Service')
                ->options([
                    'Stage' => 'Stage',
                    'Emploi' => 'Emploi',
                    
                ]),
                Forms\Components\TextInput::make('Titre')
                   ,
                Forms\Components\TextInput::make('SousTitre')
                    ->nullable(),
                Forms\Components\TextInput::make('Titre1')
                    ->nullable(),
                Forms\Components\TextInput::make('Titre2')
                    ->nullable(),
                Forms\Components\Textarea::make('Titredescription1')
                    ->nullable(),
                Forms\Components\Textarea::make('Titredescription2')
                    ->nullable(),
                Forms\Components\TextInput::make('TitreForm')
                    ->nullable(),
                Forms\Components\TextInput::make('Button')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('Titre')
                ,
            Tables\Columns\TextColumn::make('SousTitre')
                ,
            Tables\Columns\TextColumn::make('Titre1')
               ,
            Tables\Columns\TextColumn::make('Titre2')
              ,
            Tables\Columns\TextColumn::make('Titredescription1')
                ,
            Tables\Columns\TextColumn::make('Titredescription2')
                ,
            Tables\Columns\TextColumn::make('TitreForm')
                ,
            Tables\Columns\TextColumn::make('Button')
               ,
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
            'index' => Pages\ListDetailAnnonces::route('/'),
            'create' => Pages\CreateDetailAnnonce::route('/create'),
            'edit' => Pages\EditDetailAnnonce::route('/{record}/edit'),
        ];
    }
}
