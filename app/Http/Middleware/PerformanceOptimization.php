<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PerformanceOptimization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Add performance headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Add security headers
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // Add caching headers for static assets
        if ($this->isStaticAsset($request)) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
            $response->headers->set('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
        } else {
            // Add caching for HTML pages
            $response->headers->set('Cache-Control', 'public, max-age=3600');
        }

        // Add compression headers
        $response->headers->set('Vary', 'Accept-Encoding');

        // Add preload hints for critical resources
        if ($this->isHtmlResponse($response)) {
            $this->addPreloadHints($response);
        }

        return $response;
    }

    /**
     * Check if the request is for a static asset
     */
    private function isStaticAsset(Request $request): bool
    {
        $path = $request->path();
        
        return preg_match('/\.(css|js|png|jpg|jpeg|gif|svg|webp|ico|woff|woff2|ttf|eot)$/i', $path) ||
               str_starts_with($path, 'website_assets/') ||
               str_starts_with($path, 'vendor/');
    }

    /**
     * Check if the response is HTML
     */
    private function isHtmlResponse(Response $response): bool
    {
        return str_contains($response->headers->get('Content-Type', ''), 'text/html');
    }

    /**
     * Add preload hints for critical resources
     */
    private function addPreloadHints(Response $response): void
    {
        $preloadHints = [
            '<link rel="preload" href="/website_assets/vendor/bootstrap/css/bootstrap.min.css" as="style">',
            '<link rel="preload" href="/website_assets/vendor/bootstrap-icons/bootstrap-icons.css" as="style">',
            '<link rel="preload" href="/website_assets/img/logo-no.png" as="image">',
            '<link rel="preload" href="/hero-back.jpg" as="image">',
            '<link rel="preload" href="/presenting.png" as="image">',
            '<link rel="dns-prefetch" href="//fonts.googleapis.com">',
            '<link rel="dns-prefetch" href="//fonts.gstatic.com">',
            '<link rel="preconnect" href="https://fonts.googleapis.com">',
            '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
            '<link rel="preconnect" href="https://cdn.jsdelivr.net">',
            '<link rel="preconnect" href="https://code.jquery.com">'
        ];

        $content = $response->getContent();
        $headPos = strpos($content, '</head>');
        
        if ($headPos !== false) {
            $preloadHtml = "\n    " . implode("\n    ", $preloadHints) . "\n  ";
            $content = substr_replace($content, $preloadHtml, $headPos, 0);
            $response->setContent($content);
        }
    }
} 