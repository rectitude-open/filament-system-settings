<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Commands;

use Illuminate\Console\Command;

class FilamentSystemSettingsCommand extends Command
{
    public $signature = 'filament-system-settings';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
