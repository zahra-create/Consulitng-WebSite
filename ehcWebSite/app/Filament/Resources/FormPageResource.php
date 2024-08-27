<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormPageResource\Pages;
use App\Filament\Resources\FormPageResource\RelationManagers;

use App\Models\FormPages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormPageResource extends Resource
{
    protected static ?string $model = FormPages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('Page')
                ->options([
                    'Contact' => 'Contact',
                    'Demande Devis' => 'Demande Devis',
                ]),
                Forms\Components\TextInput::make('Titre')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('SousTitre')
                ->maxLength(255),
            Forms\Components\FileUpload::make('Image'),
            Forms\Components\TextInput::make('TitreIntro')
                ->maxLength(255),
            Forms\Components\TextInput::make('SousTitreIntro')
                ->maxLength(255),
            Forms\Components\TextInput::make('TitreForm')
                ->maxLength(255),
            Forms\Components\TextInput::make('Button')
                ->maxLength(255),
            Forms\Components\FileUpload::make('MapImage'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Page'),
                Tables\Columns\TextColumn::make('Titre'),
                Tables\Columns\TextColumn::make('SousTitre'),
                Tables\Columns\ImageColumn::make('Image'),
                Tables\Columns\TextColumn::make('TitreIntro'),
                Tables\Columns\TextColumn::make('SousTitreIntro'),
                Tables\Columns\TextColumn::make('TitreForm'),
                Tables\Columns\TextColumn::make('Button'),
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
            'index' => Pages\ListFormPages::route('/'),
            'create' => Pages\CreateFormPage::route('/create'),
            'edit' => Pages\EditFormPage::route('/{record}/edit'),
        ];
    }
}
