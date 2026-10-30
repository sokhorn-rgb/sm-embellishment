<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Client Information')
                    ->components([
                        Grid::make(3)
                            ->components([
                                TextInput::make('client_name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('client_position')
                                    ->placeholder('e.g. Creative Director'),

                                TextInput::make('client_company')
                                    ->placeholder('e.g. Maison Delacroix'),
                            ]),

                        Select::make('rating')
                            ->options([
                                5 => '⭐⭐⭐⭐⭐ (5 Stars)',
                                4 => '⭐⭐⭐⭐ (4 Stars)',
                                3 => '⭐⭐⭐ (3 Stars)',
                                2 => '⭐⭐ (2 Stars)',
                                1 => '⭐ (1 Star)',
                            ])
                            ->default(5)
                            ->required(),

                        Textarea::make('content')
                            ->label('Client Testimonial Quote')
                            ->rows(4)
                            ->required()
                            ->columnSpanFull(),

                        FileUpload::make('client_avatar')
                            ->image()
                            ->avatar()
                            ->disk('public')
                            ->directory('testimonials')
                            ->columnSpanFull(),
                    ]),

                Section::make('Visibility & Order')
                    ->components([
                        Grid::make(3)
                            ->components([
                                Toggle::make('is_featured')
                                    ->label('Feature on Home')
                                    ->default(true),

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
