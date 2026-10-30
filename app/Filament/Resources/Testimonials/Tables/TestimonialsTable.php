<?php

namespace App\Filament\Resources\Testimonials\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('client_avatar')
                    ->circular(),

                TextColumn::make('client_name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('client_company')
                    ->searchable()
                    ->placeholder('Independent'),

                TextColumn::make('rating')
                    ->formatStateUsing(fn ($state) => str_repeat('★', (int) $state))
                    ->color('warning')
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->boolean()
                    ->label('Featured'),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
