<?php
$css_path = '';

if (strpos($_SERVER['REQUEST_URI'], '/public') !== false && strpos($_SERVER['REQUEST_URI'], '/components') === false) {
    $css_path = 'css/styles.css';
} elseif (strpos($_SERVER['REQUEST_URI'], '/public/components') !== false) {
    $css_path = '../css/styles.css';
} elseif (strpos($_SERVER['REQUEST_URI'], '/src/admin') !== false || strpos($_SERVER['REQUEST_URI'], '/src/employee') !== false || strpos($_SERVER['REQUEST_URI'], '/src/client') !== false) {
    $css_path = '../../public/css/styles.css';
}
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