# A automatic command to refresh the sitemap on the website, using spatie/laravel-sitemap behind the scenes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/retinens/laravel-sitemap-command.svg?style=flat-square)](https://packagist.org/packages/retinens/laravel-sitemap-command)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/retinens/laravel-sitemap-command/run-tests?label=tests)](https://github.com/retinens/laravel-sitemap-command/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/retinens/laravel-sitemap-command/Check%20&%20fix%20styling?label=code%20style)](https://github.com/retinens/laravel-sitemap-command/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/retinens/laravel-sitemap-command.svg?style=flat-square)](https://packagist.org/packages/retinens/laravel-sitemap-command)

A automatic command to refresh the sitemap on the website, using spatie/laravel-sitemap behind the scenes.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-sitemap-command.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-sitemap-command)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require retinens/laravel-sitemap-command
```

You can publish and run the migrations with:

You can publish the config file with:
```bash
php artisan vendor:publish --tag="laravel-sitemap-command-config"
```

This is the contents of the published config file:

```php
return [
'website_url' => 
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
