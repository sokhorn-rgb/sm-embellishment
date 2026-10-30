<?php

namespace App\Filament\Resources\HeroSections;

use App\Filament\Resources\HeroSections\Pages\CreateHeroSection;
use App\Filament\Resources\HeroSections\Pages\EditHeroSection;
use App\Filament\Resources\HeroSections\Pages\ListHeroSections;
use App\Filament\Resources\HeroSections\Schemas\HeroSectionForm;
use App\Filament\Resources\HeroSections\Tables\HeroSectionsTable;
use App\Models\HeroSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTv;

    protected static string|UnitEnum|null $navigationGroup = '📝 មាតិកា & ការកំណត់';

    protected static ?string $navigationLabel = 'ផ្ទាំងដើម (Hero Section)';

    protected static ?string $modelLabel = 'ផ្ទាំងដើម';

    protected static ?string $pluralModelLabel = 'ផ្ទាំងដើមទាំងអស់';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return HeroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHeroSections::route('/'),
            'create' => CreateHeroSection::route('/create'),
            'edit' => EditHeroSection::route('/{record}/edit'),
        ];
    }
}
