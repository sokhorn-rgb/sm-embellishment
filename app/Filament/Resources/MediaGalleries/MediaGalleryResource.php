<?php

namespace App\Filament\Resources\MediaGalleries;

use App\Filament\Resources\MediaGalleries\Pages\CreateMediaGallery;
use App\Filament\Resources\MediaGalleries\Pages\EditMediaGallery;
use App\Filament\Resources\MediaGalleries\Pages\ListMediaGalleries;
use App\Filament\Resources\MediaGalleries\Schemas\MediaGalleryForm;
use App\Filament\Resources\MediaGalleries\Tables\MediaGalleriesTable;
use App\Models\MediaGallery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MediaGalleryResource extends Resource
{
    protected static ?string $model = MediaGallery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static string|UnitEnum|null $navigationGroup = '👑 សេវាកម្ម & ស្នាដៃ';

    protected static ?string $navigationLabel = 'វិចិត្រសាលរូបភាព (Galleries)';

    protected static ?string $modelLabel = 'រូបភាពវិចិត្រសាល';

    protected static ?string $pluralModelLabel = 'វិចិត្រសាលទាំងអស់';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return MediaGalleryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MediaGalleriesTable::configure($table);
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
            'index' => ListMediaGalleries::route('/'),
            'create' => CreateMediaGallery::route('/create'),
            'edit' => EditMediaGallery::route('/{record}/edit'),
        ];
    }
}
