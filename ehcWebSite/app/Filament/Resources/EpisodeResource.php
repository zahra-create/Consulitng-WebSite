<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EpisodeResource\Pages;
use App\Filament\Resources\EpisodeResource\RelationManagers;
use App\Models\Episode;
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

class EpisodeResource extends Resource
{
    protected static ?string $model = Episode::class;

    protected static ?string $navigationIcon = 'heroicon-o-microphone';

    protected static ?string $navigationGroup = 'Podcast';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)
                    ->  schema([
                
                /* Forms\Components\TextInput::make('podcast_id')
                    ->required(),*/

                    Forms\Components\Select::make('podcaste')
                    ->relationship('podcaste','titre')
                    ->required(),

                Forms\Components\TextInput::make('titre episode')
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

            
            Forms\Components\RichEditor::make('description'),
            Forms\Components\Toggle::make('active')
                ->required(),
            Forms\Components\DateTimePicker::make('date_publication'),
            Forms\Components\TextInput::make('proprietaire'),

            ])->columnSpan(8),
    
            Forms\Components\Card::make()
            ->schema([
                Forms\Components\FileUpload::make('cover'),
                Forms\Components\FileUpload::make('audio')
                ->required(),

            ])->columnSpan(4),

])->columns(12);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('titre'),
                //Tables\Columns\TextColumn::make('slug'),
                //Tables\Columns\TextColumn::make('cover'),
                //Tables\Columns\TextColumn::make('description'),
                //Tables\Columns\TextColumn::make('audio'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('date_publication')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('proprietaire'),
                //Tables\Columns\TextColumn::make('created_at')
                //    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListEpisodes::route('/'),
            'create' => Pages\CreateEpisode::route('/create'),
            'view' => Pages\ViewEpisode::route('/{record}'),
            'edit' => Pages\EditEpisode::route('/{record}/edit'),
        ];
    }    
}
