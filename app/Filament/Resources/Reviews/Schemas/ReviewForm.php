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
                    ->maxLength(255),

                Textarea::make('review')
                    ->rows(6)
                    ->columnSpanFull(),

            ]);
    }
}
