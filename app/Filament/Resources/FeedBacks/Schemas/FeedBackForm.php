<?php

namespace App\Filament\Resources\FeedBacks\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FeedBackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->disabled(),

                TextInput::make('email')
                    ->disabled(),

                Textarea::make('message')
                    ->disabled()
                    ->rows(8)
                    ->columnSpanFull(),

            ]);
    }
}