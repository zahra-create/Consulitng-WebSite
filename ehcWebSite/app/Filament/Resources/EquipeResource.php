<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipeResource\Pages;
use App\Filament\Resources\EquipeResource\RelationManagers;
use App\Models\Equipe;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EquipeResource extends Resource
{
    protected static ?string $model = Equipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\FileUpload::make('image')->label('Image')->required(),
            Forms\Components\TextInput::make('nom')->required(),
            Forms\Components\TextInput::make('prenom')->required(),
            Forms\Components\TextInput::make('poste')->label('Poste')->required(),
            Forms\Components\Textarea::make('description')->label('Description du parcours')->required(),
            Forms\Components\Textarea::make('quote')->label('Citation')->nullable(),
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Image'),
            Tables\Columns\TextColumn::make('nom')->label('Nom')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('prenom')->label('Prénom')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('poste')->label('Poste'),
            Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
            Tables\Columns\TextColumn::make('quote')->label('Citation')->limit(50),
            Tables\Columns\TextColumn::make('reseaux_sociaux')->label('Réseaux Sociaux')
                ->formatStateUsing(fn ($state) => json_encode($state)),
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
            'index' => Pages\ListEquipes::route('/'),
            'create' => Pages\CreateEquipe::route('/create'),
            'edit' => Pages\EditEquipe::route('/{record}/edit'),
        ];
    }    
}
