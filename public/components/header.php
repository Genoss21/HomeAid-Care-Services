<?php
$css_path = (strpos($_SERVER['REQUEST_URI'], '/admin') !== false) ? '../assets/css/styles.css' : './assets/css/styles.css';
?>
<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $css_path; ?>">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-inter" id="home">