<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryBlogResource\Pages;
use App\Filament\Resources\CategoryBlogResource\RelationManagers;
use App\Filament\Resources\CategoryBlogResource\RelationManagers\BlogsRelationManager;
use App\Models\CategoryBlog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Closure;
use Illuminate\Support\Str;

class CategoryBlogResource extends Resource
{
    protected static ?string $model = CategoryBlog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Blogs'  ; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                })
                ->required(),

        ]);
}

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('titre'),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCategoryBlogs::route('/'),
        ];
    }  
    
    public static function getRealtions(){
        return [BlogsRelationManager::class];
    }
}
