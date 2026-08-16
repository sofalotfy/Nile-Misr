<?php

namespace App\Filament\Resources\UmrahPackages\Schemas;

use App\Enums\RoomTypes;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;
use App\Enums\StayDuration;
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
                    ->schema([
                        FileUpload::make('card_image')
                            ->label('Card Image')
                            ->image()
                            ->disk('public')
                            ->directory('UmrahPackages')
                            ->columnSpanFull(),

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),

                        Select::make('duration')
                            ->options([
                                collect(StayDuration::cases())
                                    ->mapWithKeys(
                                        fn (StayDuration $level) => [
                                            $level->value => str($level->name)
                                                ->replace('_', ' ')
                                                ->title(),
                                        ]
                                    )
                                    ->toArray()
                            ])
                            ->required()
                            ->native(false),

                        Repeater::make('dates')
                            ->simple(
                                TextInput::make('date')
                                    ->required()
                            )
                            ->addActionLabel('Add Date')
                            ->reorderable(),
                        
                        TextInput::make('category')
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

                    ])
                    ->columns(2),


                // ─────────────────────────────────────────────
                // Flight
                // ─────────────────────────────────────────────

                Section::make('Flight Information')
                    ->schema([
                        TextInput::make('flight-host')
                            ->label('Flight Host')
                            ->maxLength(255),

                        Repeater::make('flight-stops')
                            ->simple(
                                TextInput::make('stop')
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
                    ->schema([
                        Repeater::make('program_includes')
                            ->simple(
                                TextInput::make('item')
                                    ->required()
                            )
                            ->label('Program Includes')
                            ->addActionLabel('Add Item'),

                        Repeater::make('general_notes')
                            ->simple(
                                TextInput::make('note')
                                    ->required()
                            )
                            ->label('General Notes')
                            ->addActionLabel('Add Note'),

                        Repeater::make('required_papers')
                            ->simple(
                                TextInput::make('paper')
                                    ->required()
                            )
                            ->label('Required Papers')
                            ->addActionLabel('Add Paper'),

                        Repeater::make('cancelation_policy')
                            ->simple(
                                TextInput::make('policy')
                                    ->required()
                            )
                            ->label('Cancellation Policy')
                            ->addActionLabel('Add Policy'),

                        Repeater::make('external_visas')
                            ->simple(
                                TextInput::make('visa')
                                    ->required()
                            )
                            ->label('External Visas')
                            ->addActionLabel('Add Visa'),

                        RichEditor::make('notes')
                            ->label('Notes')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // ─────────────────────────────────────────────
                // Prices
                // ─────────────────────────────────────────────

                Section::make('Prices')
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
            ])->columns(1);
    }
}
