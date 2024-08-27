<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\RichEditor;
use Filament\Support\Markdown;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function getModelLabel(): string
    {
        return 'Home cm';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make([
                    Wizard\Step::make('Header')
                        ->schema([
                            TextInput::make('TitreHeader')
                                ->default('Bienvenue chez EHC groupe')
                                ,
                            TinyEditor::make('ContentHeader')
                                ->default('Votre Partenaire pour le Succès en Ressources Humaines.')
                                ->profile('corps') 
                                ,
                              Forms\Components\FileUpload::make('ImageHeader'),
                            /*RichEditor::make('ImageHeader')
                            ->toolbarButtons([
                                'attachFiles', 'link'])
                                ->label('Ajouter une image')
                                ->required()
                                ->placeholder('Ou ajoutez un lien d\'image'),*/
                            TextInput::make('ButtonHeader')
                                ->default('Demander Services')
                               ,
                           ColorPicker::make('ColorButtonHeader')
                                ->default('rgb(0, 81, 81)')
                                ->required(),  
                        ]) 
                        ->visible(),

                        Wizard\Step::make('About')
                        ->schema([
                            TextInput::make('TitreAbout')
                                ->default('Ayant en moyenne plus de 20 ans d\'experience dans leurs domaines de competence')
                               ,
                            FileUpload::make('ImageHeroAbout')
                                ,
                            TinyEditor::make('Paragraph1About')
                                ->default('Chez EHC, nous sommes dedies à transformer la gestion des ressources humaines en un atout strategique pour votre entreprise.')
                                ->profile('corps')
                                ,
                            TinyEditor::make('Paragraph2About')
                                ->default('Avec une equipe d\'experts en RH, nous offrons des solutions sur mesure pour optimiser vos processus et attirer les meilleurs talents.')
                                ->profile('corps')
                                ,
                            FileUpload::make('ImageAbout')
                                ->label('Ajouter une image')
                                ,
                            TextInput::make('ButtonAbout')
                                ->default('Qui Sommes-Nous')
                                ,
                         ColorPicker::make('ColorButtonAbout')
                                ->default('rgb(0, 81, 81)')
                                ->required(),
                        ])
                        ->visible(),

          
                        Wizard\Step::make('Valeur')
                        ->schema([
                            TextInput::make('TitreWHYEHC')
                                ->default('POURQUOI EHC ?')
                                ,
                            TinyEditor::make('IntroWHYEHC')
                                ->default('Au coeur de ses valeurs, EHC place la satisfaction de ses partenaires au sommet de ses priorites.')
                                ->profile('corps')
                                ,
                        ])
                        ->visible(),

                        Wizard\Step::make('Business Units')
                        ->schema([
                            TextInput::make('TitreBU')
                                ->default('NOS BUSINESS UNITS')
                                ,
                            FileUpload::make('ImageBU')
                                ,
                            TextInput::make('lienVideo')
                                ,
                            TextInput::make('buttonBU')
                                ->default('Demander Services')
                               ,
                           ColorPicker::make('ColorbuttonBU')
                                ->default('rgb(0, 81, 81)')
                                ->required(),
                        ])
                        ->visible(),

                        Wizard\Step::make('Chiffres')
                        ->schema([
                            FileUpload::make('ImageChiffres')
                                ,
                            TextInput::make('TitreChiffres')
                                ->default('EHC En Chiffres')
                                ,
                            TinyEditor::make('TexteChiffres')
                                ->default('EHC mobilise pour vous une équipe de haut dirigeants et cadres exerçant dans les sphères des secteurs public et privé et ayant en moyenne plus de 20 ans d\'expérience dans leurs domaines de compétence.')
                                ->profile('corps')
                                ,
                            TextInput::make('ButtonChiffres')
                                ->default('Découvrir Nos Experts')
                                ,
                            ColorPicker::make('ColorChiffres')
                                ->default('rgb(0, 81, 81)')
                                ->required(),
                        ])
                        ->visible(),

                        Wizard\Step::make('Actualités')
                        ->schema([
                            TextInput::make('TitreActualites')
                                ->default('NOS ACTUALITES')
                                ,
                            TextInput::make('ButtonActualites')
                                ->default('Voir plus')
                                ,
                                TextInput::make('TitrePartenaire')
                                ->default('NOS PARTENAIRES')
                                ,
                        ])
                        ->visible(),
                ])
                , ]);
}

     public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('TitreHeader')
                ->label('Titre du Header'),
            Tables\Columns\TextColumn::make('ButtonHeader')
                ->label('Bouton du Header'),
            Tables\Columns\TextColumn::make('TitreAbout')
                ->label('Titre de la Section "À propos"'),
            Tables\Columns\TextColumn::make('ButtonAbout')
                ->label('Bouton de la Section "À propos"'),
            Tables\Columns\TextColumn::make('TitreWHYEHC')
                ->label('Titre "Pourquoi EHC"'),
            Tables\Columns\TextColumn::make('TitreBU')
                ->label('Titre des Business Units'),
            Tables\Columns\TextColumn::make('buttonBU')
                ->label('Bouton des Business Units'),
            Tables\Columns\TextColumn::make('TitreChiffres')
                ->label('Titre des Chiffres'),
            Tables\Columns\TextColumn::make('ButtonChiffres')
                ->label('Bouton des Chiffres'),
            Tables\Columns\TextColumn::make('TitreActualites')
                ->label('Titre des Actualités'),
            Tables\Columns\TextColumn::make('ButtonActualites')
                ->label('Bouton des Actualités'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
