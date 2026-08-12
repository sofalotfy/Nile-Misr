<?php

namespace App\Filament\Resources\WhyUsPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WhyUsPageForm
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
                            ->directory('why-us-pages/hero')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Accreditations & Notations')
                    ->schema([
                        TextInput::make('accreditations-title')
                            ->label('Title'),

                        RichEditor::make('accreditations-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        RichEditor::make('accreditations-note')
                            ->label('Note')
                            ->columnSpanFull(),

                        Repeater::make('accreditations-images')
                            ->label('Accreditation Images')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('why-us-pages/accreditations'),
                            ])
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Strategic Partnerships')
                    ->schema([
                        TextInput::make('strategic-partnerships-title')
                            ->label('Title'),

                        RichEditor::make('strategic-partnerships-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        Repeater::make('strategic-partnerships-images')
                            ->label('Partnership Images')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('why-us-pages/strategic-partnerships'),
                            ])
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Our Partnerships')
                    ->schema([
                        TextInput::make('partnerships-title')
                            ->label('Title'),

                        RichEditor::make('partnerships-text')
                            ->label('Text')
                            ->columnSpanFull(),

                        RichEditor::make('partnerships-note')
                            ->label('Note')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Royal Inn')
                    ->schema([
                        FileUpload::make('royal-inn-logo')
                            ->label('Logo')
                            ->image()
                            ->disk('public')
                            ->directory('why-us-pages/royal-inn'),

                        FileUpload::make('royal-inn-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('why-us-pages/royal-inn'),

                        TextInput::make('royal-inn-titlle')
                            ->label('Title'),

                        TextInput::make('royal-inn-tag')
                            ->label('Tag'),

                        RichEditor::make('royal-inn-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Noon')
                    ->schema([
                        FileUpload::make('noon-logo')
                            ->label('Logo')
                            ->image()
                            ->disk('public')
                            ->directory('why-us-pages/noon'),

                        FileUpload::make('noon-image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('why-us-pages/noon'),

                        TextInput::make('noon-titlle')
                            ->label('Title'),

                        TextInput::make('noon-tag')
                            ->label('Tag'),

                        RichEditor::make('noon-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
