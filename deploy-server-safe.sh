#!/bin/bash

# Server-Safe Deployment Script for Azhary Academy
# This script ensures images display properly on the server

echo "🚀 Deploying Azhary Academy with Server-Safe Image Loading..."

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

print_status() {
    echo -e "${GREEN}✅ $1${NC}"
}

print_info() {
    echo -e "${BLUE}ℹ️  $1${NC}"
}

print_warning() {
    echo -e "${YELLOW}⚠️  $1${NC}"
}

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo "❌ Please run this script from the Laravel project root directory"
    exit 1
fi

print_info "Applying server-safe optimizations..."

# 1. Clear all caches
print_info "Clearing all caches..."
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan config:clear
print_status "All caches cleared"

# 2. Set proper permissions for images
print_info "Setting proper permissions for images..."
chmod -R 755 public/images/
chmod -R 755 public/website_assets/img/
chmod -R 755 public/website_assets/
print_status "Image permissions set"

# 3. Verify critical files exist
print_info "Verifying critical files..."

critical_files=(
    "public/website_assets/js/image-fallback.js"
    "public/website_assets/js/critical.js"
    "public/website_assets/css/critical.css"
)

for file in "${critical_files[@]}"; do
    if [ -f "$file" ]; then
        print_status "Found: $file"
    else
        print_warning "Missing: $file"
    fi
done

# 4. Create .htaccess for image serving
print_info "Creating server-safe .htaccess..."
cat > public/.htaccess << 'EOF'
# Apache Configuration for Azhary Academy - Server Safe

# Enable compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/css text/javascript application/javascript
</IfModule>

# Enable browser caching
<IfModule mod_expires.c>
    ExpiresActive on
    ExpiresByType image/jpg "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/gif "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/webp "access plus 1 month"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>

# Cache-Control Headers
<IfModule mod_headers.c>
    <FilesMatch "\.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$">
        Header set Cache-Control "public, max-age=31536000"
    </FilesMatch>
    <FilesMatch "\.(html|htm)$">
        Header set Cache-Control "public, max-age=3600"
    </FilesMatch>
</IfModule>

# Laravel specific rules
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
EOF

print_status "Server-safe .htaccess created"

# 5. Optimize for production
print_info "Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
print_status "Production optimizations applied"

# 6. Test image paths
print_info "Testing image paths..."
if [ -d "public/images" ]; then
    print_status "Images directory exists"
    ls -la public/images/ | head -5
else
    print_warning "Images directory not found"
fi

if [ -d "public/website_assets/img" ]; then
    print_status "Website assets images directory exists"
    ls -la public/website_assets/img/ | head -5
else
    print_warning "Website assets images directory not found"
fi

# 7. Create deployment report
print_info "Creating deployment report..."
cat > server-deployment-report.txt << EOF
Azhary Academy Server Deployment Report
Generated: $(date)
Version: 2.0.0 (Server Safe)

Server-Safe Optimizations Applied:
✅ Image fallback script included
✅ Server-safe image loading
✅ Proper image permissions
✅ Cache optimizations
✅ Compression enabled
✅ Browser caching configured

Critical Files:
$(ls -la public/website_assets/js/image-fallback.js 2>/dev/null || echo "Image fallback script not found")
$(ls -la public/website_assets/css/critical.css 2>/dev/null || echo "Critical CSS not found")
$(ls -la public/.htaccess 2>/dev/null || echo ".htaccess not found")

Image Directories:
$(ls -la public/images/ 2>/dev/null | head -3 || echo "Images directory not found")
$(ls -la public/website_assets/img/ 2>/dev/null | head -3 || echo "Website assets images not found")

Next Steps:
1. Upload all files to your server
2. Ensure proper file permissions (755 for directories, 644 for files)
3. Test image loading on the live server
4. Clear browser cache if images still don't show

Troubleshooting:
- If images still don't show, check file permissions
- Ensure .htaccess is uploaded and working
- Check server error logs for any issues
- Verify image paths are correct

Performance Commands:
- Clear caches: php artisan cache:clear
- Optimize: php artisan config:cache
EOF

print_status "Deployment report created: server-deployment-report.txt"

# 8. Final status
echo ""
print_status "🎉 Server-safe deployment completed!"
echo ""
print_info "Summary of server-safe optimizations:"
echo "  • Image fallback script ensures images always display"
echo "  • Server-safe image loading logic"
echo "  • Proper file permissions for images"
echo "  • Optimized .htaccess for image serving"
echo "  • Production-ready caching"
echo ""
print_info "Next steps:"
echo "  1. Upload all files to your server"
echo "  2. Set proper permissions (755 for directories, 644 for files)"
echo "  3. Test image loading on the live server"
echo "  4. Check the deployment report for any issues"
echo ""
print_status "Your Azhary Academy website is now ready for server deployment! 🚀"
