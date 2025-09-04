/**
 * Performance Monitoring Script for Azhary Academy
 * Tracks Core Web Vitals and other performance metrics
 */

(function() {
    'use strict';

    // Performance monitoring configuration
    const config = {
        enableLogging: true,
        enableReporting: false,
        reportEndpoint: '/api/performance',
        sampleRate: 0.1 // Only report 10% of sessions
    };

    // Check if we should monitor this session
    if (Math.random() > config.sampleRate) {
        return;
    }

    // Performance metrics storage
    const metrics = {
        navigation: null,
        paint: {},
        vitals: {},
        resources: []
    };

    // Get navigation timing
    function getNavigationTiming() {
        if (!performance.getEntriesByType) return null;
        
        const navigation = performance.getEntriesByType('navigation')[0];
        if (!navigation) return null;

        return {
            dns: navigation.domainLookupEnd - navigation.domainLookupStart,
            tcp: navigation.connectEnd - navigation.connectStart,
            ssl: navigation.secureConnectionStart > 0 ? navigation.connectEnd - navigation.secureConnectionStart : 0,
            ttfb: navigation.responseStart - navigation.requestStart,
            download: navigation.responseEnd - navigation.responseStart,
            domInteractive: navigation.domInteractive - navigation.navigationStart,
            domContentLoaded: navigation.domContentLoadedEventEnd - navigation.navigationStart,
            loadComplete: navigation.loadEventEnd - navigation.navigationStart
        };
    }

    // Get paint timing
    function getPaintTiming() {
        if (!performance.getEntriesByType) return {};
        
        const paintEntries = performance.getEntriesByType('paint');
        const paint = {};
        
        paintEntries.forEach(entry => {
            paint[entry.name] = entry.startTime;
        });
        
        return paint;
    }

    // Get resource timing
    function getResourceTiming() {
        if (!performance.getEntriesByType) return [];
        
        const resources = performance.getEntriesByType('resource');
        return resources.map(resource => ({
            name: resource.name,
            duration: resource.duration,
            size: resource.transferSize || 0,
            type: resource.initiatorType
        }));
    }

    // Measure Core Web Vitals
    function measureWebVitals() {
        // Largest Contentful Paint (LCP)
        if ('PerformanceObserver' in window) {
            const lcpObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                const lastEntry = entries[entries.length - 1];
                metrics.vitals.lcp = lastEntry.startTime;
                
                if (config.enableLogging) {
                    console.log('LCP:', lastEntry.startTime + 'ms');
                }
            });
            
            try {
                lcpObserver.observe({ entryTypes: ['largest-contentful-paint'] });
            } catch (e) {
                // LCP not supported
            }
        }

        // First Input Delay (FID)
        if ('PerformanceObserver' in window) {
            const fidObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach(entry => {
                    metrics.vitals.fid = entry.processingStart - entry.startTime;
                    
                    if (config.enableLogging) {
                        console.log('FID:', metrics.vitals.fid + 'ms');
                    }
                });
            });
            
            try {
                fidObserver.observe({ entryTypes: ['first-input'] });
            } catch (e) {
                // FID not supported
            }
        }

        // Cumulative Layout Shift (CLS)
        if ('PerformanceObserver' in window) {
            let clsValue = 0;
            const clsObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach(entry => {
                    if (!entry.hadRecentInput) {
                        clsValue += entry.value;
                    }
                });
                metrics.vitals.cls = clsValue;
                
                if (config.enableLogging) {
                    console.log('CLS:', clsValue);
                }
            });
            
            try {
                clsObserver.observe({ entryTypes: ['layout-shift'] });
            } catch (e) {
                // CLS not supported
            }
        }
    }

    // Calculate performance score
    function calculatePerformanceScore() {
        const scores = {
            lcp: 0,
            fid: 0,
            cls: 0,
            overall: 0
        };

        // LCP scoring (0-100)
        if (metrics.vitals.lcp) {
            if (metrics.vitals.lcp <= 2500) scores.lcp = 100;
            else if (metrics.vitals.lcp <= 4000) scores.lcp = 75;
            else if (metrics.vitals.lcp <= 6000) scores.lcp = 50;
            else scores.lcp = 25;
        }

        // FID scoring (0-100)
        if (metrics.vitals.fid) {
            if (metrics.vitals.fid <= 100) scores.fid = 100;
            else if (metrics.vitals.fid <= 300) scores.fid = 75;
            else if (metrics.vitals.fid <= 500) scores.fid = 50;
            else scores.fid = 25;
        }

        // CLS scoring (0-100)
        if (metrics.vitals.cls !== undefined) {
            if (metrics.vitals.cls <= 0.1) scores.cls = 100;
            else if (metrics.vitals.cls <= 0.25) scores.cls = 75;
            else if (metrics.vitals.cls <= 0.4) scores.cls = 50;
            else scores.cls = 25;
        }

        // Overall score (average of the three)
        const validScores = [scores.lcp, scores.fid, scores.cls].filter(score => score > 0);
        scores.overall = validScores.length > 0 ? validScores.reduce((a, b) => a + b, 0) / validScores.length : 0;

        return scores;
    }

    // Report performance data
    function reportPerformance() {
        if (!config.enableReporting) return;

        const performanceData = {
            url: window.location.href,
            userAgent: navigator.userAgent,
            timestamp: Date.now(),
            metrics: metrics,
            scores: calculatePerformanceScore(),
            connection: navigator.connection ? {
                effectiveType: navigator.connection.effectiveType,
                downlink: navigator.connection.downlink,
                rtt: navigator.connection.rtt
            } : null
        };

        // Send to server
        fetch(config.reportEndpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            body: JSON.stringify(performanceData)
        }).catch(error => {
            if (config.enableLogging) {
                console.error('Performance reporting failed:', error);
            }
        });
    }

    // Log performance summary
    function logPerformanceSummary() {
        if (!config.enableLogging) return;

        const scores = calculatePerformanceScore();
        
        console.group('🚀 Azhary Academy Performance Report');
        console.log('📊 Performance Scores:');
        console.log(`  LCP: ${scores.lcp}/100`);
        console.log(`  FID: ${scores.fid}/100`);
        console.log(`  CLS: ${scores.cls}/100`);
        console.log(`  Overall: ${Math.round(scores.overall)}/100`);
        
        if (metrics.navigation) {
            console.log('⏱️ Navigation Timing:');
            console.log(`  TTFB: ${Math.round(metrics.navigation.ttfb)}ms`);
            console.log(`  DOM Interactive: ${Math.round(metrics.navigation.domInteractive)}ms`);
            console.log(`  Load Complete: ${Math.round(metrics.navigation.loadComplete)}ms`);
        }
        
        if (metrics.paint.firstPaint) {
            console.log('🎨 Paint Timing:');
            console.log(`  First Paint: ${Math.round(metrics.paint.firstPaint)}ms`);
            console.log(`  First Contentful Paint: ${Math.round(metrics.paint.firstContentfulPaint)}ms`);
        }
        
        console.groupEnd();
    }

    // Initialize performance monitoring
    function init() {
        // Measure navigation timing
        metrics.navigation = getNavigationTiming();
        
        // Measure paint timing
        metrics.paint = getPaintTiming();
        
        // Measure resource timing
        metrics.resources = getResourceTiming();
        
        // Start measuring Web Vitals
        measureWebVitals();
        
        // Report after page load
        window.addEventListener('load', () => {
            setTimeout(() => {
                logPerformanceSummary();
                reportPerformance();
            }, 2000); // Wait 2 seconds for all metrics to be collected
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
