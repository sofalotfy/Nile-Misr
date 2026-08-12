<?php

namespace App\Filament\Resources\Header_Footers;

use App\Filament\Resources\Header_Footers\Pages\CreateHeader_Footer;
use App\Filament\Resources\Header_Footers\Pages\EditHeader_Footer;
use App\Filament\Resources\Header_Footers\Pages\ListHeader_Footers;
use App\Filament\Resources\Header_Footers\Schemas\Header_FooterForm;
use App\Filament\Resources\Header_Footers\Tables\Header_FootersTable;
use App\Models\Header_Footer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Header_FooterResource extends Resource
{
    protected static ?string $model = Header_Footer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Header/Footer';
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
        return Header_FooterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Header_FootersTable::configure($table);
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
            'index' => ListHeader_Footers::route('/'),
            'create' => CreateHeader_Footer::route('/create'),
            'edit' => EditHeader_Footer::route('/{record}/edit'),
        ];
    }
}
