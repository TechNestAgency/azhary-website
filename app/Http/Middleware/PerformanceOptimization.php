<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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

        // Add security headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // Add performance headers for static assets
        if ($this->isStaticAsset($request)) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
            $response->headers->set('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
        } else {
            // Add caching headers for HTML pages
            $response->headers->set('Cache-Control', 'public, max-age=3600');
            $response->headers->set('Vary', 'Accept-Encoding');
        }

        // Enable compression
        if (function_exists('gzencode') && !$this->isAlreadyCompressed($response)) {
            $content = $response->getContent();
            if (strlen($content) > 1024) { // Only compress if content is larger than 1KB
                $response->setContent(gzencode($content, 6));
                $response->headers->set('Content-Encoding', 'gzip');
                $response->headers->set('Content-Length', strlen($response->getContent()));
            }
        }

        return $response;
    }

    /**
     * Check if the request is for a static asset
     *
     * @param Request $request
     * @return bool
     */
    private function isStaticAsset(Request $request)
    {
        $path = $request->path();
        $staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'eot'];
        
        foreach ($staticExtensions as $ext) {
            if (str_ends_with($path, '.' . $ext)) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Check if response is already compressed
     *
     * @param \Illuminate\Http\Response $response
     * @return bool
     */
    private function isAlreadyCompressed($response)
    {
        return $response->headers->has('Content-Encoding');
    }
} 