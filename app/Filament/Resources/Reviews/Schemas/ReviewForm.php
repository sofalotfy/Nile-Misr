<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;


class ReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->disabled()
                    ->maxLength(255),

                Textarea::make('review')
                    ->disabled()
                    ->rows(6)
                    ->columnSpanFull(),

            ]);
    }
}
