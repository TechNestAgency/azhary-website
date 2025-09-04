// Performance Monitor for Azhary Academy
(function() {
  'use strict';
  
  // Performance metrics
  const metrics = {
    startTime: performance.now(),
    loadTime: 0,
    domContentLoaded: 0,
    firstPaint: 0,
    firstContentfulPaint: 0,
    largestContentfulPaint: 0
  };
  
  // Track DOM Content Loaded
  document.addEventListener('DOMContentLoaded', function() {
    metrics.domContentLoaded = performance.now() - metrics.startTime;
    console.log('🚀 DOM Content Loaded:', Math.round(metrics.domContentLoaded), 'ms');
  });
  
  // Track page load
  window.addEventListener('load', function() {
    metrics.loadTime = performance.now() - metrics.startTime;
    console.log('📊 Page Load Time:', Math.round(metrics.loadTime), 'ms');
    
    // Get navigation timing
    const navigation = performance.getEntriesByType('navigation')[0];
    if (navigation) {
      console.log('🌐 Network Info:');
      console.log('  - DNS Lookup:', Math.round(navigation.domainLookupEnd - navigation.domainLookupStart), 'ms');
      console.log('  - TCP Connect:', Math.round(navigation.connectEnd - navigation.connectStart), 'ms');
      console.log('  - Server Response:', Math.round(navigation.responseEnd - navigation.requestStart), 'ms');
      console.log('  - DOM Processing:', Math.round(navigation.domContentLoadedEventEnd - navigation.domContentLoadedEventStart), 'ms');
    }
    
    // Get Core Web Vitals
    const observer = new PerformanceObserver((list) => {
      for (const entry of list.getEntries()) {
        if (entry.name === 'first-paint') {
          metrics.firstPaint = entry.startTime;
          console.log('🎨 First Paint:', Math.round(metrics.firstPaint), 'ms');
        }
        if (entry.name === 'first-contentful-paint') {
          metrics.firstContentfulPaint = entry.startTime;
          console.log('✨ First Contentful Paint:', Math.round(metrics.firstContentfulPaint), 'ms');
        }
      }
    });
    
    observer.observe({ entryTypes: ['paint'] });
    
    // Track Largest Contentful Paint
    const lcpObserver = new PerformanceObserver((list) => {
      const entries = list.getEntries();
      const lastEntry = entries[entries.length - 1];
      metrics.largestContentfulPaint = lastEntry.startTime;
      console.log('📏 Largest Contentful Paint:', Math.round(metrics.largestContentfulPaint), 'ms');
    });
    
    lcpObserver.observe({ entryTypes: ['largest-contentful-paint'] });
    
    // Display performance summary
    setTimeout(() => {
      displayPerformanceSummary();
    }, 1000);
  });
  
  function displayPerformanceSummary() {
    const summary = `
🚀 PERFORMANCE SUMMARY
======================
Page Load Time: ${Math.round(metrics.loadTime)}ms
DOM Content Loaded: ${Math.round(metrics.domContentLoaded)}ms
First Paint: ${Math.round(metrics.firstPaint)}ms
First Contentful Paint: ${Math.round(metrics.firstContentfulPaint)}ms
Largest Contentful Paint: ${Math.round(metrics.largestContentfulPaint)}ms

📊 PERFORMANCE GRADE
===================
${getPerformanceGrade(metrics)}
    `;
    
    console.log(summary);
    
    // Create visual indicator
    createPerformanceIndicator();
  }
  
  function getPerformanceGrade(metrics) {
    const fcp = metrics.firstContentfulPaint;
    const lcp = metrics.largestContentfulPaint;
    
    if (fcp < 1800 && lcp < 2500) {
      return '🟢 EXCELLENT - All metrics in "Good" range';
    } else if (fcp < 3000 && lcp < 4000) {
      return '🟡 GOOD - Some metrics need improvement';
    } else {
      return '🔴 NEEDS IMPROVEMENT - Performance optimization required';
    }
  }
  
  function createPerformanceIndicator() {
    const indicator = document.createElement('div');
    indicator.style.cssText = `
      position: fixed;
      top: 10px;
      right: 10px;
      background: #02256c;
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
      font-family: monospace;
      font-size: 12px;
      z-index: 10000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    `;
    
    const fcp = Math.round(metrics.firstContentfulPaint);
    const lcp = Math.round(metrics.largestContentfulPaint);
    
    indicator.innerHTML = `
      <div>FCP: ${fcp}ms</div>
      <div>LCP: ${lcp}ms</div>
      <div>${fcp < 1800 && lcp < 2500 ? '🟢' : fcp < 3000 && lcp < 4000 ? '🟡' : '🔴'}</div>
    `;
    
    document.body.appendChild(indicator);
    
    // Remove after 5 seconds
    setTimeout(() => {
      if (indicator.parentNode) {
        indicator.parentNode.removeChild(indicator);
      }
    }, 5000);
  }
  
  // Track resource loading
  const resourceObserver = new PerformanceObserver((list) => {
    for (const entry of list.getEntries()) {
      if (entry.initiatorType === 'img' && entry.duration > 1000) {
        console.warn('🐌 Slow image load:', entry.name, Math.round(entry.duration), 'ms');
      }
      if (entry.initiatorType === 'css' && entry.duration > 500) {
        console.warn('🐌 Slow CSS load:', entry.name, Math.round(entry.duration), 'ms');
      }
      if (entry.initiatorType === 'script' && entry.duration > 500) {
        console.warn('🐌 Slow JS load:', entry.name, Math.round(entry.duration), 'ms');
      }
    }
  });
  
  resourceObserver.observe({ entryTypes: ['resource'] });
  
})();
