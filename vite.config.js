import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        // Performance optimizations
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true
            }
        },
        // Optimize CSS
        cssMinify: true,
        // Optimize assets
        assetsInlineLimit: 4096,
        // Source maps for development only
        sourcemap: false
    },
    // Server configuration
    server: {
        hmr: {
            host: 'localhost',
        },
    },
});
