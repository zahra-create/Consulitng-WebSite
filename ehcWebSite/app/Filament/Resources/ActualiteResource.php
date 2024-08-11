<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActualiteResource\Pages;
use App\Filament\Resources\ActualiteResource\RelationManagers;
use App\Models\Actualite;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\BooleanColumn;

use Closure;
use Illuminate\Support\Str;

class ActualiteResource extends Resource
{
    protected static ?string $model = Actualite::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Actualités'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)
                    ->  schema([
                
                Forms\Components\TextInput::make('titre')
                ->required()
                ->maxLength(2048)
                ->reactive()
                ->afterStateUpdated(function (Closure $get, Closure $set, ?string $state) {
                    if (! $get('is_slug_changed_manually') && filled($state)) {
                        $set('slug', Str::slug($state));
                    }
                }),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(2048)
                ->afterStateUpdated(function (Closure $set) {
                    $set('is_slug_changed_manually', true);
                }), ]),

            
            Forms\Components\RichEditor::make('corps')
                ->required(),
            Forms\Components\Toggle::make('active')
                ->required(),
            Forms\Components\DateTimePicker::make('date_publication')
                ->required(),
            Forms\Components\TextInput::make('Auteur')
                ->required(),

            ])->columnSpan(8),
    
            Forms\Components\Card::make()
            ->schema([
                Forms\Components\FileUpload::make('image'),
                Forms\Components\Select::make('categories')
                ->multiple()
                ->relationship('categories','titre')
                ->required(),
            ])->columnSpan(4),

])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('titre'),
                //Tables\Columns\TextColumn::make('slug'),
            
                //Tables\Columns\TextColumn::make('corps'),

                Tables\Columns\IconColumn::make('active')
                ->boolean(),
                Tables\Columns\TextColumn::make('date_publication')
                ->dateTime(),
                Tables\Columns\TextColumn::make('Auteur'),
                //Tables\Columns\TextColumn::make('created_at')
                //->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualite::route('/create'),
            'view' => Pages\ViewActualite::route('/{record}'),
            'edit' => Pages\EditActualite::route('/{record}/edit'),
        ];
    }    
}
