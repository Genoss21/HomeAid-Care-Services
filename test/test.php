<?php
$css_path = '';

if (strpos($_SERVER['REQUEST_URI'], '/public') !== false && strpos($_SERVER['REQUEST_URI'], '/components') === false) {
    $css_path = 'css/styles.css';
} elseif (strpos($_SERVER['REQUEST_URI'], '/public/components') !== false) {
    $css_path = '../css/styles.css';
} elseif (strpos($_SERVER['REQUEST_URI'], '/src/admin') !== false || strpos($_SERVER['REQUEST_URI'], '/src/employee') !== false || strpos($_SERVER['REQUEST_URI'], '/src/client') !== false) {
    $css_path = '../../public/css/styles.css';
}

if ($css_path) {
    echo '<link rel="stylesheet" href="' . $css_path . '">';
}
?>