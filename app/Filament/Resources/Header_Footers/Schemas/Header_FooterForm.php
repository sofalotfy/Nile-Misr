<?php

namespace App\Filament\Resources\Header_Footers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class Header_FooterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Logos')
                    ->schema([
                        FileUpload::make('header-logo')
                            ->label('Header Logo')
                            ->image()
                            ->disk('public')
                            ->directory('header-footers')
                            ->columnSpanFull(),

                        FileUpload::make('footer-logo')
                            ->label('Footer Logo')
                            ->image()
                            ->disk('public')
                            ->directory('header-footers')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
