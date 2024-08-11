<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemandeDeDevisResource\Pages;
use App\Filament\Resources\DemandeDeDevisResource\RelationManagers;
use App\Models\DemandeDeDevis;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemandeDeDevisResource extends Resource
{
    protected static ?string $model = DemandeDeDevis::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Formulaires';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                ->disabled(),
                Forms\Components\TextInput::make('prenom')
                ->disabled(),
                Forms\Components\TextInput::make('email')
                ->disabled(),
                Forms\Components\TextInput::make('phone')
                ->disabled(),
                Forms\Components\TextInput::make('company')
                ->disabled(),
                Forms\Components\TextInput::make('service')
                ->disabled(),
                Forms\Components\TextInput::make('message')
                ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('company')->searchable(),
                Tables\Columns\TextColumn::make('service')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('message')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDemandeDeDevis::route('/'),
            //'create' => Pages\CreateDemandeDeDevis::route('/create'),
            //'edit' => Pages\EditDemandeDeDevis::route('/{record}/edit'),
        ];
    }    
}
