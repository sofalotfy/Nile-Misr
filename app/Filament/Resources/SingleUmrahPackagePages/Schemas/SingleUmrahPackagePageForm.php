<?php

namespace App\Filament\Resources\SingleUmrahPackagePages\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class SingleUmrahPackagePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Package Information')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('single-umrah-pages')
                            ->columnSpanFull(),

                        TextInput::make('title')
                            ->label('Title'),

                        TextInput::make('quote')
                            ->label('Quote')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
