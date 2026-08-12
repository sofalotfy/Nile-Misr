<?php

namespace App\Filament\Resources\UmrahBookings;

use App\Filament\Resources\UmrahBookings\Pages\CreateUmrahBooking;
use App\Filament\Resources\UmrahBookings\Pages\EditUmrahBooking;
use App\Filament\Resources\UmrahBookings\Pages\ListUmrahBookings;
use App\Filament\Resources\UmrahBookings\Schemas\UmrahBookingForm;
use App\Filament\Resources\UmrahBookings\Tables\UmrahBookingsTable;
use App\Models\UmrahBooking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UmrahBookingResource extends Resource
{
    protected static ?string $model = UmrahBooking::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Customer Requests';
    }

    public static function getNavigationSort(): ?int
    {
        return 2;
    }

    public static function getPluralLabel(): string
    {
        return 'Umrah Bookings';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    
    public static function form(Schema $schema): Schema
    {
        return UmrahBookingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UmrahBookingsTable::configure($table);
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
            'index' => ListUmrahBookings::route('/'),
            'create' => CreateUmrahBooking::route('/create'),
            'edit' => EditUmrahBooking::route('/{record}/edit'),
        ];
    }
}
