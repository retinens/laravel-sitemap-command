# A automatic command to refresh the sitemap on the website, using spatie/laravel-sitemap behind the scenes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/retinens/laravel-sitemap-command.svg?style=flat-square)](https://packagist.org/packages/retinens/laravel-sitemap-command)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/retinens/laravel-sitemap-command/run-tests?label=tests)](https://github.com/retinens/laravel-sitemap-command/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/retinens/laravel-sitemap-command/Check%20&%20fix%20styling?label=code%20style)](https://github.com/retinens/laravel-sitemap-command/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/retinens/laravel-sitemap-command.svg?style=flat-square)](https://packagist.org/packages/retinens/laravel-sitemap-command)

A automatic command to refresh the sitemap on the website, using spatie/laravel-sitemap behind the scenes.

The package register and schedule an Artisan command to refresh the sitemap. 

## Installation

You can install the package via composer:

```bash
composer require retinens/laravel-sitemap-command
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="laravel-sitemap-command-config"
```

This is the contents of the published config file:

```php
return [
    'website_url' => env('APP_URL')
];
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

- [WhereIsLucas](https://github.com/WhereIsLucas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
