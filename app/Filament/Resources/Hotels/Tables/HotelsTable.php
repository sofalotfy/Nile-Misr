<?php

namespace App\Filament\Resources\Hotels\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
class HotelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Hotel')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('address')
                    ->label('Address')
                    ->searchable()
                    ->limit(30),

                TextColumn::make('rating')
                    ->label('Rating')
                    ->numeric(decimalPlaces: 1)
                    ->sortable(),

                TextColumn::make('rating_count')
                    ->label('Reviews')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('distance')
                    ->label('Distance')
                    ->sortable(),

                TextColumn::make('duration')
                    ->label('Duration')
                    ->suffix(' nights')
                    ->sortable(),

                IconColumn::make('iftar-included')
                    ->label('Iftar')
                    ->boolean(),

                TextColumn::make('maka-location')
                    ->label('Location')
                    ->limit(30),

                TextColumn::make('created_at')
                    ->dateTime()
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
