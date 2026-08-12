<?php

namespace App\Filament\Resources\HajjBookings;

use App\Filament\Resources\HajjBookings\Pages\CreateHajjBooking;
use App\Filament\Resources\HajjBookings\Pages\EditHajjBooking;
use App\Filament\Resources\HajjBookings\Pages\ListHajjBookings;
use App\Filament\Resources\HajjBookings\Schemas\HajjBookingForm;
use App\Filament\Resources\HajjBookings\Tables\HajjBookingsTable;
use App\Models\HajjBooking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HajjBookingResource extends Resource
{
    protected static ?string $model = HajjBooking::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Customer Requests';
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    public static function getPluralLabel(): string
    {
        return 'Hajj Booking';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return HajjBookingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HajjBookingsTable::configure($table);
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
            'index' => ListHajjBookings::route('/'),
            'create' => CreateHajjBooking::route('/create'),
            'edit' => EditHajjBooking::route('/{record}/edit'),
        ];
    }
}
