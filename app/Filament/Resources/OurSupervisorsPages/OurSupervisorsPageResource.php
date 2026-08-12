<?php

namespace App\Filament\Resources\OurSupervisorsPages;

use App\Filament\Resources\OurSupervisorsPages\Pages\CreateOurSupervisorsPage;
use App\Filament\Resources\OurSupervisorsPages\Pages\EditOurSupervisorsPage;
use App\Filament\Resources\OurSupervisorsPages\Pages\ListOurSupervisorsPages;
use App\Filament\Resources\OurSupervisorsPages\Schemas\OurSupervisorsPageForm;
use App\Filament\Resources\OurSupervisorsPages\Tables\OurSupervisorsPagesTable;
use App\Models\OurSupervisorsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurSupervisorsPageResource extends Resource
{
    protected static ?string $model = OurSupervisorsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 5;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Our Supervisors Page';
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
        return OurSupervisorsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurSupervisorsPagesTable::configure($table);
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
            'index' => ListOurSupervisorsPages::route('/'),
            'create' => CreateOurSupervisorsPage::route('/create'),
            'edit' => EditOurSupervisorsPage::route('/{record}/edit'),
        ];
    }
}
