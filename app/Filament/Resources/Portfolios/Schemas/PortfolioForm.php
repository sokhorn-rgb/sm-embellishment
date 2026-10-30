<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Overview')
                    ->components([
                        Grid::make(2)
                            ->components([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, $set) {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),
                            ]),

                        Grid::make(3)
                            ->components([
                                TextInput::make('client_name')
                                    ->placeholder('e.g. Maison Étoile Paris'),

                                TextInput::make('category')
                                    ->placeholder('e.g. Couture, Beadwork, Sequins'),

                                TextInput::make('completion_date')
                                    ->placeholder('e.g. Autumn 2026'),
                            ]),

                        TextInput::make('material')
                            ->placeholder('e.g. Swarovski crystals, silk velvet, metallic purl')
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),

                Section::make('Imagery & Media')
                    ->components([
                        FileUpload::make('thumbnail')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('portfolios')
                            ->helperText('Main cover image shown in portfolio grid'),

                        FileUpload::make('gallery_images')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->disk('public')
                            ->directory('portfolios/gallery')
                            ->helperText('High-resolution detail close-ups'),
                    ]),

                Section::make('Status & Ordering')
                    ->components([
                        Grid::make(3)
                            ->components([
                                Toggle::make('is_featured')
                                    ->label('Feature on Home')
                                    ->default(false),

                                Toggle::make('is_active')
                                    ->label('Active / Visible')
                                    ->default(true),

                                TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ]),
            ]);
    }
}
