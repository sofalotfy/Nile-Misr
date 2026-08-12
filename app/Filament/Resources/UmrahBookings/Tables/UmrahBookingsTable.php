<?php

namespace App\Filament\Resources\UmrahBookings\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class UmrahBookingsTable
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

                TextColumn::make('umrah_package_id')
                    ->label('Package')
                    ->sortable(),

                TextColumn::make('umrah_price_id')
                    ->label('Price')
                    ->sortable(),

                TextColumn::make('count')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('price')
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
