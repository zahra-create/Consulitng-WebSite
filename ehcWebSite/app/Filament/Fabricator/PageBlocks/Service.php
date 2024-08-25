<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class Service extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('service')
            ->schema([
                
                Forms\Components\TextInput::make('Introtitre')
                ->maxLength(2048),
                TinyEditor::make('Introcontent')
                ->profile('corps')
                ->required(),
                Repeater::make('services')
                ->label('Services')
                ->schema([
                  TextInput::make('nom')
                        ->label('Nom du service')
                        ->required(),
                    
                    Textarea::make('description')
                        ->label('Description du service')
                        ->rows(3)
                        ->required(),
                ])
                ->minItems(1)
                ->maxItems(10)  
                ->columns(1),  
        ]);

    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}