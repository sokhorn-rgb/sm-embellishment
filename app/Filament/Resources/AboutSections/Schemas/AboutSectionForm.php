<?php

namespace App\Filament\Resources\AboutSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Story & Content')
                    ->components([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('subtitle')
                            ->maxLength(255),

                        Textarea::make('content')
                            ->rows(6)
                            ->required()
                            ->columnSpanFull(),

                        Textarea::make('mission')
                            ->rows(3),

                        Textarea::make('vision')
                            ->rows(3),
                    ]),

                Section::make('Media & Visibility')
                    ->components([
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('about'),

                        Toggle::make('is_active')
                            ->default(true),
                    ]),
            ]);
    }
}
