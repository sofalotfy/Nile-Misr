<?php

namespace App\Filament\Resources\OurServicesPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OurServicesPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        TextInput::make('hero-title')
                            ->label('Title'),

                        RichEditor::make('hero-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        FileUpload::make('hero-image')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory('our-services-pages/hero')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Hajj Service')
                    ->schema([
                        Section::make('Images')
                            ->schema([
                                FileUpload::make('hajj-service-left-image')
                                    ->label('Left Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('our-services-pages/hajj-service'),

                                FileUpload::make('hajj-service-center-image')
                                    ->label('Center Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('our-services-pages/hajj-service'),

                                FileUpload::make('hajj-service-right-image')
                                    ->label('Right Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('our-services-pages/hajj-service'),
                            ])
                            ->columns(3),

                        TextInput::make('hajj-service-tag')
                            ->label('Tag'),

                        TextInput::make('hajj-service-title')
                            ->label('Title'),

                        RichEditor::make('hajj-service-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        TextInput::make('with-you-title')
                            ->label('With You Title'),

                        RichEditor::make('with-you-text')
                            ->label('With You Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make('Umrah Service')
                    ->schema([
                        Section::make('Images')
                            ->schema([
                                FileUpload::make('umrah-service-left-image')
                                    ->label('Left Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('our-services-pages/umrah-service'),

                                FileUpload::make('umrah-service-right-image')
                                    ->label('Right Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('our-services-pages/umrah-service'),
                                
                            ])
                            ->columns(2),

                        TextInput::make('umrah-service-tag')
                            ->label('Tag'),

                        TextInput::make('umrah-service-title')
                            ->label('Title'),

                        RichEditor::make('umrah-service-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        TextInput::make('care-about-you-title')
                            ->label('Care About You Title'),

                        RichEditor::make('care-about-you-text')
                            ->label('Care About You Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make('Residents Abroad')
                    ->schema([
                        FileUpload::make('residents-abroad-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('our-services-pages/residents-abroad')
                            ->columnSpanFull(),

                        TextInput::make('residents-abroad-tag')
                            ->label('Tag'),

                        TextInput::make('residents-abroad-title')
                            ->label('Title'),

                        RichEditor::make('residents-abroad-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])->columns(1);
    }
}
