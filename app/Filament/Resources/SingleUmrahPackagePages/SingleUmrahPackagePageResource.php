<?php

namespace App\Filament\Resources\SingleUmrahPackagePages;

use App\Filament\Resources\SingleUmrahPackagePages\Pages\CreateSingleUmrahPackagePage;
use App\Filament\Resources\SingleUmrahPackagePages\Pages\EditSingleUmrahPackagePage;
use App\Filament\Resources\SingleUmrahPackagePages\Pages\ListSingleUmrahPackagePages;
use App\Filament\Resources\SingleUmrahPackagePages\Schemas\SingleUmrahPackagePageForm;
use App\Filament\Resources\SingleUmrahPackagePages\Tables\SingleUmrahPackagePagesTable;
use App\Models\SingleUmrahPackagePage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SingleUmrahPackagePageResource extends Resource
{
    protected static ?string $model = SingleUmrahPackagePage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 9;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Single Umrah Package Page';
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
        return SingleUmrahPackagePageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SingleUmrahPackagePagesTable::configure($table);
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
            'index' => ListSingleUmrahPackagePages::route('/'),
            'create' => CreateSingleUmrahPackagePage::route('/create'),
            'edit' => EditSingleUmrahPackagePage::route('/{record}/edit'),
        ];
    }
}
