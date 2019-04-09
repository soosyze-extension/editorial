<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Editorial by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="keywords" content="<?php echo $keyboard; ?>"/>
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/admin.css" />
        <?php echo $styles; ?>
    </head>
    <body class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">
            <?php echo $block[ 'page' ]; ?>
            <?php if (isset($block[ 'page_bottom' ])): ?>
                <?php echo $block[ 'page_bottom' ]; ?>
            <?php endif; ?>
        </div>
        <!-- Scripts -->
        <script src="<?php echo $base_theme; ?>assets/js/jquery.min.js"></script>
        <?php echo $scripts; ?>
        <script src="<?php echo $base_theme; ?>assets/js/browser.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/breakpoints.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/util.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/main.js"></script>

    </body>
</html>