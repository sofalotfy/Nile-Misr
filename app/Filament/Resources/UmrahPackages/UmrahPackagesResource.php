<?php

namespace App\Filament\Resources\UmrahPackages;

use App\Filament\Resources\UmrahPackages\Pages\CreateUmrahPackages;
use App\Filament\Resources\UmrahPackages\Pages\EditUmrahPackages;
use App\Filament\Resources\UmrahPackages\Pages\ListUmrahPackages;
use App\Filament\Resources\UmrahPackages\Schemas\UmrahPackagesForm;
use App\Filament\Resources\UmrahPackages\Tables\UmrahPackagesTable;
use App\Models\UmrahPackages;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmrahPackagesResource extends Resource
{
    protected static ?string $model = UmrahPackages::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;


    public static function getNavigationGroup(): ?string
    {
        return 'Models';
    }

    public static function getNavigationSort(): ?int
    {
        return 2;
    }

    public static function getPluralLabel(): string
    {
        return 'Umrah Packages';
    }

    public static function form(Schema $schema): Schema
    {
        return UmrahPackagesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmrahPackagesTable::configure($table);
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
            'index' => ListUmrahPackages::route('/'),
            'create' => CreateUmrahPackages::route('/create'),
            'edit' => EditUmrahPackages::route('/{record}/edit'),
        ];
    }
}
