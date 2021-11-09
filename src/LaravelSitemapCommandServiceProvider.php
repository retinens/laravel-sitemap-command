<?php

namespace Retinens\LaravelSitemapCommand;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Retinens\LaravelSitemapCommand\Commands\LaravelSitemapCommandCommand;

class LaravelSitemapCommandServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sitemap-command')
            ->hasConfigFile()
            ->hasCommand(LaravelSitemapCommandCommand::class);
    }
}
