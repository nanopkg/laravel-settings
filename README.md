# This is my package LaravelSettings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nanopkg/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-settings)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/nanopkg/laravel-settings/run-tests?label=tests)](https://github.com/nanopkg/laravel-settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/nanopkg/laravel-settings/Check%20&%20fix%20styling?label=code%20style)](https://github.com/nanopkg/laravel-settings/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nanopkg/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-settings)

---

## Installation

You can install the package via composer:

```bash
composer require nanopkg/laravel-settings
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Nanopkg\LaravelSettings\LaravelSettingsServiceProvider" --tag="laravel-settings-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Nanopkg\LaravelSettings\LaravelSettingsServiceProvider" --tag="laravel-settings-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php

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

-   [IQBAL HASAN](https://github.com/iqbalhasandev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
