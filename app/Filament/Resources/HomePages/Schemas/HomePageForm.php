<?php

namespace App\Filament\Resources\HomePages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Enums\SitePages;

class HomePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->schema([
                        Repeater::make('images')
                            ->label('Hero Images')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('home-pages/hero')
                                    ->required(),
                            ])
                            ->collapsible()
                            ->reorderable()
                            ->columnSpanFull(),

                        TextInput::make('hero-tag')
                            ->label('Tag'),

                        TextInput::make('hero-title')
                            ->label('Title'),

                        TextInput::make('sub-title')
                            ->label('Subtitle')
                            ->columnSpanFull(),

                        TextInput::make('hajj-season')
                            ->label('Hajj Season'),

                        FileUpload::make('hero-floating-image')
                            ->label('Floating Image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages/hero'),
                    ])
                    ->columns(2),

                Section::make('Pilgrim Count')
                    ->schema([
                        TextInput::make('pilgrim-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ]),

                Section::make('Rate')
                    ->schema([
                        TextInput::make('rate-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ]),

                Section::make('Reviews')
                    ->schema([
                        TextInput::make('review-text')
                            ->label('Text')
                            ->columnSpanFull(),
                    ]),

                Section::make('Section 1')
                    ->schema([
                        FileUpload::make('section1-image')
                            ->label('Main Image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages/section-1'),

                        FileUpload::make('section1-floating-image')
                            ->label('Floating Image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages/section-1'),

                        TextInput::make('section1-tag')
                            ->label('Tag'),

                        TextInput::make('section1-title')
                            ->label('Title'),

                        RichEditor::make('section1-description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Section 2')
                    ->schema([
                        TextInput::make('section2-tag')
                            ->label('Tag'),

                        TextInput::make('section2-title')
                            ->label('Title')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Section 3')
                    ->schema([
                        FileUpload::make('section3-image')
                            ->label('Main Image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages/section-3'),

                        FileUpload::make('section3-floating-image')
                            ->label('Floating Image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages/section-3'),
                    ])
                    ->columns(2),

                Section::make('Our Services')
                    ->schema([
                        Repeater::make('our-services')
                            ->label('Services')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('home-pages/services'),

                                TextInput::make('title')
                                    ->label('Title'),

                                RichEditor::make('description')
                                    ->label('Description')
                                    ->columnSpanFull(),

                                TextInput::make('button_text')
                                    ->label('Button Text'),

                                Select::make('link')
                                    ->label('Link')
                                    ->options(
                                        collect(SitePages::cases())
                                            ->mapWithKeys(fn (SitePages $page) => [
                                                $page->value => $page->label(),
                                            ])
                                    ),
                            ])
                            ->collapsible()
                            ->reorderable()
                            ->cloneable()
                            ->columnSpanFull(),
                    ]),

                Section::make('Experiences')
                    ->schema([
                        TextInput::make('experiences-title')
                            ->label('Title')
                            ->columnSpanFull(),
                    ]),

                Section::make('Contact Form')
                    ->schema([
                        FileUpload::make('contact_form_image')
                            ->label('Form Image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages/contact'),

                        TextInput::make('contact_form_name_placeholder')
                            ->label('Name Placeholder'),

                        TextInput::make('contact_form_phone_placeholder')
                            ->label('Phone Placeholder'),

                        TextInput::make('contact_form_email_placeholder')
                            ->label('Email Placeholder'),
                    ])
                    ->columns(2),

            ])->columns(1);
    }
}
