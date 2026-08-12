<?php

namespace App\Filament\Resources\ReviewsPages;

use App\Filament\Resources\ReviewsPages\Pages\CreateReviewsPage;
use App\Filament\Resources\ReviewsPages\Pages\EditReviewsPage;
use App\Filament\Resources\ReviewsPages\Pages\ListReviewsPages;
use App\Filament\Resources\ReviewsPages\Schemas\ReviewsPageForm;
use App\Filament\Resources\ReviewsPages\Tables\ReviewsPagesTable;
use App\Models\ReviewsPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReviewsPageResource extends Resource
{
    protected static ?string $model = ReviewsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Pages';
    }

    public static function getNavigationSort(): ?int
    {
        return 11;
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]);
    }

    public static function getPluralLabel(): string
    {
        return 'Reviews Page';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDeleteAny(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return ReviewsPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReviewsPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReviewsPages::route('/'),
            'create' => CreateReviewsPage::route('/create'),
            'edit' => EditReviewsPage::route('/{record}/edit'),
        ];
    }
}
