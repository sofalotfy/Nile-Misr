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
                    ->schema([
                        TextInput::make('pilgrim-count')
                            ->label('Pilgrim Count'),

                        TextInput::make('rating')
                            ->label('Rating')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(5),

                        TextInput::make('review-count')
                            ->label('Review Count'),

                        TextInput::make('hotline')
                            ->label('Hot Line')
                            ->numeric(),
                    ])
                    ->columns(3),

                Section::make('Sites')
                    ->schema([
                        Repeater::make('sites')
                            ->label('Sites')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('companies/sites'),

                                TextInput::make('name')
                                    ->label('Name'),

                                TextInput::make('address')
                                    ->label('Address'),

                                TextInput::make('location')
                                    ->label('Location'),

                                TextInput::make('number')
                                    ->label('Number'),
                            ])
                            ->columns(2)
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ]),

                Section::make('Social Media')
                    ->schema([
                        TextInput::make('tiktok')
                            ->label('TikTok'),

                        TextInput::make('twitter')
                            ->label('Twitter / X'),

                        TextInput::make('instgram')
                            ->label('Instagram'),

                        TextInput::make('facebook')
                            ->label('Facebook'),
                    ])
                    ->columns(2),

                Section::make('Contact Information')
                    ->schema([
                        Repeater::make('phones')
                            ->label('Phone Numbers')
                            ->schema([
                                TextInput::make('phone')
                                    ->label('Phone Number'),
                            ])
                            ->addActionLabel('Add Phone Number')
                            ->reorderable()
                            ->collapsible(),

                        Repeater::make('emails')
                            ->label('Email Addresses')
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email(),
                            ])
                            ->addActionLabel('Add Email Address')
                            ->reorderable()
                            ->collapsible(),
                    ])
                    ->columns(2),
            ])->columns(1);
    }
}
