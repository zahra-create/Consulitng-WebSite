<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherPagesResource\Pages;
use App\Filament\Resources\OtherPagesResource\RelationManagers;
use App\Models\OtherPages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class OtherPagesResource extends Resource
{
    protected static ?string $model = OtherPages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                    Forms\Components\Select::make('Page')
                    ->options([
                        'Offre d\'emploi' => 'Offre d\'emploi',
                        'Stages' => 'Stages',
                        'Blog' => 'Blog',
                        'Podcast' => 'Podcast',
                        'Vidéos' => 'Vidéos',
                        'Actualités' => 'Actualités',
                    ])
                    ->required(),
                    Forms\Components\TextInput::make('Titre')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('SousTitre')
                        ->maxLength(255),
                   TinyEditor::make('Description')
                   ->profile('corps'),
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Page'),
                Tables\Columns\TextColumn::make('Titre'),
                Tables\Columns\TextColumn::make('SousTitre'),
                Tables\Columns\TextColumn::make('Description')
                ,
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
            'index' => Pages\ListOtherPages::route('/'),
            'create' => Pages\CreateOtherPages::route('/create'),
            'edit' => Pages\EditOtherPages::route('/{record}/edit'),
        ];
    }
}
