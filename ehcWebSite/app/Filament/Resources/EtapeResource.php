<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EtapeResource\Pages;
use App\Filament\Resources\EtapeResource\RelationManagers;
use App\Models\Etapes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class EtapeResource extends Resource
{
    protected static ?string $model = Etapes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'CMS'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('Date')
                    
                    ->label('Date'),
                
                Forms\Components\TextInput::make('Titre')
                   
                    ->label('Titre'),
                
                TinyEditor::make('Content')
                    ->label('Content')
                    ->profile('corps')
                    ,
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Date')
                ->label('Date'),
            
            Tables\Columns\TextColumn::make('Titre')
                ->label('Titre'),
            
            Tables\Columns\TextColumn::make('Content')
                ->label('Content'),
              //  ->limit(50),
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
            'index' => Pages\ListEtapes::route('/'),
            'create' => Pages\CreateEtape::route('/create'),
            'edit' => Pages\EditEtape::route('/{record}/edit'),
        ];
    }
}
