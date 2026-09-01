<?php

namespace App\Filament\Resources\MediaDetailsPages;

use App\Filament\Resources\MediaDetailsPages\Pages\CreateMediaDetailsPage;
use App\Filament\Resources\MediaDetailsPages\Pages\EditMediaDetailsPage;
use App\Filament\Resources\MediaDetailsPages\Pages\ListMediaDetailsPages;
use App\Filament\Resources\MediaDetailsPages\Schemas\MediaDetailsPageForm;
use App\Filament\Resources\MediaDetailsPages\Tables\MediaDetailsPagesTable;
use App\Models\MediaDetailsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MediaDetailsPageResource extends Resource
{
    protected static ?string $model = MediaDetailsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 13;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Media Details Page';
    }

    public static function form(Schema $schema): Schema
    {
        return MediaDetailsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MediaDetailsPagesTable::configure($table);
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
            'index' => ListMediaDetailsPages::route('/'),
            'create' => CreateMediaDetailsPage::route('/create'),
            'edit' => EditMediaDetailsPage::route('/{record}/edit'),
        ];
    }
}
