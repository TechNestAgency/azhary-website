// Performance Monitoring Script for Azhary Academy
(function() {
    'use strict';

    // Performance metrics collection
    const performanceMetrics = {
        startTime: performance.now(),
        metrics: {},
        isLowEndDevice: navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2,
        isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    };

    // Collect Core Web Vitals
    function collectCoreWebVitals() {
        // First Contentful Paint (FCP)
        if ('PerformanceObserver' in window) {
            const fcpObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach((entry) => {
                    if (entry.name === 'first-contentful-paint') {
                        performanceMetrics.metrics.fcp = entry.startTime;
                    }
                });
            });
            fcpObserver.observe({ entryTypes: ['paint'] });

            // Largest Contentful Paint (LCP)
            const lcpObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                const lastEntry = entries[entries.length - 1];
                performanceMetrics.metrics.lcp = lastEntry.startTime;
            });
            lcpObserver.observe({ entryTypes: ['largest-contentful-paint'] });

            // First Input Delay (FID)
            const fidObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach((entry) => {
                    performanceMetrics.metrics.fid = entry.processingStart - entry.startTime;
                });
            });
            fidObserver.observe({ entryTypes: ['first-input'] });

            // Cumulative Layout Shift (CLS)
            let clsValue = 0;
            const clsObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach((entry) => {
                    if (!entry.hadRecentInput) {
                        clsValue += entry.value;
                    }
                });
                performanceMetrics.metrics.cls = clsValue;
            });
            clsObserver.observe({ entryTypes: ['layout-shift'] });
        }
    }

    // Monitor resource loading
    function monitorResourceLoading() {
        if ('PerformanceObserver' in window) {
            const resourceObserver = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach((entry) => {
                    if (entry.duration > 1000) { // Log slow resources (>1s)
                        console.warn('Slow resource detected:', {
                            name: entry.name,
                            duration: entry.duration,
                            size: entry.transferSize
                        });
                    }
                });
            });
            resourceObserver.observe({ entryTypes: ['resource'] });
        }
    }

    // Monitor memory usage
    function monitorMemoryUsage() {
        if ('memory' in performance) {
            setInterval(() => {
                const memory = performance.memory;
                performanceMetrics.metrics.memory = {
                    used: memory.usedJSHeapSize,
                    total: memory.totalJSHeapSize,
                    limit: memory.jsHeapSizeLimit
                };

                // Warn if memory usage is high
                if (memory.usedJSHeapSize / memory.jsHeapSizeLimit > 0.8) {
                    console.warn('High memory usage detected:', memory.usedJSHeapSize / 1024 / 1024, 'MB');
                }
            }, 5000);
        }
    }

    // Monitor network conditions
    function monitorNetworkConditions() {
        if ('connection' in navigator) {
            const connection = navigator.connection;
            performanceMetrics.metrics.network = {
                effectiveType: connection.effectiveType,
                downlink: connection.downlink,
                rtt: connection.rtt,
                saveData: connection.saveData
            };

            // Adjust performance based on network conditions
            if (connection.effectiveType === 'slow-2g' || connection.effectiveType === '2g') {
                // Disable animations on slow connections
                document.documentElement.style.setProperty('--animation-duration', '0s');
                document.documentElement.style.setProperty('--transition-duration', '0s');
            }
        }
    }

    // Monitor user interactions
    function monitorUserInteractions() {
        let interactionCount = 0;
        let lastInteractionTime = 0;

        ['click', 'scroll', 'keydown', 'touchstart'].forEach(eventType => {
            document.addEventListener(eventType, () => {
                interactionCount++;
                lastInteractionTime = performance.now();
            }, { passive: true });
        });

        // Track interaction metrics
        setInterval(() => {
            performanceMetrics.metrics.interactions = {
                count: interactionCount,
                lastInteraction: lastInteractionTime
            };
        }, 1000);
    }

    // Optimize performance based on device capabilities
    function optimizeForDevice() {
        if (performanceMetrics.isLowEndDevice) {
            // Reduce animation complexity
            document.documentElement.style.setProperty('--animation-duration', '0.2s');
            document.documentElement.style.setProperty('--transition-duration', '0.2s');
            
            // Disable expensive effects
            const expensiveElements = document.querySelectorAll('.blur, .backdrop-filter, .box-shadow');
            expensiveElements.forEach(el => {
                el.style.filter = 'none';
                el.style.backdropFilter = 'none';
                el.style.boxShadow = 'none';
            });
        }

        if (performanceMetrics.isMobile) {
            // Optimize for mobile
            document.documentElement.style.setProperty('--scroll-behavior', 'auto');
            
            // Reduce image quality on mobile
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.style.imageRendering = 'optimizeSpeed';
            });
        }
    }

    // Send performance data to server (optional)
    function sendPerformanceData() {
        if (performanceMetrics.metrics.fcp && performanceMetrics.metrics.lcp) {
            const data = {
                ...performanceMetrics.metrics,
                userAgent: navigator.userAgent,
                timestamp: Date.now(),
                url: window.location.href
            };

            // Send to analytics endpoint (implement as needed)
            if (window.gtag) {
                gtag('event', 'performance_metrics', {
                    custom_map: {
                        fcp: data.fcp,
                        lcp: data.lcp,
                        fid: data.fid,
                        cls: data.cls
                    }
                });
            }
        }
    }

    // Initialize performance monitoring
    function init() {
        collectCoreWebVitals();
        monitorResourceLoading();
        monitorMemoryUsage();
        monitorNetworkConditions();
        monitorUserInteractions();
        optimizeForDevice();

        // Send data after page load
        window.addEventListener('load', () => {
            setTimeout(sendPerformanceData, 2000);
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose metrics for debugging
    window.performanceMetrics = performanceMetrics;

})();
