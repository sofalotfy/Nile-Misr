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
                    ->description('General information about the Hajj package.')
                    ->schema([
                        FileUpload::make('card_image')
                            ->label('Card Image')
                            ->image()
                            ->disk('public')
                            ->directory('hajj-packages/images')
                            ->imageEditor()
                            ->imagePreviewHeight('200')
                            ->columnSpanFull(),

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
                            ->label('Package Date')
                            ->required(),

                        TextInput::make('rating')
                            ->label('Rating')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1)
                            ->suffix('/ 5')
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Accommodation')
                    ->description('Hotels and duration of stay in Makkah and Madinah.')
                    ->schema([
                        Select::make('maka_hotel_id')
                            ->label('Makkah Hotel')
                            ->relationship('makaHotel', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('maka-duration')
                            ->label('Makkah Duration')
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
                            ->label('Madinah Duration')
                            ->numeric()
                            ->minValue(1)
                            ->suffix('nights')
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Financial Information')
                    ->description('Package fees and payment information.')
                    ->schema([
                        TextInput::make('Deposit')
                            ->label('Deposit')
                            ->numeric()
                            ->minValue(0)
                            ->prefix('EGP')
                            ->required(),

                        TextInput::make('entrey-fee')
                            ->label('Entry Fee')
                            ->numeric()
                            ->minValue(0)
                            ->prefix('EGP')
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
                    ->description('Define the price for each room type.')
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
                                    ->prefix('EGP')
                                    ->required(),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Room Price')
                            ->reorderable(false)
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    isset($state['type'])
                                        ? str($state['type'])
                                            ->replace('_', ' ')
                                            ->title()
                                        : 'New Room Price'
                            )
                            ->columnSpanFull(),
                    ]),

                Section::make('Events')
                    ->description('Add flights, stays, and other package events.')
                    ->schema([
                        Repeater::make('events')
                            ->label('Package Events')
                            ->schema([
                                Select::make('type')
                                    ->label('Event Type')
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
                                            ->label('Date')
                                            ->required(),

                                        TextInput::make('text')
                                            ->label('Description')
                                            ->required(),
                                    ])
                                    ->visible(
                                        fn ($get) => $get('type') === 'flight'
                                    )
                                    ->statePath('data')
                                    ->columns(2),

                                Group::make()
                                    ->schema([
                                        TextInput::make('date')
                                            ->label('Date')
                                            ->required(),

                                        TextInput::make('area')
                                            ->required(),

                                        TextInput::make('hotel')
                                            ->required(),

                                        TextInput::make('duration')
                                            ->label('Duration')
                                            ->suffix('nights')
                                            ->required(),

                                        TextInput::make('meals')
                                            ->required(),
                                    ])
                                    ->visible(
                                        fn ($get) => $get('type') === 'stay'
                                    )
                                    ->statePath('data')
                                    ->columns(2),
                            ])
                            ->addActionLabel('Add Event')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    isset($state['type'])
                                        ? str($state['type'])->title() . ' Event'
                                        : 'New Event'
                            )
                            ->columnSpanFull(),
                    ]),

                Section::make('Flight Information')
                    ->description('Information about the flights included in the package.')
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
