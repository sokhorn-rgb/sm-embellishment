<?php

namespace App\Filament\Resources\Inquiries\Schemas;

use App\Models\Service;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Customer Information')
                    ->components([
                        Grid::make(3)
                            ->components([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('phone')
                                    ->tel()
                                    ->maxLength(50),
                            ]),

                        Grid::make(2)
                            ->components([
                                TextInput::make('subject')
                                    ->maxLength(255),

                                Select::make('service_id')
                                    ->label('Interested Service')
                                    ->options(Service::pluck('title', 'id'))
                                    ->searchable()
                                    ->placeholder('Select a service'),
                            ]),

                        Textarea::make('message')
                            ->rows(5)
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Admin Management')
                    ->components([
                        Select::make('status')
                            ->options([
                                'pending' => 'Pending Review',
                                'in_progress' => 'In Progress / Quoted',
                                'completed' => 'Completed / Closed',
                                'archived' => 'Archived',
                            ])
                            ->default('pending')
                            ->required(),

                        Textarea::make('notes')
                            ->label('Internal Notes')
                            ->rows(3)
                            ->placeholder('Add internal follow-up notes here'),
                    ]),
            ]);
    }
}
