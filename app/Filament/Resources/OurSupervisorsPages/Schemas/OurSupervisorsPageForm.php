<?php

namespace App\Filament\Resources\OurSupervisorsPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OurSupervisorsPageForm
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
                            ->directory('our-supervisors-pages/hero')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Our Supervisors')
                    ->schema([
                        TextInput::make('our-supervisors-tag')
                            ->label('Tag'),

                        RichEditor::make('our-supervisors-quote')
                            ->label('Quote')
                            ->columnSpanFull(),

                        RichEditor::make('our-supervisors-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        RichEditor::make('our-supervisors-include-text')
                            ->label('Include Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Organizational Supervision')
                    ->schema([
                        FileUpload::make('organizational-supervisors-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('our-supervisors-pages/organizational-supervision'),

                        TextInput::make('organizational-supervisors-title')
                            ->label('Title'),

                        RichEditor::make('organizational-supervisors-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Service Supervision')
                    ->schema([
                        FileUpload::make('service-supervisors-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('our-supervisors-pages/service-supervision'),

                        TextInput::make('service-supervisors-title')
                            ->label('Title'),

                        RichEditor::make('service-supervisors-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Religious Supervision')
                    ->schema([
                        FileUpload::make('religious-supervisors-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('our-supervisors-pages/religious-supervision'),

                        TextInput::make('religious-supervisors-title')
                            ->label('Title'),

                        RichEditor::make('religious-supervisors-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Emergency & Safety Management')
                    ->schema([
                        FileUpload::make('safety-management-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('our-supervisors-pages/safety-management'),

                        TextInput::make('safety-management-title')
                            ->label('Title'),

                        RichEditor::make('safety-management-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])->columns(1);
    }
}