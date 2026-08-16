<?php

namespace App\Filament\Resources\HajjPackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Enums\HajjPackageDuration;

class HajjPackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('card_image')
                    ->label('Image')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('level')
                    ->badge(),

                TextColumn::make('duration')
                    ->label('Duration')
                    ->formatStateUsing(
                        fn (HajjPackageDuration $state) => $state->value === 0
                            ? 'All'
                            : "{$state->value} Days"
                    )
                    ->sortable(),

                TextColumn::make('date')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('makaHotel.name')
                    ->label('Makkah Hotel')
                    ->searchable(),

                TextColumn::make('madinaHotel.name')
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
            ])
            ->defaultSort('created_at', 'desc');
    }
}
