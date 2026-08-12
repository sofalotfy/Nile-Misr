<?php

namespace App\Filament\Resources\AboutUsPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutUsPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        FileUpload::make('hero-image')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/hero'),

                        TextInput::make('title')
                            ->label('Title'),

                        TextInput::make('subtitle')
                            ->label('Subtitle'),
                    ])
                    ->columns(4),

                Section::make('Origins & Beginnings')
                    ->schema([
                        TextInput::make('beginning-tag')
                            ->label('Tag'),

                        TextInput::make('beginning-title')
                            ->label('Title'),

                        RichEditor::make('beginning-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(4),

                Section::make('Our Vision')
                    ->schema([
                        TextInput::make('our-vision-tag')
                            ->label('Tag'),

                        TextInput::make('our-vision-vertical-tag')
                            ->label('Vertical Tag'),

                        TextInput::make('our-vision-title')
                            ->label('Title')
                            ->columnSpanFull(),

                        RichEditor::make('our-vision-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        FileUpload::make('our-vision-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/vision'),

                    ])
                    ->columns(4),

                Section::make('Our Mission')
                    ->schema([
                        TextInput::make('our-mission-tag')
                            ->label('Tag'),

                        TextInput::make('our-mission-title')
                            ->label('Title'),

                        RichEditor::make('our-mission-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        FileUpload::make('our-mission-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/mission'),

                        FileUpload::make('our-mission-floating-image')
                            ->label('Floating Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/mission'),
                    ])
                    ->columns(4),

                Section::make('Values')
                    ->schema([
                        TextInput::make('values-tag')
                            ->label('Tag'),

                        TextInput::make('values-title')
                            ->label('Title')
                            ->columnSpanFull(),

                        Section::make('Respecting Sanctity')
                            ->schema([
                                TextInput::make('respecting-sanctity-title')
                                    ->label('Title'),

                                RichEditor::make('respecting-sanctity-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Integrity & Credibility')
                            ->schema([
                                TextInput::make('integrity-and-credibility-title')
                                    ->label('Title'),

                                RichEditor::make('integrity-and-credibility-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Experience & Professionalism')
                            ->schema([
                                TextInput::make('experience-and-professionalism-title')
                                    ->label('Title'),

                                RichEditor::make('experience-and-professionalism-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Comfort & Safety')
                            ->schema([
                                TextInput::make('comfort-and-safety-title')
                                    ->label('Title'),

                                RichEditor::make('comfort-and-safety-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Innovation & Development')
                            ->schema([
                                TextInput::make('innovation-and-evelopment-title')
                                    ->label('Title'),

                                RichEditor::make('innovation-and-evelopment-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Service Excellence')
                            ->schema([
                                TextInput::make('service-excellence-title')
                                    ->label('Title'),

                                RichEditor::make('service-excellence-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),

                        Section::make('Egyptian Authenticity')
                            ->schema([
                                TextInput::make('egyptian-authenticity-title')
                                    ->label('Title'),

                                RichEditor::make('egyptian-authenticity-text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('Nile Journey')
                    ->schema([
                        TextInput::make('nile-journey-tag')
                            ->label('Tag'),

                        TextInput::make('nile-journey-title')
                            ->label('Title'),

                        RichEditor::make('nile-journey-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        FileUpload::make('nile-journey-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/nile-journey'),

                        FileUpload::make('nile-journey-floating-image')
                            ->label('Floating Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/nile-journey'),
                    ])
                    ->columns(4),

                Section::make('Achievements')
                    ->schema([
                        RichEditor::make('achievements-quote')
                            ->label('Quote')
                            ->columnSpanFull(),

                        TextInput::make('achievements-title')
                            ->label('Title'),

                        RichEditor::make('achievements-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        TextInput::make('achievements-years-count')
                            ->label('Years Count')
                            ->numeric(),

                        Repeater::make('achievements')
                            ->label('Achievements')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title'),

                                RichEditor::make('text')
                                    ->label('Text')
                                    ->columnSpanFull(),
                            ])
                            ->collapsible()
                            ->reorderable()
                            ->columnSpanFull(),
                    ])
                    ->columns(4),

                Section::make('Timeline')
                    ->schema([
                        TextInput::make('tmeline-tag')
                            ->label('Tag'),

                        TextInput::make('tmeline-title')
                            ->label('Title')
                            ->columnSpanFull(),

                        Repeater::make('tmeline')
                            ->label('Timeline')
                            ->schema([
                                TextInput::make('year')
                                    ->label('Year')
                                    ->numeric(),

                                Repeater::make('events')
                                    ->label('Events')
                                    ->schema([
                                        TextInput::make('event')
                                            ->label('Event')
                                            ->columnSpanFull(),
                                    ])
                                    ->reorderable()
                                    ->collapsible()
                                    ->columnSpanFull(),
                            ])
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columns(4),

                Section::make('Team')
                    ->schema([
                        TextInput::make('team-tag')
                            ->label('Tag'),

                        TextInput::make('team-title')
                            ->label('Title'),

                        RichEditor::make('team-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        FileUpload::make('team-image')
                            ->label('Team Image')
                            ->image()
                            ->disk('public')
                            ->directory('about-us-pages/team'),
                    ])
                    ->columns(4),

                Section::make('Video')
                    ->schema([
                        FileUpload::make('video')
                            ->label('Video')
                            ->disk('public')
                            ->directory('about-us-pages/video')
                            ->acceptedFileTypes([
                                'video/mp4',
                                'video/webm',
                                'video/ogg',
                                'video/quicktime',
                            ])
                            ->maxSize(102400)
                            ->columnSpanFull(),
                    ]),
            ])->columns(1);
    }
}