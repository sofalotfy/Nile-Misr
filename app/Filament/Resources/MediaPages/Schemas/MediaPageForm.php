<?php

namespace App\Filament\Resources\MediaPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class MediaPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        TextInput::make('hero-title')
                            ->label('Title'),

                        TextInput::make('hero-sub-title')
                            ->label('Subtitle'),

                        FileUpload::make('hero-image')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/hero')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media Solutions')
                    ->schema([
                        RichEditor::make('media-solutions-quote')
                            ->label('Quote')
                            ->columnSpanFull(),

                        TextInput::make('media-solutions-title')
                            ->label('Title'),

                        RichEditor::make('media-solutions-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media Solutions')
                    ->schema([
                        Repeater::make('cards')
                            ->label('Cards')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('media'),

                                TextInput::make('title')
                                    ->label('Title'),

                                TextArea::make('description')
                                    ->label('Description')
                                    ->columnSpanFull(),
                            ])
                            ->collapsible()
                            ->reorderable()
                            ->cloneable()
                            ->columnSpanFull(),

                    ])
                    ->columns(2),
            ])->columns(1);
    }
}
