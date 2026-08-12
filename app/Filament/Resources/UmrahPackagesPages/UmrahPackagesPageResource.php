<?php

namespace App\Filament\Resources\UmrahPackagesPages;

use App\Filament\Resources\UmrahPackagesPages\Pages\CreateUmrahPackagesPage;
use App\Filament\Resources\UmrahPackagesPages\Pages\EditUmrahPackagesPage;
use App\Filament\Resources\UmrahPackagesPages\Pages\ListUmrahPackagesPages;
use App\Filament\Resources\UmrahPackagesPages\Schemas\UmrahPackagesPageForm;
use App\Filament\Resources\UmrahPackagesPages\Tables\UmrahPackagesPagesTable;
use App\Models\UmrahPackagesPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmrahPackagesPageResource extends Resource
{
    protected static ?string $model = UmrahPackagesPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 8;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Umrah Packages Page';
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
        return UmrahPackagesPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmrahPackagesPagesTable::configure($table);
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
            'index' => ListUmrahPackagesPages::route('/'),
            'create' => CreateUmrahPackagesPage::route('/create'),
            'edit' => EditUmrahPackagesPage::route('/{record}/edit'),
        ];
    }
}
