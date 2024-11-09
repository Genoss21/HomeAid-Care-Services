<?php
$css_path = 'public/css/styles.css'; // Default path from index.php location

// Adjust path based on current URL structure
if (strpos($_SERVER['REQUEST_URI'], '/public/components') !== false) {
    // If the file is within /public/components
    $css_path = '../css/styles.css';
} elseif (strpos($_SERVER['REQUEST_URI'], '/public') !== false) {
    // If the file is within /public but not in /public/components
    $css_path = 'css/styles.css';
} elseif (
    strpos($_SERVER['REQUEST_URI'], '/src/admin') !== false ||
    strpos($_SERVER['REQUEST_URI'], '/src/employee') !== false ||
    strpos($_SERVER['REQUEST_URI'], '/src/client') !== false
) {
    // If the file is within any /src subdirectory
    $css_path = '../../public/css/styles.css';
}

// Debugging output to verify the correct path
echo "<!-- CSS path: $css_path -->";
?>



<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php
    if ($css_path) {
        echo '<link rel="stylesheet" href="' . $css_path . '">';
    }
    ?>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-inter" id="home">