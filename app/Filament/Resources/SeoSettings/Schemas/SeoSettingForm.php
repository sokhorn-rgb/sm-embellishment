<?php

namespace App\Filament\Resources\SeoSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SeoSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Page & Search Engine Metadata')
                    ->components([
                        Select::make('page')
                            ->options([
                                'home' => 'Home Page',
                                'about' => 'About Page',
                                'services' => 'Services Catalog',
                                'portfolio' => 'Portfolio Page',
                                'gallery' => 'Visual Gallery',
                                'blog' => 'Blog / Journal',
                                'contact' => 'Contact Page',
                            ])
                            ->required()
                            ->unique(ignoreRecord: true),

                        TextInput::make('meta_title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Ideal: 50-60 characters'),

                        Textarea::make('meta_description')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Ideal: 150-160 characters'),

                        TextInput::make('meta_keywords')
                            ->placeholder('e.g. embellishment, beadwork, embroidery, couture'),

                        TextInput::make('canonical_url')
                            ->url()
                            ->placeholder('https://yourdomain.com/...'),

                        Toggle::make('no_index')
                            ->label('Disallow Search Engines (noindex, nofollow)')
                            ->default(false),
                    ]),

                Section::make('Social Sharing (Open Graph)')
                    ->components([
                        Grid::make(2)
                            ->components([
                                TextInput::make('og_title')
                                    ->label('OG Title'),
                                TextInput::make('og_description')
                                    ->label('OG Description'),
                            ]),

                        FileUpload::make('og_image')
                            ->label('Social Share Image (OG Image)')
                            ->image()
                            ->disk('public')
                            ->directory('seo')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
