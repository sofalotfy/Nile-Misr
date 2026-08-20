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
            ->reorderable('order')
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('duration')
                    ->label('Duration')
                    ->badge()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->badge()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('makaHotel.name')
                    ->label('Makkah Hotel')
                    ->searchable(),

                TextColumn::make('madinaHotel.name')
                    ->label('Madinah Hotel')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('order')->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
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
