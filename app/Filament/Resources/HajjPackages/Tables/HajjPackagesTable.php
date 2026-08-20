<?php

namespace App\Filament\Resources\HajjPackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Enums\HajjPackageDuration;
use App\Enums\HajjPackageLevel;
use Filament\Support\Enums\FontWeight;

class HajjPackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->columns([
                ImageColumn::make('card_image')
                    ->label('Image')
                    ->disk('public')
                    ->square()
                    ->size(50),

                TextColumn::make('title')
                    ->label('Package')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold)
                    ->wrap(),

                TextColumn::make('level')
                    ->label('Level')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        HajjPackageLevel::VIP => 'warning',
                        HajjPackageLevel::FIVE_STARS => 'success',
                        HajjPackageLevel::ECONOMIC => 'gray',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('duration')
                    ->label('Duration')
                    ->formatStateUsing(
                        fn (HajjPackageDuration $state) => $state->value === 0
                            ? 'All'
                            : "{$state->value} Days"
                    )
                    ->badge()
                    ->color('info')
                    ->sortable(),

                TextColumn::make('date')
                    ->label('Date')
                    ->sortable(),

                TextColumn::make('rating')
                    ->label('Rating')
                    ->numeric(decimalPlaces: 1)
                    ->icon('heroicon-m-star')
                    ->sortable(),

                TextColumn::make('Deposit')
                    ->label('Deposit')
                    ->money('EGP', decimalPlaces: 0)
                    ->sortable(),

                TextColumn::make('entrey-fee')
                    ->label('Entry Fee')
                    ->money('EGP', decimalPlaces: 0)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->defaultSort('created_at', 'desc');
    }
}
