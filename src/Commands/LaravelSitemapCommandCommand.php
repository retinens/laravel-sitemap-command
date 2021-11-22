<?php

namespace Retinens\LaravelSitemapCommand\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class LaravelSitemapCommandCommand extends Command
{
    public $signature = 'sitemap:refresh';

    public $description = 'Refreshes the sitemap';

    public function handle(): int
    {
        if (strlen(config('sitemap-command.website_url'))) {
            SitemapGenerator::create(config('sitemap-command.website_url'))->writeToFile(public_path('/sitemap.xml'));
            return self::SUCCESS;
        } else {
            $this->error('Please setup an valid APP_URL in your .env file');

            return self::INVALID;
        }
    }
}
