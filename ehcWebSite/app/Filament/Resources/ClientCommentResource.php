<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientCommentResource\Pages;
use App\Filament\Resources\ClientCommentResource\RelationManagers;
use App\Models\ClientComment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientCommentResource extends Resource
{
    protected static ?string $model = ClientComment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')->label('Image')->image(),
                Forms\Components\TextInput::make('nom')->required(),
                Forms\Components\TextInput::make('prenom')->required(),
                Forms\Components\TextInput::make('poste')->label('Poste'),
                Forms\Components\TextInput::make('entreprise')->label('Entreprise'),
                Forms\Components\Textarea::make('commentaire')->label('Commentaire')->required(),
            
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
            Tables\Columns\TextColumn::make('entreprise')->label('Entreprise'),
            Tables\Columns\TextColumn::make('commentaire')->label('Commentaire')->limit(50),
        
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
            'index' => Pages\ListClientComments::route('/'),
            'create' => Pages\CreateClientComment::route('/create'),
            'edit' => Pages\EditClientComment::route('/{record}/edit'),
        ];
    }    
}
