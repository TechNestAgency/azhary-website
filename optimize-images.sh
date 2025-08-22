#!/bin/bash

# Image Optimization Script for Azhary Academy
# This script optimizes images for better web performance

echo "🖼️  Starting image optimization for Azhary Academy..."

# Check if required tools are installed
if ! command -v convert &> /dev/null; then
    echo "❌ ImageMagick is not installed. Please install it first:"
    echo "   macOS: brew install imagemagick"
    echo "   Ubuntu: sudo apt-get install imagemagick"
    exit 1
fi

# Create optimized directories if they don't exist
mkdir -p public/website_assets/img/optimized
mkdir -p public/website_assets/img/webp

# Function to optimize image
optimize_image() {
    local input_file="$1"
    local output_dir="$2"
    local filename=$(basename "$input_file")
    local name_without_ext="${filename%.*}"
    
    echo "📸 Optimizing: $filename"
    
    # Create WebP version
    if [[ "$input_file" == *.jpg ]] || [[ "$input_file" == *.jpeg ]] || [[ "$input_file" == *.png ]]; then
        convert "$input_file" -quality 85 -resize 1200x1200\> "$output_dir/${name_without_ext}.webp"
        echo "   ✅ Created WebP: ${name_without_ext}.webp"
    fi
    
    # Create optimized JPEG/PNG
    if [[ "$input_file" == *.jpg ]] || [[ "$input_file" == *.jpeg ]]; then
        convert "$input_file" -quality 85 -resize 1200x1200\> "$output_dir/${name_without_ext}-optimized.jpg"
        echo "   ✅ Created optimized JPEG: ${name_without_ext}-optimized.jpg"
    elif [[ "$input_file" == *.png ]]; then
        convert "$input_file" -quality 85 -resize 1200x1200\> "$output_dir/${name_without_ext}-optimized.png"
        echo "   ✅ Created optimized PNG: ${name_without_ext}-optimized.png"
    fi
}

# Optimize main website images
echo "🎯 Optimizing main website images..."

# Hero and main images
if [ -f "public/presenting.png" ]; then
    optimize_image "public/presenting.png" "public/website_assets/img/webp"
fi

if [ -f "public/man2.png" ]; then
    optimize_image "public/man2.png" "public/website_assets/img/webp"
fi

if [ -f "public/man3.png" ]; then
    optimize_image "public/man3.png" "public/website_assets/img/webp"
fi

if [ -f "public/hero-back.jpg" ]; then
    optimize_image "public/hero-back.jpg" "public/website_assets/img/webp"
fi

# Logo
if [ -f "public/website_assets/img/logo-no.png" ]; then
    optimize_image "public/website_assets/img/logo-no.png" "public/website_assets/img/webp"
fi

# About images
if [ -f "public/about.png" ]; then
    optimize_image "public/about.png" "public/website_assets/img/webp"
fi

# Teacher images
echo "👨‍🏫 Optimizing teacher images..."
for img in public/teachers/*.jpg public/teachers/*.png public/teachers/*.jpeg; do
    if [ -f "$img" ]; then
        optimize_image "$img" "public/website_assets/img/webp"
    fi
done

# Website assets images
echo "🖼️  Optimizing website assets..."
for img in public/website_assets/img/*.jpg public/website_assets/img/*.png public/website_assets/img/*.jpeg; do
    if [ -f "$img" ]; then
        optimize_image "$img" "public/website_assets/img/webp"
    fi
done

# Create responsive image sizes
echo "📱 Creating responsive image sizes..."

create_responsive_images() {
    local input_file="$1"
    local output_dir="$2"
    local filename=$(basename "$input_file")
    local name_without_ext="${filename%.*}"
    
    # Small (mobile)
    convert "$input_file" -quality 85 -resize 480x480\> "$output_dir/${name_without_ext}-small.webp"
    
    # Medium (tablet)
    convert "$input_file" -quality 85 -resize 768x768\> "$output_dir/${name_without_ext}-medium.webp"
    
    # Large (desktop)
    convert "$input_file" -quality 85 -resize 1200x1200\> "$output_dir/${name_without_ext}-large.webp"
    
    echo "   ✅ Created responsive sizes for: $filename"
}

# Create responsive versions for key images
if [ -f "public/presenting.png" ]; then
    create_responsive_images "public/presenting.png" "public/website_assets/img/webp"
fi

if [ -f "public/website_assets/img/logo-no.png" ]; then
    create_responsive_images "public/website_assets/img/logo-no.png" "public/website_assets/img/webp"
fi

# Generate image manifest
echo "📋 Generating image manifest..."
cat > public/website_assets/img/manifest.json << EOF
{
  "images": {
    "logo": {
      "webp": "/website_assets/img/webp/logo-no.webp",
      "png": "/website_assets/img/logo-no.png"
    },
    "hero": {
      "background": "/website_assets/img/webp/hero-back.webp",
      "main": "/website_assets/img/webp/presenting.webp"
    },
    "teachers": {
      "teacher1": "/website_assets/img/webp/teacher1.webp",
      "teacher2": "/website_assets/img/webp/teacher2.webp",
      "teacher3": "/website_assets/img/webp/teacher3.webp"
    }
  },
  "responsive": {
    "logo": {
      "small": "/website_assets/img/webp/logo-no-small.webp",
      "medium": "/website_assets/img/webp/logo-no-medium.webp",
      "large": "/website_assets/img/webp/logo-no-large.webp"
    }
  }
}
EOF

echo "✅ Image optimization completed!"
echo "📊 Summary:"
echo "   - WebP versions created for better compression"
echo "   - Responsive image sizes generated"
echo "   - Image manifest created"
echo ""
echo "🚀 Next steps:"
echo "   1. Update your templates to use .webp images"
echo "   2. Add srcset attributes for responsive images"
echo "   3. Test page speed improvements"
echo ""
echo "💡 Tip: Use the image manifest to easily reference optimized images in your code" 