<?php

namespace App\Filament\Resources\OurSupervisorsPages\Pages;

use App\Filament\Resources\OurSupervisorsPages\OurSupervisorsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurSupervisorsPage extends EditRecord
{
    protected static string $resource = OurSupervisorsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
