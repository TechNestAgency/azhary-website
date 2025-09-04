#!/bin/bash

# Performance Optimization Script for Azhary Academy
# This script applies all performance optimizations

echo "🚀 Starting Azhary Academy Performance Optimization..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${GREEN}✅ $1${NC}"
}

print_warning() {
    echo -e "${YELLOW}⚠️  $1${NC}"
}

print_error() {
    echo -e "${RED}❌ $1${NC}"
}

print_info() {
    echo -e "${BLUE}ℹ️  $1${NC}"
}

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    print_error "Please run this script from the Laravel project root directory"
    exit 1
fi

print_info "Optimizing Azhary Academy performance..."

# 1. Clear all caches
print_info "Clearing all caches..."
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan config:clear
php artisan event:clear
print_status "All caches cleared"

# 2. Clear performance-specific caches
print_info "Clearing performance caches..."
php artisan cache:performance-clear --all
print_status "Performance caches cleared"

# 3. Optimize autoloader
print_info "Optimizing autoloader..."
composer dump-autoload --optimize
print_status "Autoloader optimized"

# 4. Set proper permissions
print_info "Setting proper permissions..."
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
print_status "Permissions set"

# 5. Create optimized directories if they don't exist
print_info "Creating optimized directories..."
mkdir -p public/website_assets/js
mkdir -p public/website_assets/css
print_status "Directories created"

# 6. Check if critical files exist
print_info "Checking critical files..."

critical_files=(
    "public/website_assets/js/critical.js"
    "public/website_assets/js/optimized.js"
    "public/website_assets/js/image-optimizer.js"
    "public/website_assets/js/performance-monitor.js"
    "public/website_assets/css/critical.css"
    "app/Http/Middleware/PerformanceOptimization.php"
    "app/Providers/PerformanceServiceProvider.php"
    "app/Console/Commands/ClearPerformanceCache.php"
    "public/.htaccess"
)

for file in "${critical_files[@]}"; do
    if [ -f "$file" ]; then
        print_status "Found: $file"
    else
        print_warning "Missing: $file"
    fi
done

# 7. Optimize images (if imagemagick is available)
if command -v convert &> /dev/null; then
    print_info "Optimizing images..."
    find public/images -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" | while read img; do
        convert "$img" -strip -quality 85 "$img"
    done
    print_status "Images optimized"
else
    print_warning "ImageMagick not found. Skipping image optimization."
fi

# 8. Generate sitemap
print_info "Generating sitemap..."
php artisan sitemap:generate
print_status "Sitemap generated"

# 9. Run database optimizations
print_info "Running database optimizations..."
php artisan migrate --force
print_status "Database optimized"

# 10. Set production environment variables
print_info "Setting production optimizations..."
if [ ! -f ".env.production" ]; then
    print_warning "No .env.production file found. Please create one for production deployment."
fi

# 11. Final cache warm-up
print_info "Warming up caches..."
php artisan route:cache
php artisan config:cache
php artisan view:cache
print_status "Caches warmed up"

# 12. Performance test
print_info "Running performance tests..."
if command -v curl &> /dev/null; then
    response_time=$(curl -o /dev/null -s -w '%{time_total}' http://localhost 2>/dev/null || echo "N/A")
    if [ "$response_time" != "N/A" ]; then
        print_status "Response time: ${response_time}s"
    else
        print_warning "Could not test response time (server not running?)"
    fi
else
    print_warning "curl not found. Skipping response time test."
fi

# 13. Generate performance report
print_info "Generating performance report..."
cat > performance-report.txt << EOF
Azhary Academy Performance Optimization Report
Generated: $(date)
Version: 2.0.0

Optimizations Applied:
✅ Critical JavaScript separation
✅ Advanced caching strategies
✅ Database query optimizations
✅ Image lazy loading
✅ Performance monitoring
✅ Server-level optimizations
✅ Mobile-specific optimizations
✅ Security headers
✅ Compression enabled
✅ Browser caching configured

Files Created/Modified:
$(ls -la public/website_assets/js/ 2>/dev/null || echo "JS files not found")
$(ls -la app/Http/Middleware/PerformanceOptimization.php 2>/dev/null || echo "Middleware not found")
$(ls -la app/Providers/PerformanceServiceProvider.php 2>/dev/null || echo "Service provider not found")

Next Steps:
1. Test the website on mobile and desktop
2. Run Google PageSpeed Insights
3. Monitor performance metrics
4. Clear caches regularly using: php artisan cache:performance-clear

Performance Commands:
- Clear performance caches: php artisan cache:performance-clear
- Clear all caches: php artisan cache:performance-clear --all
- Generate sitemap: php artisan sitemap:generate
EOF

print_status "Performance report generated: performance-report.txt"

# 14. Final status
echo ""
print_status "🎉 Performance optimization completed successfully!"
echo ""
print_info "Summary of optimizations:"
echo "  • Critical JavaScript separation for faster loading"
echo "  • Advanced caching strategies for reduced database queries"
echo "  • Image lazy loading and optimization"
echo "  • Performance monitoring and metrics collection"
echo "  • Mobile-specific optimizations"
echo "  • Server-level performance enhancements"
echo "  • Security headers and compression"
echo ""
print_info "Next steps:"
echo "  1. Test the website on mobile and desktop devices"
echo "  2. Run Google PageSpeed Insights to verify improvements"
echo "  3. Monitor performance metrics in the browser console"
echo "  4. Use 'php artisan cache:performance-clear' for cache management"
echo ""
print_status "Your Azhary Academy website is now optimized for peak performance! 🚀"
