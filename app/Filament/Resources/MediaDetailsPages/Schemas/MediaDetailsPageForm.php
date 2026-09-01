<?php

namespace App\Filament\Resources\MediaDetailsPages\Schemas;

use Filament\Schemas\Schema;

class MediaDetailsPageForm
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

                        FileUpload::make('images')
                            ->label('Images')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->disk('public')
                            ->directory('media-pages/media-solutions')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Video')
                    ->schema([
                        FileUpload::make('video_poster')
                            ->label('Video Poster')
                            ->disk('public')
                            ->directory('media-pages')
                            ->image()
                            ->columnSpanFull(),

                        TextInput::make('vidoe')
                            ->label('Video Link')
                            ->columnSpanFull(),
                    ]),

                Section::make('Media Gallery')
                    ->schema([
                        FileUpload::make('media-image-1')
                            ->label('Image 1')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/gallery'),

                        FileUpload::make('media-image-2')
                            ->label('Image 2')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/gallery'),

                        FileUpload::make('media-image-3')
                            ->label('Image 3')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/gallery'),

                        FileUpload::make('media-image-4')
                            ->label('Image 4')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/gallery'),

                        FileUpload::make('media-image-5')
                            ->label('Image 5')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/gallery'),

                        FileUpload::make('media-image-6')
                            ->label('Image 6')
                            ->image()
                            ->disk('public')
                            ->directory('media-pages/gallery'),
                    ])
                    ->columns(2),
            ])->columns(1);
    }
}
