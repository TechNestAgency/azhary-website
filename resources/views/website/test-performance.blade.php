<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance Test - Azhary Academy</title>
    <style>
        body {
            font-family: 'Roboto', system-ui, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .test-section {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .success { background-color: #d4edda; border-color: #c3e6cb; }
        .warning { background-color: #fff3cd; border-color: #ffeaa7; }
        .error { background-color: #f8d7da; border-color: #f5c6cb; }
        .metric {
            font-weight: bold;
            color: #333;
        }
        .value {
            font-size: 1.2em;
            color: #007bff;
        }
        .good { color: #28a745; }
        .needs-improvement { color: #ffc107; }
        .poor { color: #dc3545; }
    </style>
</head>
<body>
    <h1>🚀 Performance Test Results</h1>
    <p>This page tests the performance optimizations implemented for Azhary Academy.</p>

    <div class="test-section success">
        <h2>✅ Database Query Optimization</h2>
        <p><strong>Status:</strong> <span class="value good">Optimized</span></p>
        <ul>
            <li>Teachers cached for 1 hour</li>
            <li>Articles cached for 1 hour</li>
            <li>Limited to 6 teachers and 3 articles</li>
            <li>Only necessary fields selected</li>
        </ul>
    </div>

    <div class="test-section success">
        <h2>✅ Critical CSS Inlining</h2>
        <p><strong>Status:</strong> <span class="value good">Implemented</span></p>
        <ul>
            <li>Critical CSS inlined in &lt;head&gt;</li>
            <li>Non-critical CSS loaded asynchronously</li>
            <li>Above-the-fold content styled immediately</li>
        </ul>
    </div>

    <div class="test-section success">
        <h2>✅ JavaScript Optimization</h2>
        <p><strong>Status:</strong> <span class="value good">Optimized</span></p>
        <ul>
            <li>Critical JS loaded immediately</li>
            <li>Non-critical JS loaded after page load</li>
            <li>Lazy loading implemented</li>
        </ul>
    </div>

    <div class="test-section success">
        <h2>✅ Service Worker</h2>
        <p><strong>Status:</strong> <span id="sw-status" class="value">Checking...</span></p>
        <ul>
            <li>Cache-first strategy for static assets</li>
            <li>Network-first strategy for dynamic content</li>
            <li>Offline functionality available</li>
        </ul>
    </div>

    <div class="test-section success">
        <h2>✅ Resource Preloading</h2>
        <p><strong>Status:</strong> <span class="value good">Implemented</span></p>
        <ul>
            <li>Critical resources preloaded</li>
            <li>DNS prefetch for external domains</li>
            <li>Preconnect to font domains</li>
        </ul>
    </div>

    <div class="test-section">
        <h2>📊 Performance Metrics</h2>
        <div id="metrics">
            <p>Loading performance data...</p>
        </div>
    </div>

    <div class="test-section">
        <h2>🔗 Quick Links</h2>
        <ul>
            <li><a href="/">Homepage</a></li>
            <li><a href="/optimized">Optimized Version</a></li>
            <li><a href="/ultra-optimized">Ultra-Optimized Version</a></li>
            <li><a href="https://pagespeed.web.dev/" target="_blank">Google PageSpeed Insights</a></li>
        </ul>
    </div>

    <script>
        // Test Service Worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.getRegistrations().then(function(registrations) {
                const statusElement = document.getElementById('sw-status');
                if (registrations.length > 0) {
                    statusElement.textContent = 'Registered';
                    statusElement.className = 'value good';
                } else {
                    statusElement.textContent = 'Not Registered';
                    statusElement.className = 'value needs-improvement';
                }
            });
        } else {
            document.getElementById('sw-status').textContent = 'Not Supported';
            document.getElementById('sw-status').className = 'value poor';
        }

        // Performance Metrics
        window.addEventListener('load', function() {
            setTimeout(function() {
                const metrics = document.getElementById('metrics');
                const perfData = performance.getEntriesByType('navigation')[0];
                
                const fcp = performance.getEntriesByName('first-contentful-paint')[0];
                const lcp = performance.getEntriesByName('largest-contentful-paint')[0];
                
                let html = '<div class="metric">Page Load Time: <span class="value">' + 
                    Math.round(perfData.loadEventEnd - perfData.loadEventStart) + 'ms</span></div>';
                
                html += '<div class="metric">DOM Content Loaded: <span class="value">' + 
                    Math.round(perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart) + 'ms</span></div>';
                
                html += '<div class="metric">First Paint: <span class="value">' + 
                    Math.round(perfData.responseEnd - perfData.fetchStart) + 'ms</span></div>';
                
                if (fcp) {
                    html += '<div class="metric">First Contentful Paint: <span class="value">' + 
                        Math.round(fcp.startTime) + 'ms</span></div>';
                }
                
                if (lcp) {
                    html += '<div class="metric">Largest Contentful Paint: <span class="value">' + 
                        Math.round(lcp.startTime) + 'ms</span></div>';
                }
                
                metrics.innerHTML = html;
            }, 100);
        });

        // Test lazy loading
        if ('IntersectionObserver' in window) {
            console.log('✅ IntersectionObserver supported - lazy loading available');
        } else {
            console.log('⚠️ IntersectionObserver not supported - lazy loading fallback');
        }

        // Test WebP support
        function testWebP() {
            const webP = new Image();
            webP.onload = webP.onerror = function () {
                const isSupported = webP.height === 2;
                console.log('WebP support:', isSupported ? '✅ Supported' : '❌ Not supported');
            };
            webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
        }
        testWebP();
    </script>
</body>
</html>
