<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PerformanceServiceProvider extends ServiceProvider
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
        // Share common data with all views
        $this->shareCommonViewData();

        // Optimize database queries
        $this->optimizeDatabaseQueries();

        // Add performance monitoring
        $this->addPerformanceMonitoring();
    }

    /**
     * Share common data with all views to reduce database queries
     */
    private function shareCommonViewData()
    {
        View::composer('*', function ($view) {
            $locale = app()->getLocale();
            
            // Cache common data for 1 hour
            $commonData = Cache::remember("common_data_{$locale}", 3600, function () use ($locale) {
                return [
                    'current_locale' => $locale,
                    'app_name' => config('app.name'),
                    'app_url' => config('app.url'),
                    'current_year' => date('Y'),
                    'is_mobile' => $this->isMobile(),
                    'is_production' => app()->environment('production'),
                ];
            });

            $view->with($commonData);
        });
    }

    /**
     * Optimize database queries
     */
    private function optimizeDatabaseQueries()
    {
        // Enable query logging in development
        if (app()->environment('local')) {
            DB::listen(function ($query) {
                if ($query->time > 100) { // Log slow queries (>100ms)
                    \Log::warning('Slow query detected', [
                        'sql' => $query->sql,
                        'bindings' => $query->bindings,
                        'time' => $query->time
                    ]);
                }
            });
        }

        // Set database connection timeouts
        config([
            'database.connections.mysql.options' => [
                \PDO::ATTR_TIMEOUT => 5,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            ]
        ]);
    }

    /**
     * Add performance monitoring
     */
    private function addPerformanceMonitoring()
    {
        // Add performance headers in production
        if (app()->environment('production')) {
            $this->app->make('Illuminate\Http\Response')->headers->set('X-Powered-By', 'Azhary Academy');
            $this->app->make('Illuminate\Http\Response')->headers->set('X-Performance-Optimized', 'true');
        }
    }

    /**
     * Check if request is from mobile device
     */
    private function isMobile()
    {
        $userAgent = request()->header('User-Agent');
        return preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $userAgent);
    }
}
