<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentSystemSettingsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-system-settings';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
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
