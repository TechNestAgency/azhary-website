const mix = require('laravel-mix');
const path = require('path');

// Performance optimizations
mix.options({
    terser: {
        extractComments: false,
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true
            }
        }
    },
    cssNano: {
        discardComments: {
            removeAll: true
        }
    }
});

// Optimize CSS
mix.css('resources/css/app.css', 'public/css')
   .css('public/website_assets/css/main.css', 'public/website_assets/css/main.min.css')
   .css('public/website_assets/css/optimized.css', 'public/website_assets/css/optimized.min.css');

// Optimize JavaScript
mix.js('resources/js/app.js', 'public/js')
   .js('public/website_assets/js/main.js', 'public/website_assets/js/main.min.js')
   .js('public/website_assets/js/optimized.js', 'public/website_assets/js/optimized.min.js');

// Copy and optimize vendor assets
mix.copy('public/website_assets/vendor', 'public/website_assets/vendor-optimized');

// Image optimization
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.(png|jpe?g|gif|svg)$/i,
                use: [
                    {
                        loader: 'image-webpack-loader',
                        options: {
                            mozjpeg: {
                                progressive: true,
                                quality: 65
                            },
                            optipng: {
                                enabled: false,
                            },
                            pngquant: {
                                quality: [0.65, 0.90],
                                speed: 4
                            },
                            gifsicle: {
                                interlaced: false,
                            },
                            webp: {
                                quality: 75
                            }
                        }
                    }
                ]
            }
        ]
    }
});

// Version files for cache busting
if (mix.inProduction()) {
    mix.version();
}

// Source maps for development
if (!mix.inProduction()) {
    mix.sourceMaps();
} 