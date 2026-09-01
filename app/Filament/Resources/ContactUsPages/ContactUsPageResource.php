<?php

namespace App\Filament\Resources\ContactUsPages;

use App\Filament\Resources\ContactUsPages\Pages\CreateContactUsPage;
use App\Filament\Resources\ContactUsPages\Pages\EditContactUsPage;
use App\Filament\Resources\ContactUsPages\Pages\ListContactUsPages;
use App\Filament\Resources\ContactUsPages\Schemas\ContactUsPageForm;
use App\Filament\Resources\ContactUsPages\Tables\ContactUsPagesTable;
use App\Models\ContactUsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactUsPageResource extends Resource
{
    protected static ?string $model = ContactUsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 14;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Contact Us Page';
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
        return ContactUsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactUsPagesTable::configure($table);
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
            'index' => ListContactUsPages::route('/'),
            'create' => CreateContactUsPage::route('/create'),
            'edit' => EditContactUsPage::route('/{record}/edit'),
        ];
    }
}
