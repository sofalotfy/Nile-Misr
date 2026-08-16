<?php

namespace App\Filament\Resources\HajjBookings\Tables;

use App\Enums\RoomTypes;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;


class HajjBookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->searchable(),

                TextColumn::make('hajjPackage.title')
                    ->label('Package')
                    ->searchable(),

                TextColumn::make('hajjPrice.type')
                    ->label("Room Type")
                      ->formatStateUsing(fn (RoomTypes $state) => $state->value)
                      ->badge()
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Total Price')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),

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
