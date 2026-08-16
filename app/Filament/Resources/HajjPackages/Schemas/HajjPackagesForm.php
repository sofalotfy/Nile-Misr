<?php

namespace App\Filament\Resources\HajjPackages\Schemas;

use App\Enums\HajjPackageDuration;
use App\Enums\HajjPackageLevel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

use Filament\Schemas\Components\Group;

class HajjPackagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        FileUpload::make('card_image')
                            ->label('Card Image')
                            ->image()
                            ->disk('public')
                            ->directory('hajj-packages/images')
                            ->imageEditor(),

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Select::make('level')
                            ->options(
                                collect(HajjPackageLevel::cases())
                                    ->mapWithKeys(
                                        fn (HajjPackageLevel $level) => [
                                            $level->value => str($level->name)
                                                ->replace('_', ' ')
                                                ->title(),
                                        ]
                                    )
                                    ->toArray()
                            )
                            ->required()
                            ->native(false),

                        Select::make('duration')
                            ->options(
                                collect(HajjPackageDuration::cases())
                                    ->mapWithKeys(
                                        fn (HajjPackageDuration $duration) => [
                                            $duration->value => str($duration->name)
                                                ->replace('_', ' ')
                                                ->title(),
                                        ]
                                    )
                                    ->toArray()
                            )
                            ->required()
                            ->native(false),

                        TextInput::make('date')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('rating')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1)
                            ->required(),

                        Select::make('maka_hotel_id')
                            ->label('Makkah Hotel')
                            ->relationship('makaHotel', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('maka-duration')
                            ->label('Maka Duration')
                            ->numeric()
                            ->minValue(1)
                            ->suffix('nights')
                            ->required(),

                        Select::make('madina_hotel_id')
                            ->label('Madinah Hotel')
                            ->relationship('madinaHotel', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('madina-duration')
                            ->label('Madina Duration')
                            ->numeric()
                            ->minValue(1)
                            ->suffix('nights')
                            ->required(),

                        TextInput::make('Deposit')
                            ->label('Deposit')
                            ->numeric()
                            ->minValue(0)
                            ->required(),

                        TextInput::make('entrey-fee')
                            ->label('Entry Fee')
                            ->numeric()
                            ->minValue(0)
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Description')
                    ->schema([
                        Textarea::make('description')
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),

                Section::make('Prices')
                    ->schema([
                        Repeater::make('hajjPrices')
                            ->relationship()
                            ->schema([
                                Select::make('type')
                                    ->label('Room Type')
                                    ->options(
                                        collect(\App\Enums\RoomTypes::cases())
                                            ->mapWithKeys(
                                                fn (\App\Enums\RoomTypes $type) => [
                                                    $type->value => str($type->name)
                                                        ->replace('_', ' ')
                                                        ->title(),
                                                ]
                                            )
                                            ->toArray()
                                    )
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                    ->required()
                                    ->native(false),

                                TextInput::make('price')
                                    ->label('Price')
                                    ->numeric()
                                    ->minValue(0)
                                    ->required(),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Price')
                            ->reorderable(false)
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    isset($state['type'])
                                        ? str($state['type'])
                                            ->replace('_', ' ')
                                            ->title()
                                        : 'New Price'
                            )
                            ->columnSpanFull(),
                    ]),


                Section::make('Events')
                    ->schema([
                        Repeater::make('events')
                            ->label('Package Events')
                            ->schema([
                                Select::make('type')
                                    ->options([
                                        'flight' => 'Flight',
                                        'stay' => 'Stay',
                                    ])
                                    ->required()
                                    ->native(false)
                                    ->live(),

                                Group::make()
                                    ->schema([
                                        TextInput::make('date')
                                            ->required(),

                                        TextInput::make('text')
                                            ->label('Text')
                                            ->required(),
                                    ])
                                    ->visible(
                                        fn ($get) => $get('type') === 'flight'
                                    )
                                    ->statePath('data'),

                                Group::make()
                                    ->schema([
                                        TextInput::make('date')
                                            ->required(),

                                        TextInput::make('area')
                                            ->required(),

                                        TextInput::make('hotel')
                                            ->required(),

                                        TextInput::make('duration')
                                            ->required(),

                                        TextInput::make('meals')
                                            ->required(),
                                    ])
                                    ->visible(
                                        fn ($get) => $get('type') === 'stay'
                                    )
                                    ->statePath('data'),
                            ])
                            ->addActionLabel('Add Event')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string => isset($state['type'])
                                    ? str($state['type'])->title() . ' Event'
                                    : null
                            )
                            ->columnSpanFull(),
                    ]),

                Section::make('Flight Information')
                    ->schema([
                        TextInput::make('flight-host')
                            ->label('Flight Host')
                            ->required()
                            ->maxLength(255),

                        Repeater::make('flight-stops')
                            ->label('Flight Stops')
                            ->schema([
                                TextInput::make('stop')
                                    ->label('Stop')
                                    ->required(),
                            ])
                            ->addActionLabel('Add Stop')
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),

                        Repeater::make('notes')
                            ->label('Notes')
                            ->schema([
                                TextInput::make('note')
                                    ->label('Note')
                                    ->required(),
                            ])
                            ->addActionLabel('Add Note')
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])->columns(1);
    }
}
