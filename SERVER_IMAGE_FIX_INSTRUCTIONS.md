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
