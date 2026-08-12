<?php

namespace App\Filament\Resources\WhyUsPages;

use App\Filament\Resources\WhyUsPages\Pages\CreateWhyUsPage;
use App\Filament\Resources\WhyUsPages\Pages\EditWhyUsPage;
use App\Filament\Resources\WhyUsPages\Pages\ListWhyUsPages;
use App\Filament\Resources\WhyUsPages\Schemas\WhyUsPageForm;
use App\Filament\Resources\WhyUsPages\Tables\WhyUsPagesTable;
use App\Models\WhyUsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WhyUsPageResource extends Resource
{
    protected static ?string $model = WhyUsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 10;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Why Us Page';
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
        return WhyUsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WhyUsPagesTable::configure($table);
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
            'index' => ListWhyUsPages::route('/'),
            'create' => CreateWhyUsPage::route('/create'),
            'edit' => EditWhyUsPage::route('/{record}/edit'),
        ];
    }
}
