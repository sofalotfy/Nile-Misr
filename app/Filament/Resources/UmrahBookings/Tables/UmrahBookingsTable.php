<?php

namespace App\Filament\Resources\UmrahBookings\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use App\Enums\RoomTypes;
use Filament\Support\Enums\FontWeight;

class UmrahBookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Phone number copied')
                    ->color('info'),

                TextColumn::make('umrahPackage.title')
                    ->label('Package')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('umrahPrice.type')
                    ->label('Room Type')
                    ->formatStateUsing(
                        fn (RoomTypes $state) => str($state->name)
                            ->replace('_', ' ')
                            ->title()
                    )
                    ->badge()
                    ->color('info')
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Total Price')
                    ->money('EGP', decimalPlaces: 0)
                    ->color('success')
                    ->weight(FontWeight::SemiBold)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
