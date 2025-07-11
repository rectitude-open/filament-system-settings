<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class SecurityForm
{
    public static function get()
    {
        return [
            TextInput::make('login_attempts_rate_limit')
                ->label(__('filament-system-settings::filament-system-settings.security.login_attempts_rate_limit'))
                ->numeric(),
            TextInput::make('login_attempts_lockout_window')
                ->label(__('filament-system-settings::filament-system-settings.security.login_attempts_lockout_window'))
                ->numeric()
                ->helperText('in minutes'),
            TextInput::make('login_attempts_lockout_attempts')
                ->label(__('filament-system-settings::filament-system-settings.security.login_attempts_lockout_attempts'))
                ->numeric()
                ->helperText('max attempts before lockout'),
            TextInput::make('login_attempts_lockout_duration')
                ->label(__('filament-system-settings::filament-system-settings.security.login_attempts_lockout_duration'))
                ->numeric()
                ->helperText('in minutes'),
            Toggle::make('enable_login_captcha')
                ->label(__('filament-system-settings::filament-system-settings.security.enable_login_captcha'))
                ->inline(false),
        ];
    }
}
