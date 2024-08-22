<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'VIDÉOS';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required(),
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('YouTube_Link'),

            Forms\Components\TimePicker::make('duration')
                ->required(),
            Forms\Components\Select::make('video_category_id')
              //  ->multiple()
                ->relationship('category','name')
                ->required(),
            
        ]);;
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('name')
            ->label('YouTube_Link'),
            Tables\Columns\TextColumn::make('duration'),
            Tables\Columns\TextColumn::make('category.name')
            ->label('Category')
            ->sortable()
            ->searchable(),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }    
}
