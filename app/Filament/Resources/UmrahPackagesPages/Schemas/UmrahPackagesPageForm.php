<?php

namespace App\Filament\Resources\UmrahPackagesPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UmrahPackagesPageForm
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
                            ->directory('umrah-packages-pages/hero'),

                        TextInput::make('note')
                            ->label('General Note')
                            ->columnSpanFull(),

                                            
                    ])
                    ->columns(2),
                Section::make('Categories')
                    ->schema([
                        TextInput::make('six-days-note')
                            ->label('Note at 6 Days Category Header')
                            ->columnSpanFull(),

                        TextInput::make('footer-six-days-note')
                            ->label('Note at 6 Days Category Footer')
                            ->columnSpanFull(),

                        TextInput::make('eight-days-note')
                            ->label('Note at 8 Days Category Header')
                            ->columnSpanFull(),

                        TextInput::make('footer-eight-days-note')
                            ->label('Note at 6 Days Category Footer')
                            ->columnSpanFull(),

                        TextInput::make('ten-days-note')
                            ->label('Note at 10 Days Categor Headery')
                            ->columnSpanFull(),

                        TextInput::make('footer-ten-days-note')
                            ->label('Note at 6 Days Category Footer')
                            ->columnSpanFull(),
                        
                        TextInput::make('fifteen-days-note')
                            ->label('Note at 15 Days Categor Headery')
                            ->columnSpanFull(),

                        TextInput::make('footer-fifteen-days-note')
                            ->label('Note at 6 Days Category Footer')
                            ->columnSpanFull(),
                    ])->columns(1),
            ])->columns(1);
    }
}