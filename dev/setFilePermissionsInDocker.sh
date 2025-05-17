#!/bin/sh
set -e
cd /home/wwwroot/filament-system-settings || exit
chown -R www-data:www-data /home/wwwroot/filament-system-settings && \
find /home/wwwroot/filament-system-settings -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-system-settings -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-system-settings/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-system-settings/dev/
