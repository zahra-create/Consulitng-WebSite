<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Repeater;

class HeaderAbout extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('header-about')
            ->schema([
                Forms\Components\TextInput::make('titre')
                ->maxLength(2048),
                Forms\Components\TextInput::make('SousTitre')
                ->maxLength(2048),
                TinyEditor::make('content')
                ->profile('corps')
                ->required(),
                Forms\Components\FileUpload::make('images')
                ->label('Image')
                ->required(),
              
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}