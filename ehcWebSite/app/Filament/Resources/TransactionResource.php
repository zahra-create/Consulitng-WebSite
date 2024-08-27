<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('montant')
                    ->required()
                    ->maxLength(255)
                    ->disabled,
                Forms\Components\TextInput::make('devise')
                    ->required()
                    ->maxLength(255)
                    ->disabled,
                Forms\Components\TextInput::make('nom et prenom')
                    ->required()
                    ->maxLength(255)
                    ->disabled,
                Forms\Components\TextInput::make('entreprise')
                    ->required()
                    ->maxLength(255)
                    ->disabled,
                Forms\Components\TextInput::make('service')
                    ->required()
                    ->maxLength(255)
                    ->disabled,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('montant')
                    ->searchable(),
                Tables\Columns\TextColumn::make('devise')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nom et prenom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('entreprise')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListTransactions::route('/'),
           // 'create' => Pages\CreateTransaction::route('/create'),
           // 'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
