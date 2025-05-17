<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentSystemSettings\FilamentSystemSettings
 */
class FilamentSystemSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentSystemSettings\FilamentSystemSettings::class;
    }
}
