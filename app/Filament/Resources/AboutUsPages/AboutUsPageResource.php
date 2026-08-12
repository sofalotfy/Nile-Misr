<?php

namespace App\Filament\Resources\AboutUsPages;

use App\Filament\Resources\AboutUsPages\Pages\CreateAboutUsPage;
use App\Filament\Resources\AboutUsPages\Pages\EditAboutUsPage;
use App\Filament\Resources\AboutUsPages\Pages\ListAboutUsPages;
use App\Filament\Resources\AboutUsPages\Schemas\AboutUsPageForm;
use App\Filament\Resources\AboutUsPages\Tables\AboutUsPagesTable;
use App\Models\AboutUsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutUsPageResource extends Resource
{
    protected static ?string $model = AboutUsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 3;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'About Us Page';
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
        return AboutUsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutUsPagesTable::configure($table);
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
            'index' => ListAboutUsPages::route('/'),
            'create' => CreateAboutUsPage::route('/create'),
            'edit' => EditAboutUsPage::route('/{record}/edit'),
        ];
    }
}
