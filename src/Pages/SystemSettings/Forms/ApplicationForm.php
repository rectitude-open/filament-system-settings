<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ApplicationForm
{
    public static function get()
    {
        return [
            TextInput::make('site_name')
                ->label(__('filament-system-settings::filament-system-settings.application.site_name'))
                ->autofocus()
                ->required(),
            TextInput::make('site_title')
                ->label(__('filament-system-settings::filament-system-settings.application.site_title'))
                ->columnSpanFull(),
            Textarea::make('site_description')
                ->label(__('filament-system-settings::filament-system-settings.application.site_description'))
                ->columnSpanFull(),
            Grid::make()->schema([
                FileUpload::make('site_logo')
                    ->label(__('filament-system-settings::filament-system-settings.application.site_logo'))
                    ->image()
                    ->directory('assets')
                    ->visibility('public')
                    ->moveFiles()
                    ->imageEditor()
                    ->storeFileNamesIn('attachment_file_names'),
                FileUpload::make('site_favicon')
                    ->label(__('filament-system-settings::filament-system-settings.application.site_favicon'))
                    ->image()
                    ->directory('assets')
                    ->visibility('public')
                    ->moveFiles()
                    ->storeFileNamesIn('attachment_file_names')
                    ->acceptedFileTypes(['image/x-icon', 'image/vnd.microsoft.icon']),
            ]),
        ];
    }
}
