#!/bin/bash
set -e

/home/wwwroot/filament-system-settings/vendor/bin/pest
/home/wwwroot/filament-system-settings/vendor/bin/pint
/home/wwwroot/filament-system-settings/vendor/bin/phpstan analyse
