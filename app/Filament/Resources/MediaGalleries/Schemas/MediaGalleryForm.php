<?php

namespace App\Filament\Resources\MediaGalleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MediaGalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Media Upload & Details')
                    ->components([
                        FileUpload::make('file_path')
                            ->label('Media File')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('gallery')
                            ->columnSpanFull(),

                        TextInput::make('title')
                            ->placeholder('e.g. Gold Threadwork Macro')
                            ->maxLength(255),

                        Grid::make(2)
                            ->components([
                                Select::make('file_type')
                                    ->options([
                                        'image' => 'Image',
                                        'video' => 'Video',
                                    ])
                                    ->default('image')
                                    ->required(),

                                TextInput::make('collection')
                                    ->placeholder('e.g. Embroidery, Beading, Bridal, Behind The Scenes')
                                    ->helperText('Used for frontend category filtering'),
                            ]),

                        Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),

                        Grid::make(2)
                            ->components([
                                Toggle::make('is_active')
                                    ->default(true),

                                TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ]),
            ]);
    }
}
