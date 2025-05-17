# This is my package filament-system-settings

![Do not use](https://img.shields.io/badge/Under%20development-Don't%20use-red)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rectitude-open/filament-system-settings.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-system-settings)
[![Tests](https://github.com/rectitude-open/filament-system-settings/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rectitude-open/filament-system-settings/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen)](https://phpstan.org/)
[![Total Downloads](https://img.shields.io/packagist/dt/rectitude-open/filament-system-settings.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-system-settings)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

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

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-system-settings-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentSystemSettings = new RectitudeOpen\FilamentSystemSettings();
echo $filamentSystemSettings->echoPhrase('Hello, RectitudeOpen!');
```

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
