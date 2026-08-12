<?php

namespace App\Filament\Resources\HajjBookings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HajjBookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hajjPrice.name')
                    ->label('Hajj Price')
                    ->disabled(),

                TextInput::make('hajjPackage.name')
                    ->label('Hajj Package')
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
