<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PubliciteResource\Pages;
use App\Filament\Resources\PubliciteResource\RelationManagers;
use App\Models\Publicite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PubliciteResource extends Resource
{
    protected static ?string $model = Publicite::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('emplacement')
                ->options([
                    'header'=>'header' , 
                    'after BU'=> 'After BU', 
                    'before Actu'=> 'Before Actu',
                    'before footer'=> 'Before footer',
                ])
                ->required()
                ->label('Emplacement')
                ->placeholder('Select Emplacement'),

                TinyEditor::make('Titre')
                ->profile('titre')
                ->required()
                ->maxLength(255),


                TinyEditor::make('SousTitre')
                ->profile('titre')
                ->required()
                ->maxLength(255),


                Forms\Components\FileUpload::make('Image')
                ->image()
                ->maxSize(1024) 
                ->nullable(),

                Forms\Components\Select::make('Type')
                ->options([
                    'Banner' => 'Banner',
                    'Sidebar' => 'Sidebar',
                    'Video' => 'Video',
                    'Annoce' => 'Annoce',
                    'Cards' => 'Cards'
                ])
                ->required(),

                Forms\Components\TextInput::make('link')
                ->required(),

                TinyEditor::make('description')
                ->nullable(),

                TinyEditor::make('Boutton')
                ->profile('titre')
                ->required()
                ->maxLength(255),

                Forms\Components\ColorPicker::make('button_color')
    ->label('Button Color')
    ->default('#005153'),

    Forms\Components\ColorPicker::make('background')
    ->label('Background Color')
    ->default('bg-primary'),

                Forms\Components\Toggle::make('status')
                ->label('Active')
                ,
        ]);
           
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('emplacement')
    ->label('Emplacement')
    ->sortable()
    ->searchable(),
                Tables\Columns\TextColumn::make('Titre')
                    ->sortable()
                    ->searchable(),
                    
                Tables\Columns\ImageColumn::make('Image'),

                Tables\Columns\TextColumn::make('Type')
                    ->sortable()
                    ->searchable(),

                    Tables\Columns\IconColumn::make('status')
                    ->label('Active')
                    ->boolean(),


                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
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
            'index' => Pages\ListPublicites::route('/'),
            'create' => Pages\CreatePublicite::route('/create'),
            'edit' => Pages\EditPublicite::route('/{record}/edit'),
        ];
    }    
}
