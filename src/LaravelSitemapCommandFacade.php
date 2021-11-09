<?php

namespace Retinens\LaravelSitemapCommand;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Retinens\LaravelSitemapCommand\LaravelSitemapCommand
 */
class LaravelSitemapCommandFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-sitemap-command';
    }
}
