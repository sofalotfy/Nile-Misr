<?php

namespace App\Filament\Resources\OurSupervisorsPages\Pages;

use App\Filament\Resources\OurSupervisorsPages\OurSupervisorsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurSupervisorsPages extends ListRecords
{
    protected static string $resource = OurSupervisorsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
