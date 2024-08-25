<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Repeater;

class HomeHeader extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-header')
            ->schema([
                Forms\Components\TextInput::make('titre')
                ->maxLength(2048),
                TinyEditor::make('content')
                ->profile('corps')
                ->required(),
                Forms\Components\FileUpload::make('image')
                ->label('Image')
                ->required(),
                Forms\Components\TextInput::make('button')
                ,


            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}