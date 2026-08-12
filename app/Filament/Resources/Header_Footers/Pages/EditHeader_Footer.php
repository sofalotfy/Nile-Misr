<?php

namespace App\Filament\Resources\Header_Footers\Pages;

use App\Filament\Resources\Header_Footers\Header_FooterResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHeader_Footer extends EditRecord
{
    protected static string $resource = Header_FooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
