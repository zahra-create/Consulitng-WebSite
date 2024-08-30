<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailServiceResource\Pages;
use App\Filament\Resources\DetailServiceResource\RelationManagers;
use App\Models\DetailService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class DetailServiceResource extends Resource
{
    protected static ?string $model = DetailService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Introduction')
                ->schema([
                    Forms\Components\Select::make('TypeService')
                    ->label('Type de Service')
                    ->options([
                        'Pour Entreprises' => 'Pour Entreprises',
                        'Pour Étudiants' => 'Pour Étudiants',
                        'Pour Salariés' => 'Pour Salariés',
                    ])
                    ->required(),
                    Forms\Components\TextInput::make('TitreService')
                        ,
                 Forms\Components\TextInput::make('DescriptionService')
                       ,
                Forms\Components\TextInput::make('HeaderTitre')
                        ,
               TinyEditor::make('HeaderDescription')
                        ->profile('corps'),
             Forms\Components\FileUpload::make('ImageHeader')
                        ,
              Forms\Components\FileUpload::make('Image')
                        ,
                ])
                ->columns(2),

             Forms\Components\Section::make('Détails du Service')
                ->schema([
                    Forms\Components\TextInput::make('Titre1')
                        ,
                    TinyEditor::make('Content1')
                        ->profile('corps'),
                    Forms\Components\TextInput::make('Titre2')
                        ,
                    TinyEditor::make('Content2')
                    ->profile('corps'),
                    Forms\Components\TextInput::make('Titre3')
                        ->required()
                        ->placeholder('Titre de la troisième section'),
                     TinyEditor::make('Content3')
                    ->profile('corps'),
                ])
                ->columns(2),

                Forms\Components\Section::make('Dernière Section')
                ->schema([
                    Forms\Components\TextInput::make('Button')
                        ,
                      /*  Forms\Components\TextInput::make('ButtonColor')
                        ->required()
                        ->placeholder('Couleur du bouton'), */
                        Forms\Components\FileUpload::make('LastImage')
                        ,
                        Forms\Components\TextInput::make('LastTitre')
                        ,
                        Forms\Components\TextInput::make('LastSousTitre')
                        ,
                ])
                ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TitreService')
                ,
            Tables\Columns\TextColumn::make('DescriptionService')
                ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDetailServices::route('/'),
            'create' => Pages\CreateDetailService::route('/create'),
            'edit' => Pages\EditDetailService::route('/{record}/edit'),
        ];
    }
}
