<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Company Information')
                    ->description('Basic information and statistics about the company.')
                    ->schema([
                        TextInput::make('pilgrim-count')
                            ->label('Pilgrim Count')
                            ->suffix('pilgrims'),

                        TextInput::make('rating')
                            ->label('Rating')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(5)
                            ->step(0.1)
                            ->suffix('/ 5'),

                        TextInput::make('review-count')
                            ->label('Review Count')
                            ->numeric()
                            ->minValue(0)
                            ->suffix('reviews'),

                        TextInput::make('hotline')
                            ->label('Hotline')
                            ->tel()
                            ->placeholder('+20 100 000 0000'),
                    ])
                    ->columns(4),

                Section::make('Sites')
                    ->description('Add the company branches and locations.')
                    ->schema([
                        Repeater::make('sites')
                            ->label('Company Sites')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Site Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('companies/sites')
                                    ->imageEditor()
                                    ->imagePreviewHeight('150'),

                                TextInput::make('name')
                                    ->label('Site Name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('address')
                                    ->label('Address')
                                    ->required(),

                                TextInput::make('location')
                                    ->label('Location')
                                    ->placeholder('Google Maps URL'),

                                TextInput::make('number')
                                    ->label('Phone Number')
                                    ->tel()
                                    ->placeholder('+20 100 000 0000'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Site')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    $state['name'] ?? 'New Site'
                            )
                            ->columnSpanFull(),
                    ]),

                Section::make('Social Media')
                    ->description('Add links to the company social media profiles.')
                    ->schema([
                        TextInput::make('tiktok')
                            ->label('TikTok')
                            ->url()
                            ->placeholder('https://www.tiktok.com/...'),

                        TextInput::make('twitter')
                            ->label('Twitter / X')
                            ->url()
                            ->placeholder('https://x.com/...'),

                        TextInput::make('instgram')
                            ->label('Instagram')
                            ->url()
                            ->placeholder('https://www.instagram.com/...'),

                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->url()
                            ->placeholder('https://www.facebook.com/...'),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->description('Phone numbers and email addresses customers can use to contact the company.')
                    ->schema([
                        Repeater::make('phones')
                            ->label('Phone Numbers')
                            ->schema([
                                TextInput::make('phone')
                                    ->label('Phone Number')
                                    ->tel()
                                    ->required()
                                    ->placeholder('+20 100 000 0000'),
                            ])
                            ->addActionLabel('Add Phone Number')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    $state['phone'] ?? 'New Phone Number'
                            ),

                        Repeater::make('emails')
                            ->label('Email Addresses')
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()
                                    ->placeholder('info@example.com'),
                            ])
                            ->addActionLabel('Add Email Address')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    $state['email'] ?? 'New Email Address'
                            ),
                    ])
                    ->columns(2),
            ])->columns(1);
    }
}
