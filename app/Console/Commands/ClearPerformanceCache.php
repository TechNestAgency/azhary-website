<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;

class ClearPerformanceCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:performance-clear {--all : Clear all performance-related caches}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear performance-related caches (homepage data, views, routes)';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Clearing performance caches...');

        // Clear homepage caches
        $this->clearHomepageCaches();

        if ($this->option('all')) {
            // Clear all Laravel caches
            $this->clearAllCaches();
        } else {
            // Clear specific performance caches
            $this->clearPerformanceCaches();
        }

        $this->info('Performance caches cleared successfully!');
        return 0;
    }

    /**
     * Clear homepage-specific caches
     */
    private function clearHomepageCaches()
    {
        $locales = ['en', 'fr'];
        
        foreach ($locales as $locale) {
            Cache::forget("homepage_teachers_{$locale}");
            Cache::forget("homepage_articles_{$locale}");
            Cache::forget("homepage_metadata_{$locale}");
        }

        $this->line('✓ Homepage caches cleared');
    }

    /**
     * Clear performance-related caches
     */
    private function clearPerformanceCaches()
    {
        // Clear view cache
        Artisan::call('view:clear');
        $this->line('✓ View cache cleared');

        // Clear route cache
        Artisan::call('route:clear');
        $this->line('✓ Route cache cleared');

        // Clear config cache
        Artisan::call('config:clear');
        $this->line('✓ Config cache cleared');

        // Clear application cache
        Artisan::call('cache:clear');
        $this->line('✓ Application cache cleared');
    }

    /**
     * Clear all caches
     */
    private function clearAllCaches()
    {
        $this->clearPerformanceCaches();

        // Clear compiled views
        Artisan::call('view:clear');
        $this->line('✓ Compiled views cleared');

        // Clear event cache
        Artisan::call('event:clear');
        $this->line('✓ Event cache cleared');

        // Clear queue cache
        Artisan::call('queue:clear');
        $this->line('✓ Queue cache cleared');

        // Clear session cache
        Artisan::call('session:table');
        $this->line('✓ Session cache cleared');
    }
}
