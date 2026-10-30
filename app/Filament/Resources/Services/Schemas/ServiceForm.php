<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Information')
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

                        Textarea::make('short_description')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Brief summary shown on homepage and service cards'),

                        RichEditor::make('description')
                            ->columnSpanFull()
                            ->helperText('Detailed description shown on service detail page'),
                    ]),

                Section::make('Pricing & Display')
                    ->components([
                        Grid::make(2)
                            ->components([
                                TextInput::make('price_from')
                                    ->numeric()
                                    ->prefix('$')
                                    ->label('Starting Price'),

                                TextInput::make('price_label')
                                    ->default('From')
                                    ->placeholder('e.g. Starting from, Per piece'),
                            ]),

                        Grid::make(3)
                            ->components([
                                Toggle::make('is_featured')
                                    ->label('Feature on Homepage')
                                    ->default(false),

                                Toggle::make('is_active')
                                    ->label('Active / Visible')
                                    ->default(true),

                                TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),
                            ]),

                        FileUpload::make('thumbnail')
                            ->image()
                            ->disk('public')
                            ->directory('services')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
