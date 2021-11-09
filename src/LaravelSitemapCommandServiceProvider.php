<?php

namespace Retinens\LaravelSitemapCommand;

use Retinens\LaravelSitemapCommand\Commands\LaravelSitemapCommandCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Console\Scheduling\Schedule;

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

    public function packageBooted()
    {
        $this->app->afterResolving(Schedule::class, function (Schedule $schedule) {
            $schedule->command(LaravelSitemapCommandCommand::class)->everyDay();
        });
    }
}
