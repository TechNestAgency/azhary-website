<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Debug Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }
        .debug-box {
            background: white;
            padding: 20px;
            margin: 10px 0;
            border: 2px solid #333;
            border-radius: 5px;
        }
        .status {
            padding: 10px;
            margin: 5px 0;
            border-radius: 3px;
        }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
        .info { background-color: #d1ecf1; color: #0c5460; }
    </style>
</head>
<body>
    <h1>Content Debug Test</h1>
    
    <div class="debug-box">
        <h2>Test Content</h2>
        <p>If you can see this content, the page is loading properly.</p>
        <p>Current time: <span id="current-time"></span></p>
    </div>
    
    <div class="debug-box">
        <h2>Loading Status</h2>
        <div id="loading-status">
            <div class="status info">Checking page load status...</div>
        </div>
    </div>
    
    <div class="debug-box">
        <h2>Content Visibility Test</h2>
        <div id="visibility-test">
            <div class="status info">Testing content visibility...</div>
        </div>
    </div>
    
    <div class="debug-box">
        <h2>Navigation Test</h2>
        <a href="{{ route('website.index') }}" class="btn">Go to Home Page</a>
        <a href="{{ route('website.test-loading') }}" class="btn">Go to Loading Test</a>
    </div>

    <script>
        // Update current time
        function updateTime() {
            document.getElementById('current-time').textContent = new Date().toLocaleTimeString();
        }
        updateTime();
        setInterval(updateTime, 1000);
        
        // Test loading status
        function checkLoadingStatus() {
            const statusDiv = document.getElementById('loading-status');
            const visibilityDiv = document.getElementById('visibility-test');
            
            // Check if content is visible
            const body = document.body;
            const html = document.documentElement;
            
            const bodyVisible = body && 
                body.style.display !== 'none' && 
                body.style.visibility !== 'hidden' && 
                body.style.opacity !== '0';
            
            const htmlVisible = html && 
                html.style.display !== 'none' && 
                html.style.visibility !== 'hidden' && 
                html.style.opacity !== '0';
            
            // Update loading status
            statusDiv.innerHTML = `
                <div class="status success">✅ Page loaded successfully</div>
                <div class="status success">✅ DOM ready: ${document.readyState}</div>
                <div class="status success">✅ Body visible: ${bodyVisible}</div>
                <div class="status success">✅ HTML visible: ${htmlVisible}</div>
            `;
            
            // Update visibility test
            const allElements = document.querySelectorAll('*');
            let hiddenElements = 0;
            allElements.forEach(el => {
                if (el.style.display === 'none' || 
                    el.style.visibility === 'hidden' || 
                    el.style.opacity === '0') {
                    hiddenElements++;
                }
            });
            
            visibilityDiv.innerHTML = `
                <div class="status ${hiddenElements === 0 ? 'success' : 'error'}">
                    ${hiddenElements === 0 ? '✅' : '❌'} Hidden elements: ${hiddenElements}
                </div>
                <div class="status success">✅ Total elements: ${allElements.length}</div>
            `;
        }
        
        // Run checks
        checkLoadingStatus();
        setTimeout(checkLoadingStatus, 1000);
        setTimeout(checkLoadingStatus, 2000);
        
        // Also check on DOM changes
        const observer = new MutationObserver(checkLoadingStatus);
        observer.observe(document.documentElement, {
            childList: true,
            subtree: true,
            attributes: true
        });
    </script>
</body>
</html> 