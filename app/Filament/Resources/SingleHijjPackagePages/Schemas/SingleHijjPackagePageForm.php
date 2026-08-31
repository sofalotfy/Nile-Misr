<?php

namespace App\Filament\Resources\SingleHijjPackagePages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class SingleHijjPackagePageForm
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
                            ->directory('single-hijj-pages')
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
