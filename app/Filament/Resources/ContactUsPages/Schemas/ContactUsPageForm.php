<?php

namespace App\Filament\Resources\ContactUsPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactUsPageForm
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
                            ->directory('contact-us-pages/hero')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Contact Card')
                    ->schema([
                        TextInput::make('card-tag')
                            ->label('Tag'),

                        TextInput::make('card-title')
                            ->label('Title'),

                        TextInput::make('card-sub-title')
                            ->label('Subtitle'),

                        TextInput::make('card-hotline')
                            ->label('Hotline'),

                        TextInput::make('card-whatsapp')
                            ->label('WhatsApp'),

                        TextInput::make('card-sales-contact')
                            ->label('Sales Contact'),
                    ])
                    ->columns(2),

                Section::make('Contact Form')
                    ->schema([
                        TextInput::make('form-title')
                            ->label('Title'),

                        TextInput::make('form-name-title')
                            ->label('Name Field Title'),

                        TextInput::make('form-name-place-holder')
                            ->label('Name Placeholder'),

                        TextInput::make('form-email-title')
                            ->label('Email Field Title'),

                        TextInput::make('form-email-place-holder')
                            ->label('Email Placeholder'),

                        TextInput::make('form-message-title')
                            ->label('Message Field Title'),

                        TextInput::make('form-message-place-holder')
                            ->label('Message Placeholder'),

                        RichEditor::make('form-note')
                            ->label('Note')
                            ->columnSpanFull(),

                        TextInput::make('form-button-text')
                            ->label('Button Text'),
                    ])
                    ->columns(2),

                Section::make('Social Media')
                    ->schema([
                        RichEditor::make('social-quote')
                            ->label('Quote')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
