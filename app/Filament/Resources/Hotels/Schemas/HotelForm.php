<?php

namespace App\Filament\Resources\Hotels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class HotelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Hotel Name')
                    ->required(),

                Textarea::make('address')
                    ->label('Address')
                    ->required(),

                TextInput::make('rating')
                    ->label('Rating')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(5)
                    ->required(),

                TextInput::make('rating_count')
                    ->label('Rating Count')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('distance')
                    ->label('Distance')
                    ->required(),

                TextInput::make('duration')
                    ->label('Duration')
                    ->numeric()
                    ->minValue(1)
                    ->suffix('nights')
                    ->required(),

                Toggle::make('iftar-included')
                    ->label('Iftar Included')
                    ->default(false)
                    ->required(),

                Repeater::make('images')
                    ->label('Images')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('hotels'),
                    ])
                    ->required()
                    ->minItems(1),

                Textarea::make('location')
                    ->label('Location')
                    ->required(),

            ]);
    }
}
