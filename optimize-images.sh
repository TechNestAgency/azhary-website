#!/bin/bash

# Image Optimization Script for Azhary Academy
# This script optimizes images for better performance

echo "Starting image optimization..."

# Install required tools if not present
if ! command -v convert &> /dev/null; then
    echo "ImageMagick not found. Please install it first:"
    echo "brew install imagemagick"
    exit 1
fi

# Create optimized images directory
mkdir -p public/website_assets/img/optimized

# Optimize hero images
echo "Optimizing hero images..."
convert public/hero-back.jpg -quality 85 -strip public/website_assets/img/optimized/hero-back-optimized.jpg
convert public/presenting.png -quality 85 -strip public/website_assets/img/optimized/presenting-optimized.png
convert public/man2.png -quality 85 -strip public/website_assets/img/optimized/man2-optimized.png
convert public/man3.png -quality 85 -strip public/website_assets/img/optimized/man3-optimized.png
convert public/man4.png -quality 85 -strip public/website_assets/img/optimized/man4-optimized.png
convert public/about.png -quality 85 -strip public/website_assets/img/optimized/about-optimized.png

# Optimize logo
echo "Optimizing logo..."
convert public/website_assets/img/logo-no.png -quality 85 -strip public/website_assets/img/optimized/logo-no-optimized.png

# Create WebP versions for modern browsers
echo "Creating WebP versions..."
convert public/hero-back.jpg -quality 85 public/website_assets/img/optimized/hero-back-optimized.webp
convert public/presenting.png -quality 85 public/website_assets/img/optimized/presenting-optimized.webp
convert public/man2.png -quality 85 public/website_assets/img/optimized/man2-optimized.webp
convert public/man3.png -quality 85 public/website_assets/img/optimized/man3-optimized.webp
convert public/man4.png -quality 85 public/website_assets/img/optimized/man4-optimized.webp
convert public/about.png -quality 85 public/website_assets/img/optimized/about-optimized.webp

echo "Image optimization complete!"
echo "Optimized images are in: public/website_assets/img/optimized/"

# Show file size comparison
echo ""
echo "File size comparison:"
echo "Original hero-back.jpg: $(du -h public/hero-back.jpg | cut -f1)"
echo "Optimized hero-back.jpg: $(du -h public/website_assets/img/optimized/hero-back-optimized.jpg | cut -f1)"
echo "WebP hero-back.webp: $(du -h public/website_assets/img/optimized/hero-back-optimized.webp | cut -f1)" 