<?php

namespace App\Filament\Resources\SingleHijjPackagePages;

use App\Filament\Resources\SingleHijjPackagePages\Pages\CreateSingleHijjPackagePage;
use App\Filament\Resources\SingleHijjPackagePages\Pages\EditSingleHijjPackagePage;
use App\Filament\Resources\SingleHijjPackagePages\Pages\ListSingleHijjPackagePages;
use App\Filament\Resources\SingleHijjPackagePages\Schemas\SingleHijjPackagePageForm;
use App\Filament\Resources\SingleHijjPackagePages\Tables\SingleHijjPackagePagesTable;
use App\Models\SingleHijjPackagePage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SingleHijjPackagePageResource extends Resource
{
    protected static ?string $model = SingleHijjPackagePage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 7;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Single Hajj Package Page';
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
        return SingleHijjPackagePageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SingleHijjPackagePagesTable::configure($table);
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
            'index' => ListSingleHijjPackagePages::route('/'),
            'create' => CreateSingleHijjPackagePage::route('/create'),
            'edit' => EditSingleHijjPackagePage::route('/{record}/edit'),
        ];
    }
}
