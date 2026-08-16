<?php

namespace App\Filament\Resources\HajjBookings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;


class HajjBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('hajj_package_id')
                    ->label('Hajj Package')
                    ->prefixIcon('heroicon-o-building-office')
                    ->relationship('hajjPackage', 'title')
                    ->disabled(),

                TextInput::make('name')
                    ->label('Customer Name')
                    ->prefixIcon('heroicon-o-user')
                    ->disabled(),

                TextInput::make('phone')
                    ->label('Phone Number')
                    ->prefixIcon('heroicon-o-phone')
                    ->tel()
                    ->disabled(),

                TextInput::make('count')
                    ->label('Number of Travelers')
                    ->prefixIcon('heroicon-o-users')
                    ->numeric()
                    ->suffix('Travelers')
                    ->disabled(),

                TextInput::make('price')
                    ->label('Total Price')
                    ->prefixIcon('heroicon-o-banknotes')
                    ->numeric()
                    ->suffix('EGP')
                    ->disabled(),
            ]);
    }
}
