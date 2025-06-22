<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms;

use Filament\Forms\Components\TextInput;

class MailForm
{
    public static function get()
    {
        return [
            TextInput::make('mail_from_email')
                ->label(__('filament-system-settings::filament-system-settings.mail.from_email'))
                ->maxLength(255),
            TextInput::make('mail_from_name')
                ->label(__('filament-system-settings::filament-system-settings.mail.from_name'))
                ->maxLength(255),
            TextInput::make('mail_host')
                ->label(__('filament-system-settings::filament-system-settings.mail.host'))
                ->maxLength(255),
            TextInput::make('mail_port')
                ->label(__('filament-system-settings::filament-system-settings.mail.port'))
                ->numeric()
                ->maxLength(5),
            TextInput::make('mail_username')
                ->label(__('filament-system-settings::filament-system-settings.mail.username'))
                ->maxLength(255),
            TextInput::make('mail_password')
                ->label(__('filament-system-settings::filament-system-settings.mail.password'))
                ->password()
                ->maxLength(255),
        ];
    }
}
