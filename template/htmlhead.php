<?php
function draw_htmlhead($arg, $app, $content)
{
    ?>
    <!-- Template Start -->
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">
    <link rel="stylesheet" type="text/css" href="/CSS/nav.css">
    <script src="/JS/jQuery.js"></script>
    <title><?php echo($arg['title']) ?> - GATE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Template End -->
    <?php
}
?>