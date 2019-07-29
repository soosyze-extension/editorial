<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <?php if ($favicon): ?>
            <link rel="shortcut icon" type="image/png" href="<?php echo $favicon; ?>"/>
        <?php endif; ?>
        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="keywords" content="<?php echo $keyboard; ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/admin.css" />
        <?php echo $styles; ?>
    </head>
    <body class="is-preload">
        <!-- Wrapper -->
        <div id="wrapper">
            <?php echo $section[ 'page' ]; ?>
            <?php if (isset($section[ 'page_bottom' ])): ?>
                <?php echo $section[ 'page_bottom' ]; ?>
            <?php endif; ?>
        </div>
        <!-- Scripts -->
        <script src="<?php echo $base_theme; ?>assets/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        <script src="<?php echo $base_theme; ?>assets/js/browser.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/breakpoints.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/util.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/main.js"></script>
        <?php echo $scripts; ?>
    </body>
</html>