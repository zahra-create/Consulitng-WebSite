<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoCategoryResource\Pages;
use App\Filament\Resources\VideoCategoryResource\RelationManagers;
use App\Models\VideoCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoCategoryResource extends Resource
{
    protected static ?string $model = VideoCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'VIDÉOS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                ->nullable()
                ->label('image')
                ->image()
                ->disk('public') // 
                ->directory('videos')
                ->visibility('public'),
           
        
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
           
                    
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
            'index' => Pages\ListVideoCategories::route('/'),
            'create' => Pages\CreateVideoCategory::route('/create'),
            'edit' => Pages\EditVideoCategory::route('/{record}/edit'),
        ];
    }    
}
