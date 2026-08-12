<?php

namespace App\Filament\Resources\HajjPackages;

use App\Filament\Resources\HajjPackages\Pages\CreateHajjPackages;
use App\Filament\Resources\HajjPackages\Pages\EditHajjPackages;
use App\Filament\Resources\HajjPackages\Pages\ListHajjPackages;
use App\Filament\Resources\HajjPackages\Schemas\HajjPackagesForm;
use App\Filament\Resources\HajjPackages\Tables\HajjPackagesTable;
use App\Models\HajjPackages;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjPackagesResource extends Resource
{
    protected static ?string $model = HajjPackages::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Models';
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    public static function getPluralLabel(): string
    {
        return 'Hajj Packages';
    }

    public static function form(Schema $schema): Schema
    {
        return HajjPackagesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjPackagesTable::configure($table);
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
            'index' => ListHajjPackages::route('/'),
            'create' => CreateHajjPackages::route('/create'),
            'edit' => EditHajjPackages::route('/{record}/edit'),
        ];
    }
}
