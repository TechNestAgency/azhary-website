<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class ClearAllCaches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:clear-all {--force : Force clear without confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all application caches (view, route, config, application)';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!$this->option('force')) {
            if (!$this->confirm('This will clear all caches. Are you sure?')) {
                $this->info('Operation cancelled.');
                return 0;
            }
        }

        $this->info('Clearing all caches...');

        try {
            // Clear view cache
            $this->info('Clearing view cache...');
            Artisan::call('view:clear');
            $this->info('✓ View cache cleared');

            // Clear route cache
            $this->info('Clearing route cache...');
            Artisan::call('route:clear');
            $this->info('✓ Route cache cleared');

            // Clear config cache
            $this->info('Clearing config cache...');
            Artisan::call('config:clear');
            $this->info('✓ Config cache cleared');

            // Clear application cache
            $this->info('Clearing application cache...');
            Cache::flush();
            $this->info('✓ Application cache cleared');

            // Clear compiled classes
            $this->info('Clearing compiled classes...');
            Artisan::call('clear-compiled');
            $this->info('✓ Compiled classes cleared');

            // Optimize autoloader
            $this->info('Optimizing autoloader...');
            Artisan::call('optimize:clear');
            $this->info('✓ Autoloader optimized');

            $this->newLine();
            $this->info('🎉 All caches cleared successfully!');
            $this->info('Your application is now running with fresh caches.');

        } catch (\Exception $e) {
            $this->error('❌ Error clearing caches: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
