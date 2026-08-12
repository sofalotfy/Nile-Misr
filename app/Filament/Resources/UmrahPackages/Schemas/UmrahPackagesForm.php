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

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),

                // ─────────────────────────────────────────────
                // Makkah
                // ─────────────────────────────────────────────

                Section::make('Makkah Hotel')
                    ->schema([
                        TextInput::make('maka-hotel')
                            ->label('Hotel')
                            ->maxLength(255),

                        TextInput::make('maka-address')
                            ->label('Address')
                            ->maxLength(255),

                        TextInput::make('maka-rating')
                            ->label('Rating')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1),

                        TextInput::make('maka-rating_count')
                            ->label('Rating Count')
                            ->numeric()
                            ->minValue(0),

                        TextInput::make('maka-distance')
                            ->label('Distance from Al-Masjid an-Nabawi')
                            ->maxLength(255),

                        TextInput::make('maka-duration')
                            ->label('Duration')
                            ->maxLength(255),

                        Select::make('maka-includes-iftar')
                            ->label('Includes Iftar')
                            ->options([
                                true => 'Yes',
                                false => 'No',
                            ])
                            ->required()
                            ->native(false),

                        FileUpload::make('maka-images')
                            ->label('Hotel Images')
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('umrah-packages/makkah/images')
                            ->imageEditor()
                            ->reorderable()
                            ->columnSpanFull(),

                        Textarea::make('maka-location')
                            ->label('Location')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // ─────────────────────────────────────────────
                // Madinah
                // ─────────────────────────────────────────────

                Section::make('Madinah Hotel')
                    ->schema([
                        TextInput::make('madina-hotel')
                            ->label('Hotel')
                            ->maxLength(255),

                        TextInput::make('madina-address')
                            ->label('Address')
                            ->maxLength(255),

                        TextInput::make('madina-rating')
                            ->label('Rating')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1),

                        TextInput::make('madina-rating_count')
                            ->label('Rating Count')
                            ->numeric()
                            ->minValue(0),

                        TextInput::make('madina-distance')
                            ->label('Distance from Al-Masjid an-Nabawi')
                            ->maxLength(255),

                        TextInput::make('madina-duration')
                            ->label('Duration')
                            ->maxLength(255),

                        Select::make('madina-includes-iftar')
                            ->label('Includes Iftar')
                            ->options([
                                true => 'Yes',
                                false => 'No',
                            ])
                            ->required()
                            ->native(false),

                        FileUpload::make('madina-images')
                            ->label('Hotel Images')
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('umrah-packages/madinah/images')
                            ->imageEditor()
                            ->reorderable()
                            ->columnSpanFull(),

                        Textarea::make('madina-location')
                            ->label('Location')
                            ->rows(3)
                            ->columnSpanFull(),
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
