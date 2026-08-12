<?php

namespace App\Filament\Resources\Header_Footers\Pages;

use App\Filament\Resources\Header_Footers\Header_FooterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeader_Footers extends ListRecords
{
    protected static string $resource = Header_FooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
