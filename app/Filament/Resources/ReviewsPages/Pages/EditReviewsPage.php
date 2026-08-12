<?php

namespace App\Filament\Resources\ReviewsPages\Pages;

use App\Filament\Resources\ReviewsPages\ReviewsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReviewsPage extends EditRecord
{
    protected static string $resource = ReviewsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
