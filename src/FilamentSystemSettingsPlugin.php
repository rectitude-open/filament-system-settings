<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettingsPage;

class FilamentSystemSettingsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-system-settings';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                config('filament-system-settings.system_settings_page', SystemSettingsPage::class),
            ]);
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
