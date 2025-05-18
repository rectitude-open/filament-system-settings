# Filament System Settings

![Do not use](https://img.shields.io/badge/Under%20development-Don't%20use-red)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rectitude-open/filament-system-settings.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-system-settings)
[![Tests](https://github.com/rectitude-open/filament-system-settings/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rectitude-open/filament-system-settings/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen)](https://phpstan.org/)
[![Total Downloads](https://img.shields.io/packagist/dt/rectitude-open/filament-system-settings.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-system-settings)

Filament System Settings is a user-friendly plugin that provides a comprehensive system settings page for your Filament admin panel, It includes several preset panels for managing application configuration, mail settings, security options, and more. 

The package is built on top of the [Filament Spatie Laravel Settings Plugin](https://github.com/filamentphp/spatie-laravel-settings-plugin) package.

This package is also a standalone part of a CMS project: [FilaPress](https://github.com/rectitude-open/filapress).


## Installation

You can install the package via composer:

```bash
composer require rectitude-open/filament-system-settings
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-system-settings-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-system-settings-config"
```

This is the contents of the published config file:

```php
return [
    'system_settings' => RectitudeOpen\FilamentSystemSettings\Settings\SystemSettings::class,
    'system_settings_page' => RectitudeOpen\FilamentSystemSettings\Pages\SystemSettingsPage::class,
];
```

## Usage

The package provides a System Settings Page that allows you to manage system settings in your Filament admin panel. 

To use the page provided by this package, you need to register it in your Panel Provider first.

```php
namespace App\Providers\Filament;

use RectitudeOpen\FilamentSystemSettings\FilamentSystemSettingsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->plugins([
                FilamentSystemSettingsPlugin::make()
            ]);
    }
}    
```

For more advanced setting features, please refer to the documentation of the [Laravel Settings](https://github.com/spatie/laravel-settings) package.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rectitude Open](https://github.com/rectitude-open)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
