<?php

namespace App\Filament\Resources\ReviewsPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ReviewsPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        TextInput::make('hero-tag')
                            ->label('Tag'),

                        RichEditor::make('hero-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        FileUpload::make('hero-image')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory('reviews-pages/hero')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Experiences')
                    ->schema([
                        TextInput::make('experiences-title')
                            ->label('Title')
                            ->columnSpanFull(),
                    ]),

                Section::make('Video')
                    ->schema([
                        FileUpload::make('vidoe')
                            ->label('Video')
                            ->disk('public')
                            ->directory('reviews-pages/video')
                            ->acceptedFileTypes([
                                'video/mp4',
                                'video/webm',
                                'video/ogg',
                                'video/quicktime',
                            ])
                            ->maxSize(102400)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
