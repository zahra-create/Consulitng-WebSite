<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
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

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Blogs'  ; 

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
                Forms\Components\Checkbox::make('afficher_sur_accueil')
                ->label('Affiché sur accueil')
                ->default(false),
                Forms\Components\Checkbox::make('afficher_en_banniere')
                ->label('Affiché en bannière')
                ->default(false),

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
            //Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('titre')->searchable(),
            //Tables\Columns\TextColumn::make('slug'),
            Tables\Columns\TextColumn::make('categories.titre')
            ->sortable()
            ->searchable(),
            //Tables\Columns\TextColumn::make('corps'),

            Tables\Columns\IconColumn::make('active')
            ->boolean(),
            Tables\Columns\TextColumn::make('date_publication')
            ->dateTime(),
            Tables\Columns\TextColumn::make('Auteur')->searchable(),
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
            'index' => Pages\ListBlogs::route('/'),
            /*'create' => Pages\CreateBlog::route('/create'),
            'view' => Pages\ViewBlog::route('/{record}'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),*/
        ];
    }    
}
