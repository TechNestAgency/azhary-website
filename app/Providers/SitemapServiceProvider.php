<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\GenerateSitemap;

class SitemapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateSitemap::class,
            ]);
        }
    }
} 