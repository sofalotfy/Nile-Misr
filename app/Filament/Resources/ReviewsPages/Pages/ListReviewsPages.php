<?php

namespace App\Filament\Resources\ReviewsPages\Pages;

use App\Filament\Resources\ReviewsPages\ReviewsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReviewsPages extends ListRecords
{
    protected static string $resource = ReviewsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
