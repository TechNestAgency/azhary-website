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
