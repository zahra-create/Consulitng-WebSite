<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmploiResource\Pages;
use App\Filament\Resources\EmploiResource\RelationManagers;
use App\Models\Emploi;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmploiResource extends Resource
{
    protected static ?string $model = Emploi::class;

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
                Forms\Components\Textarea::make('description')
                ->required(),
                Forms\Components\TextInput::make('location')
                ->required()
                ->maxLength(255), 
          //      Forms\Components\TextInput::make('lien_postuler')
            //    ->nullable(),
               // ->url(),         mn b3d insha'allah
                Forms\Components\FileUpload::make('image_offre_path')
                ->nullable()
                ->label('image_offre')
                ->image()
                ->disk('public') // 
                ->directory('emplois')
                ->visibility('public'),
                Forms\Components\FileUpload::make('image_details_path')
                ->nullable()
                ->label('image_detail')
                ->image()
                ->disk('public') //
                ->directory('emplois')
                ->visibility('public'),
                Forms\Components\TagsInput::make('skills') 
                ->label('Skills')
                ->placeholder('Entrez les compétences requises pour cette offre')
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
                Tables\Columns\TagsColumn::make('skills') 
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
            'index' => Pages\ListEmplois::route('/'),
            'create' => Pages\CreateEmploi::route('/create'),
            'edit' => Pages\EditEmploi::route('/{record}/edit'),
        ];
    }    
}
