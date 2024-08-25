<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StageResource\Pages;
use App\Filament\Resources\StageResource\RelationManagers;
use App\Models\Stage;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class StageResource extends Resource
{
    protected static ?string $model = Stage::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'CARRIÈRE';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('entreprise')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('profil')
                ->required()
                ->maxLength(255),                
                TinyEditor::make('description')
                ->profile('corps')
                ->required(),
                Forms\Components\TextInput::make('location')
                ->required()
                ->maxLength(255), 
                Forms\Components\DatePicker::make('date_debut')
                ->required(),
                Forms\Components\DatePicker::make('date_fin')
                ->required(),
                Forms\Components\TextInput::make('lien_postuler')
                ->nullable(),
               // ->url(),         mn b3d insha'allah
                Forms\Components\FileUpload::make('image_offre_path')
                ->nullable()
                ->label('image_offre')
                ->image()
                ->disk('public') // 
                ->directory('stages')
                ->visibility('public'),
                Forms\Components\FileUpload::make('image_details_path')
                ->nullable()
                ->label('image_detail')
                ->image()
                ->disk('public') //
                ->directory('stages')
                ->visibility('public'),
                Forms\Components\TagsInput::make('skills') 
                ->label('Skills')
                ->placeholder('Entrez les compétences requises pour ce stage')
                ->reactive(),              
                                   
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('entreprise'),
                Tables\Columns\TextColumn::make('profil'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('date_debut')
                    ->date('F j, Y'), 
                Tables\Columns\TextColumn::make('date_fin')
                    ->date('F j, Y'), 
              //  Tables\Columns\TextColumn::make('image_offre_path')->label('image_offre'),
                   
             //   Tables\Columns\TextColumn::make('image_details_path')->label('image_details'),
                Tables\Columns\TagsColumn::make('skills') // Display skills as text
                    ->label('Skills')
                 

                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListStages::route('/'),
            'create' => Pages\CreateStage::route('/create'),
            'edit' => Pages\EditStage::route('/{record}/edit'),
        ];
    }    
}
