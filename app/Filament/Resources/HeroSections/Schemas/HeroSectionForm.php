<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Text & Messaging')
                    ->components([
                        TextInput::make('subheading')
                            ->placeholder('e.g. Premium Embellishment Services')
                            ->maxLength(255),

                        TextInput::make('heading')
                            ->required()
                            ->placeholder('e.g. Crafting Beauty in Every Detail')
                            ->maxLength(255),

                        Textarea::make('description')
                            ->rows(3)
                            ->maxLength(1000),
                    ]),

                Section::make('Call to Action Buttons')
                    ->components([
                        Grid::make(2)
                            ->components([
                                TextInput::make('primary_button_text')
                                    ->default('View Our Work'),
                                TextInput::make('primary_button_url')
                                    ->default('/portfolio'),
                            ]),

                        Grid::make(2)
                            ->components([
                                TextInput::make('secondary_button_text')
                                    ->default('Get a Quote'),
                                TextInput::make('secondary_button_url')
                                    ->default('/contact'),
                            ]),
                    ]),

                Section::make('Media & Display')
                    ->components([
                        FileUpload::make('background_image')
                            ->image()
                            ->disk('public')
                            ->directory('hero'),

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
