<?php

namespace App\Filament\Resources\UmrahBookings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UmrahBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('umrah_price_id')
                    ->label('Umrah Price ID')
                    ->disabled(),

                TextInput::make('umrah_package_id')
                    ->label('Umrah Package ID')
                    ->disabled(),

                TextInput::make('name')
                    ->disabled(),

                TextInput::make('phone')
                    ->disabled(),

                TextInput::make('count')
                    ->numeric()
                    ->disabled(),

                TextInput::make('price')
                    ->numeric()
                    ->disabled(),

            ]);
    }
}
