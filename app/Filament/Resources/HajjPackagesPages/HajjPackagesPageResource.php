<?php

namespace App\Filament\Resources\HajjPackagesPages;

use App\Filament\Resources\HajjPackagesPages\Pages\CreateHajjPackagesPage;
use App\Filament\Resources\HajjPackagesPages\Pages\EditHajjPackagesPage;
use App\Filament\Resources\HajjPackagesPages\Pages\ListHajjPackagesPages;
use App\Filament\Resources\HajjPackagesPages\Schemas\HajjPackagesPageForm;
use App\Filament\Resources\HajjPackagesPages\Tables\HajjPackagesPagesTable;
use App\Models\HajjPackagesPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjPackagesPageResource extends Resource
{
    protected static ?string $model = HajjPackagesPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 6;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Hajj Packages Page';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDeleteAny(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return HajjPackagesPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjPackagesPagesTable::configure($table);
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
            'index' => ListHajjPackagesPages::route('/'),
            'create' => CreateHajjPackagesPage::route('/create'),
            'edit' => EditHajjPackagesPage::route('/{record}/edit'),
        ];
    }
}
