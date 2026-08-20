<?php

namespace App\Filament\Resources\UmrahPackages\Schemas;

use App\Enums\RoomTypes;
use App\Enums\StayDuration;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UmrahPackagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ─────────────────────────────────────────────
                // Basic Information
                // ─────────────────────────────────────────────

                Section::make('Basic Information')
                    ->description('General information about the Umrah package.')
                    ->schema([
                        FileUpload::make('card_image')
                            ->label('Card Image')
                            ->image()
                            ->disk('public')
                            ->directory('UmrahPackages')
                            ->imageEditor()
                            ->imagePreviewHeight('200')
                            ->columnSpanFull(),

                        TextInput::make('title')
                            ->label('Package Title')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('category')
                            ->label('Category')
                            ->required()
                            ->maxLength(255),

                        Select::make('duration')
                            ->label('Duration')
                            ->options(
                                collect(StayDuration::cases())
                                    ->mapWithKeys(
                                        fn (StayDuration $duration) => [
                                            $duration->value => str($duration->name)
                                                ->replace('_', ' ')
                                                ->title(),
                                        ]
                                    )
                                    ->toArray()
                            )
                            ->required()
                            ->native(false),

                        Repeater::make('dates')
                            ->label('Available Dates')
                            ->simple(
                                DatePicker::make('date')
                                    ->required()
                                    ->native(false)
                            )
                            ->addActionLabel('Add Date')
                            ->reorderable()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // ─────────────────────────────────────────────
                // Accommodation
                // ─────────────────────────────────────────────

                Section::make('Accommodation')
                    ->description('Hotels and number of nights in Makkah and Madinah.')
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

                // ─────────────────────────────────────────────
                // Flight Information
                // ─────────────────────────────────────────────

                Section::make('Flight Information')
                    ->description('Information about the flight included in the package.')
                    ->schema([
                        TextInput::make('flight-host')
                            ->label('Flight Host')
                            ->maxLength(255),

                        Repeater::make('flight-stops')
                            ->label('Flight Stops')
                            ->simple(
                                TextInput::make('stop')
                                    ->label('Stop')
                                    ->required()
                            )
                            ->addActionLabel('Add Stop')
                            ->reorderable()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // ─────────────────────────────────────────────
                // Program Information
                // ─────────────────────────────────────────────

                Section::make('Program Information')
                    ->description('Everything included in the Umrah program and important requirements.')
                    ->schema([
                        Repeater::make('program_includes')
                            ->label('Program Includes')
                            ->simple(
                                TextInput::make('item')
                                    ->required()
                            )
                            ->addActionLabel('Add Item'),

                        Repeater::make('general_notes')
                            ->label('General Notes')
                            ->simple(
                                TextInput::make('note')
                                    ->required()
                            )
                            ->addActionLabel('Add Note'),

                        Repeater::make('required_papers')
                            ->label('Required Papers')
                            ->simple(
                                TextInput::make('paper')
                                    ->required()
                            )
                            ->addActionLabel('Add Paper'),

                        Repeater::make('cancelation_policy')
                            ->label('Cancellation Policy')
                            ->simple(
                                TextInput::make('policy')
                                    ->required()
                            )
                            ->addActionLabel('Add Policy'),

                        Repeater::make('external_visas')
                            ->label('External Visas')
                            ->simple(
                                TextInput::make('visa')
                                    ->required()
                            )
                            ->addActionLabel('Add Visa'),

                        RichEditor::make('notes')
                            ->label('Additional Notes')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // ─────────────────────────────────────────────
                // Prices
                // ─────────────────────────────────────────────

                Section::make('Prices')
                    ->description('Set the price for each room type.')
                    ->schema([
                        Repeater::make('umrahPrices')
                            ->relationship()
                            ->schema([
                                Select::make('type')
                                    ->label('Room Type')
                                    ->options(
                                        collect(RoomTypes::cases())
                                            ->mapWithKeys(
                                                fn (RoomTypes $type) => [
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
            ])
            ->columns(1);
    }
}