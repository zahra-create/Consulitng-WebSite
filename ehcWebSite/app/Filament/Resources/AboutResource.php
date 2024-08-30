<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function getModelLabel(): string
    {
        return 'About cm';
    }

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                    Wizard::make([
                        Step::make('Header')
                            ->schema([
                                TextInput::make('TitreHeader')
                                    ->label('Titre Header')
                                    ->required(),
    
                                TextInput::make('SousTitreHeader')
                                    ->label('Sous-Titre Header')
                                    ->required(),
    
                                TinyEditor::make('ContentHeader')
                                   ->profile('corps')
                                    ->label('Contenu Header'),
    
                                FileUpload::make('Image1Header')
                                    ->label('Image 1 Header')
                                    ->image()
                                    ->directory('images/headers'),
    
                                FileUpload::make('Image2Header')
                                    ->label('Image 2 Header')
                                    ->image()
                                    ->directory('images/headers'),
                            ]),
    
                        Step::make('About')
                            ->schema([
                                FileUpload::make('Image')
                                    ->label('Image Principale')
                                    ->image()
                                    ->directory('images/contents'),
    
                                Textarea::make('descriptionAbout')
                                    ->label('Description à propos'),
    
                                FileUpload::make('Logo')
                                    ->label('Logo')
                                    ->image()
                                    ->directory('images/logos'),
                            ]),
    
                        Step::make('Histoire')
                            ->schema([
                                TextInput::make('TitreHistoire')
                                    ->label('Titre Histoire'),
    
                                TextInput::make('SousTitreHistoire')
                                    ->label('Sous-Titre Histoire'),
                            ]),
    
                        Step::make('Équipe')
                            ->schema([
                                TextInput::make('TitreTeam')
                                    ->label('Titre Équipe'),
    
                                TextInput::make('SousTitreTeam')
                                    ->label('Sous-Titre Équipe'),
    
                                Textarea::make('ContentTeam')
                                    ->label('Contenu Équipe'),
    
                                TextInput::make('ButtonTeam')
                                    ->label('Texte du Bouton Équipe'),
                            ]),
    
                        Step::make('Témoignage')
                            ->schema([
                                TextInput::make('TemoignageTitre')
                                    ->label('Titre Témoignage'),
    
                                TextInput::make('TemoignageSousTitre')
                                    ->label('Sous-Titre Témoignage'),
                            ]),
    
                        Step::make('Partenaire')
                            ->schema([
                                TextInput::make('TitrePartenaire')
                                    ->label('Titre Partenaire'),
    
                                TextInput::make('SousTitrePartenaire')
                                    ->label('Sous-Titre Partenaire'),
    
                                Textarea::make('TextePartenaire')
                                    ->label('Texte Partenaire'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
       //
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
