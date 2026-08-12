<?php

namespace App\Filament\Resources\MediaPages;

use App\Filament\Resources\MediaPages\Pages\CreateMediaPage;
use App\Filament\Resources\MediaPages\Pages\EditMediaPage;
use App\Filament\Resources\MediaPages\Pages\ListMediaPages;
use App\Filament\Resources\MediaPages\Schemas\MediaPageForm;
use App\Filament\Resources\MediaPages\Tables\MediaPagesTable;
use App\Models\MediaPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MediaPageResource extends Resource
{
    protected static ?string $model = MediaPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 12;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Media Page';
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
        return MediaPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MediaPagesTable::configure($table);
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
            'index' => ListMediaPages::route('/'),
            'create' => CreateMediaPage::route('/create'),
            'edit' => EditMediaPage::route('/{record}/edit'),
        ];
    }
}
