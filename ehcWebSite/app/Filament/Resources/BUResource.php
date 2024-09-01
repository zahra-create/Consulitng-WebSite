<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BUResource\Pages;
use App\Filament\Resources\BUResource\RelationManagers;
use App\Models\BU;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class BUResource extends Resource
{
    protected static ?string $model = BU::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('BU')
                ->required(),
            TinyEditor::make('DescriptionBU')
            ->profile('corps')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('BU'),
                Tables\Columns\TextColumn::make('DescriptionBU'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBUS::route('/'),
            'create' => Pages\CreateBU::route('/create'),
            'edit' => Pages\EditBU::route('/{record}/edit'),
        ];
    }
}
