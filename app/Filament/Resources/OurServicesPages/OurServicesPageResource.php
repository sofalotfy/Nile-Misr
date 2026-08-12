<?php

namespace App\Filament\Resources\OurServicesPages;

use App\Filament\Resources\OurServicesPages\Pages\CreateOurServicesPage;
use App\Filament\Resources\OurServicesPages\Pages\EditOurServicesPage;
use App\Filament\Resources\OurServicesPages\Pages\ListOurServicesPages;
use App\Filament\Resources\OurServicesPages\Schemas\OurServicesPageForm;
use App\Filament\Resources\OurServicesPages\Tables\OurServicesPagesTable;
use App\Models\OurServicesPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurServicesPageResource extends Resource
{
    protected static ?string $model = OurServicesPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 4;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Our Services Page';
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
        return OurServicesPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurServicesPagesTable::configure($table);
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
            'index' => ListOurServicesPages::route('/'),
            'create' => CreateOurServicesPage::route('/create'),
            'edit' => EditOurServicesPage::route('/{record}/edit'),
        ];
    }
}
