<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function getModelLabel(): string
    {
        return 'Service page';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Wizard::make()
                    ->steps([
                        Forms\Components\Wizard\Step::make('Introduction')
                            ->schema([
                                Forms\Components\Select::make('TypeService')
                                    ->label('Type de Service')
                                    ->options([
                                        'Pour Entreprises' => 'Pour Entreprises',
                                        'Pour Étudiants' => 'Pour Étudiants',
                                        'Pour Salariés' => 'Pour Salariés',
                                    ])
                                    ->required()
                                    ->placeholder('Sélectionner le type de service'),
                                Forms\Components\TextInput::make('TitreIntroService')
                                    ,
                                Forms\Components\Textarea::make('IntroService')
                                    ,
                                Forms\Components\FileUpload::make('Image')
                                    ,
                            ])
                            ->columns(2),

                            Forms\Components\Wizard\Step::make('Détails du Service')
                            ->schema([
                                Forms\Components\TextInput::make('TitreService')
                                    ,
                                Forms\Components\TextInput::make('SousTitreService')
                                   ,
                                TinyEditor::make('description')
                                    ->profile('corps'),
                            ])
                            ->columns(2),

                            Forms\Components\Wizard\Step::make('Derniere Section')
                            ->schema([
                                Forms\Components\TextInput::make('Titre')
                                    ,
                                Forms\Components\TextInput::make('SousTitre')
                                    ,
                                Forms\Components\TextInput::make('Button')
                                    ,
                               
                            ])
                            ->columns(1),
                    ])
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TypeService')
               ,
            Tables\Columns\TextColumn::make('TitreIntroService')
                ,
            Tables\Columns\TextColumn::make('TitreService')
                ,
            Tables\Columns\TextColumn::make('SousTitreService')
               ,
            Tables\Columns\TextColumn::make('Titre')
                ,
            Tables\Columns\TextColumn::make('SousTitre')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
