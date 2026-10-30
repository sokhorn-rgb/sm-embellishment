<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Setting Configuration')
                    ->components([
                        Grid::make(2)
                            ->components([
                                TextInput::make('key')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. site_name, contact_phone, office_address')
                                    ->unique(ignoreRecord: true),

                                Select::make('group')
                                    ->options([
                                        'general' => 'General Settings',
                                        'contact' => 'Contact & Location',
                                        'social' => 'Social Media Links',
                                        'branding' => 'Branding & Theme',
                                    ])
                                    ->default('general')
                                    ->required(),
                            ]),

                        Textarea::make('value')
                            ->rows(4)
                            ->columnSpanFull()
                            ->helperText('Setting value or text content'),
                    ]),
            ]);
    }
}
