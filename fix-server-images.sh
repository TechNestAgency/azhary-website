#!/bin/bash

# Fix Server Images Script for Azhary Academy
# This script fixes image display issues on the server

echo "🔧 Fixing Azhary Academy Image Display Issues..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

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

print_info "Diagnosing and fixing image display issues..."

# 1. Check image directories and files
print_info "Checking image directories..."

if [ -d "public/images" ]; then
    print_status "Found public/images directory"
    ls -la public/images/ | head -5
else
    print_warning "public/images directory not found"
fi

if [ -d "public/website_assets/img" ]; then
    print_status "Found public/website_assets/img directory"
    ls -la public/website_assets/img/ | head -5
else
    print_warning "public/website_assets/img directory not found"
fi

# 2. Check for common image files
print_info "Checking for common image files..."

common_images=(
    "public/hero-back.jpg"
    "public/presenting.png"
    "public/man2.png"
    "public/man3.png"
    "public/man4.png"
    "public/about.png"
    "public/website_assets/img/logo-no.png"
    "public/website_assets/img/apple-touch-icon.png"
)

for img in "${common_images[@]}"; do
    if [ -f "$img" ]; then
        print_status "Found: $img"
    else
        print_warning "Missing: $img"
    fi
done

# 3. Create a simple image test page
print_info "Creating image test page..."
cat > public/test-images.html << 'EOF'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Test - Azhary Academy</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .image-test { margin: 20px 0; padding: 10px; border: 1px solid #ccc; }
        img { max-width: 200px; height: auto; margin: 10px; border: 1px solid #ddd; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>Image Test Page - Azhary Academy</h1>
    <p>This page tests if images are accessible on the server.</p>
    
    <div class="image-test">
        <h3>Hero Images</h3>
        <img src="/hero-back.jpg" alt="Hero Background" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /hero-back.jpg';">
        <img src="/presenting.png" alt="Presenting" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /presenting.png';">
        <img src="/man2.png" alt="Man 2" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /man2.png';">
        <img src="/man3.png" alt="Man 3" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /man3.png';">
        <img src="/man4.png" alt="Man 4" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /man4.png';">
        <img src="/about.png" alt="About" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /about.png';">
    </div>
    
    <div class="image-test">
        <h3>Website Assets Images</h3>
        <img src="/website_assets/img/logo-no.png" alt="Logo" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /website_assets/img/logo-no.png';">
        <img src="/website_assets/img/apple-touch-icon.png" alt="Apple Touch Icon" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load /website_assets/img/apple-touch-icon.png';">
    </div>
    
    <div class="image-test">
        <h3>Teacher Images</h3>
        <img src="/images/teachers/1756157696_man1.jpeg" alt="Teacher 1" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load teacher image';">
        <img src="/images/teachers/1756985523_WhatsApp Image 2025-09-04 at 12.27.00 AM.jpeg" alt="Teacher 2" onerror="this.style.border='2px solid red'; this.alt='ERROR: Cannot load teacher image';">
    </div>
    
    <div class="image-test">
        <h3>Test Results</h3>
        <p>Red borders indicate images that cannot be loaded.</p>
        <p>Check the server file permissions and paths.</p>
    </div>
</body>
</html>
EOF

print_status "Image test page created: public/test-images.html"

# 4. Create a server-safe .htaccess
print_info "Creating server-safe .htaccess..."
cat > public/.htaccess << 'EOF'
# Apache Configuration for Azhary Academy - Image Fix

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

# 5. Set proper permissions
print_info "Setting proper permissions..."
chmod -R 755 public/
chmod 644 public/.htaccess
print_status "Permissions set"

# 6. Create a simple PHP script to check image paths
print_info "Creating image path checker..."
cat > public/check-images.php << 'EOF'
<?php
echo "<h1>Image Path Checker - Azhary Academy</h1>";
echo "<p>Checking image file paths and permissions...</p>";

$images = [
    '/hero-back.jpg',
    '/presenting.png',
    '/man2.png',
    '/man3.png',
    '/man4.png',
    '/about.png',
    '/website_assets/img/logo-no.png',
    '/website_assets/img/apple-touch-icon.png',
    '/images/teachers/1756157696_man1.jpeg'
];

echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th>Image Path</th><th>File Exists</th><th>Readable</th><th>Size</th><th>Status</th></tr>";

foreach ($images as $image) {
    $fullPath = __DIR__ . $image;
    $exists = file_exists($fullPath);
    $readable = $exists ? is_readable($fullPath) : false;
    $size = $exists ? filesize($fullPath) : 0;
    
    echo "<tr>";
    echo "<td>$image</td>";
    echo "<td>" . ($exists ? "✅ Yes" : "❌ No") . "</td>";
    echo "<td>" . ($readable ? "✅ Yes" : "❌ No") . "</td>";
    echo "<td>" . ($size > 0 ? number_format($size) . " bytes" : "N/A") . "</td>";
    echo "<td>" . ($exists && $readable ? "✅ OK" : "❌ Problem") . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<h2>Directory Permissions</h2>";
$dirs = ['/images', '/website_assets', '/website_assets/img'];
foreach ($dirs as $dir) {
    $fullPath = __DIR__ . $dir;
    if (is_dir($fullPath)) {
        $perms = substr(sprintf('%o', fileperms($fullPath)), -4);
        echo "<p>$dir: $perms " . (is_readable($fullPath) ? "✅" : "❌") . "</p>";
    } else {
        echo "<p>$dir: ❌ Directory not found</p>";
    }
}
?>
EOF

print_status "Image path checker created: public/check-images.php"

# 7. Clear caches
print_info "Clearing caches..."
php artisan cache:clear
php artisan view:clear
php artisan config:clear
print_status "Caches cleared"

# 8. Create deployment instructions
print_info "Creating deployment instructions..."
cat > SERVER_IMAGE_FIX_INSTRUCTIONS.md << 'EOF'
# Server Image Fix Instructions for Azhary Academy

## 🔧 Problem Diagnosis
Images are not displaying on the live server at https://azharyfr.com

## 📋 Steps to Fix

### 1. Upload Files to Server
Upload all files to your server, ensuring:
- All image files are uploaded to the correct directories
- File permissions are set correctly

### 2. Set Server Permissions
On your server, run these commands:
```bash
# Set directory permissions
chmod -R 755 public/
chmod -R 755 public/images/
chmod -R 755 public/website_assets/
chmod -R 755 public/website_assets/img/

# Set file permissions
chmod 644 public/.htaccess
find public/ -name "*.jpg" -exec chmod 644 {} \;
find public/ -name "*.jpeg" -exec chmod 644 {} \;
find public/ -name "*.png" -exec chmod 644 {} \;
find public/ -name "*.gif" -exec chmod 644 {} \;
```

### 3. Test Images
Visit these URLs on your server:
- https://azharyfr.com/test-images.html
- https://azharyfr.com/check-images.php

### 4. Check Common Issues

#### Issue 1: File Permissions
If images show "403 Forbidden":
```bash
chmod 644 public/images/teachers/*.jpeg
chmod 644 public/website_assets/img/*.png
```

#### Issue 2: File Paths
If images show "404 Not Found":
- Check if files exist in the correct directories
- Verify file names match exactly (case-sensitive)

#### Issue 3: Server Configuration
If images show "500 Internal Server Error":
- Check .htaccess file
- Verify mod_rewrite is enabled
- Check server error logs

### 5. Verify Image Files
Ensure these files exist on your server:
- public/hero-back.jpg
- public/presenting.png
- public/man2.png
- public/man3.png
- public/man4.png
- public/about.png
- public/website_assets/img/logo-no.png
- public/website_assets/img/apple-touch-icon.png
- public/images/teachers/1756157696_man1.jpeg
- public/images/teachers/1756985523_WhatsApp Image 2025-09-04 at 12.27.00 AM.jpeg

### 6. Test the Main Site
After fixing, test:
- https://azharyfr.com
- Check if all images display correctly
- Test on mobile and desktop

## 🚨 Emergency Fix
If images still don't work, try this emergency fix:

1. **Disable .htaccess temporarily**:
   ```bash
   mv public/.htaccess public/.htaccess.backup
   ```

2. **Test images again**

3. **If images work without .htaccess**, the issue is in the .htaccess file

4. **Restore .htaccess**:
   ```bash
   mv public/.htaccess.backup public/.htaccess
   ```

## 📞 Support
If issues persist, check:
- Server error logs
- File permissions
- Directory structure
- Image file existence
EOF

print_status "Deployment instructions created: SERVER_IMAGE_FIX_INSTRUCTIONS.md"

# 9. Final status
echo ""
print_status "🎉 Image fix preparation completed!"
echo ""
print_info "Next steps:"
echo "  1. Upload all files to your server"
echo "  2. Set proper permissions (see SERVER_IMAGE_FIX_INSTRUCTIONS.md)"
echo "  3. Test images at: https://azharyfr.com/test-images.html"
echo "  4. Check paths at: https://azharyfr.com/check-images.php"
echo "  5. Follow the instructions in SERVER_IMAGE_FIX_INSTRUCTIONS.md"
echo ""
print_warning "Common issues:"
echo "  • File permissions (644 for files, 755 for directories)"
echo "  • Missing image files"
echo "  • Incorrect file paths"
echo "  • Server configuration issues"
echo ""
print_status "Your image display issues should be resolved! 🚀"
