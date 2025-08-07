<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate XML sitemap for SEO';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Generating sitemap...');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Add static pages
        $staticPages = [
            '' => '1.0', // Home page
            'courses/quran' => '0.8',
            'courses/arabic-language' => '0.8',
            'courses/islamic-studies' => '0.8',
            'courses/ijazah' => '0.8',
            'teachers' => '0.8',
            'articles' => '0.7',
            'enroll' => '0.9',
            'rates/confirmed' => '0.7',
            'rates/super' => '0.7',
            'rates/ambassador' => '0.7',
        ];

        foreach ($staticPages as $page => $priority) {
            $xml .= $this->generateUrlElement(url($page), $priority, 'weekly');
        }

        // Add articles
        $articles = Article::published()->get();
        foreach ($articles as $article) {
            $xml .= $this->generateUrlElement(
                route('website.articles.show', $article->id),
                '0.6',
                'monthly',
                $article->updated_at
            );
        }

        // Add teachers
        $teachers = Teacher::all();
        foreach ($teachers as $teacher) {
            $xml .= $this->generateUrlElement(
                route('website.teachers.show', $teacher->id),
                '0.7',
                'monthly',
                $teacher->updated_at
            );
        }

        $xml .= '</urlset>';

        // Save sitemap
        File::put(public_path('sitemap.xml'), $xml);

        $this->info('Sitemap generated successfully at: ' . public_path('sitemap.xml'));
        $this->info('Total URLs: ' . (count($staticPages) + $articles->count() + $teachers->count()));

        return 0;
    }

    /**
     * Generate URL element for sitemap
     *
     * @param string $url
     * @param string $priority
     * @param string $changefreq
     * @param string|null $lastmod
     * @return string
     */
    private function generateUrlElement($url, $priority, $changefreq, $lastmod = null)
    {
        $xml = '  <url>' . "\n";
        $xml .= '    <loc>' . htmlspecialchars($url) . '</loc>' . "\n";
        
        if ($lastmod) {
            $xml .= '    <lastmod>' . $lastmod->toISOString() . '</lastmod>' . "\n";
        } else {
            $xml .= '    <lastmod>' . now()->toISOString() . '</lastmod>' . "\n";
        }
        
        $xml .= '    <changefreq>' . $changefreq . '</changefreq>' . "\n";
        $xml .= '    <priority>' . $priority . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";

        return $xml;
    }
} 