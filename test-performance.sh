#!/bin/bash

# Performance Test Script for Azhary Academy
echo "🚀 Testing Azhary Academy Performance"
echo "====================================="

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to test page load time
test_page() {
    local url=$1
    local name=$2
    
    echo -e "\n${YELLOW}Testing: $name${NC}"
    echo "URL: $url"
    
    # Use curl to measure load time
    start_time=$(date +%s%N)
    response=$(curl -s -o /dev/null -w "%{http_code}" "$url")
    end_time=$(date +%s%N)
    
    # Calculate load time in milliseconds
    load_time=$(( (end_time - start_time) / 1000000 ))
    
    if [ "$response" = "200" ]; then
        if [ $load_time -lt 1000 ]; then
            echo -e "${GREEN}✅ Load Time: ${load_time}ms (Excellent)${NC}"
        elif [ $load_time -lt 3000 ]; then
            echo -e "${YELLOW}⚠️  Load Time: ${load_time}ms (Good)${NC}"
        else
            echo -e "${RED}❌ Load Time: ${load_time}ms (Needs Improvement)${NC}"
        fi
    else
        echo -e "${RED}❌ Error: HTTP $response${NC}"
    fi
}

# Get the base URL (assuming localhost:8000 for development)
BASE_URL="http://localhost:8000"

echo "Testing different versions of the website..."
echo "Base URL: $BASE_URL"

# Test different versions
test_page "$BASE_URL" "Super Fast (Default)"
test_page "$BASE_URL/ultra-optimized" "Ultra Optimized"
test_page "$BASE_URL/optimized" "Optimized"
test_page "$BASE_URL/original" "Original"

echo -e "\n${GREEN}🎯 Performance Test Complete!${NC}"
echo ""
echo "📊 Expected Results:"
echo "  - Super Fast: < 500ms"
echo "  - Ultra Optimized: < 1000ms"
echo "  - Optimized: < 2000ms"
echo "  - Original: > 3000ms"
echo ""
echo "💡 Tips:"
echo "  1. Open browser DevTools (F12)"
echo "  2. Go to Network tab"
echo "  3. Reload the page"
echo "  4. Check the performance monitor in console"
echo "  5. Use Google PageSpeed Insights: https://pagespeed.web.dev/"
echo ""
echo "🔗 Quick Links:"
echo "  - Super Fast: $BASE_URL"
echo "  - Performance Test: $BASE_URL/test-performance"
echo "  - Google PageSpeed: https://pagespeed.web.dev/"
