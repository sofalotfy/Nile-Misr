<?php

namespace App\Filament\Resources\UmrahPackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UmrahPackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('maka-images')
                    ->label('Makkah')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('duration')
                    ->label('Duration')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('date')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('maka-hotel')
                    ->label('Makkah Hotel')
                    ->searchable(),

                TextColumn::make('madina-hotel')
                    ->label('Madinah Hotel')
                    ->searchable(),

                TextColumn::make('rating')
                    ->numeric(decimalPlaces: 1)
                    ->sortable(),

                TextColumn::make('Deposit')
                    ->label('Deposit')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('entrey-fee')
                    ->label('Entry Fee')
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
            ])->defaultSort('created_at', 'desc');

    }
}
