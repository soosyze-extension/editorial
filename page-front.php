
<!-- Main -->
<div id="main">
    <div class="inner">
        <!-- Header -->
        <header id="header">
            <a href="<?php echo $base_path; ?>">
                <?php if ($logo): ?>
                    <img src="<?php echo $logo; ?>" class="logo home" alt="Logo site">
                <?php endif; ?>
                <h1><?php echo $title; ?></h1>
            </a>							
            <ul class="icons">
                <li><a href="#" class="icon fab fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fab fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fab fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                <li><a href="#" class="icon fab fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fab fa-medium"><span class="label">Medium</span></a></li>
            </ul>
        </header>

        <!-- Content -->
        <section>
            <header class="main">
                <h2><?php echo $title_main; ?></h2>
            </header>

            <?php if (!empty($section[ 'messages' ])): ?>
                <?php echo $section[ 'messages' ]; ?>
            <?php endif; ?>
            <?php if (!empty($section[ 'content_header' ])): ?>
                <?php echo $section[ 'content_header' ]; ?>
            <?php endif; ?>
            <?php echo $section[ 'content' ]; ?>
            <?php if (!empty($section[ 'content_footer' ])): ?>
                <?php echo $section[ 'content_footer' ]; ?>
            <?php endif; ?>
        </section>
    </div>
</div>

<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">
        <!-- Menu -->
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <?php echo $section[ 'main_menu' ]; ?>
        </nav>

        <?php if (!empty($section[ 'sidebar' ])): ?>
        <!-- Section -->
        <section>
            <?php echo $section[ 'sidebar' ]; ?>

        </section>
        <?php endif; ?>

        <?php if (!empty($section[ 'footer_first' ])): ?>
        <!-- Section -->
        <section>
            <?php echo $section[ 'footer_first' ]; ?>

        </section>
        <?php endif; ?>

        <?php if (!empty($section[ 'footer_second' ])): ?>
        <!-- Section -->
        <section>
            <?php echo $section[ 'footer_second' ]; ?>

        </section>
        <?php endif; ?>

        <nav id="second_menu">
            <?php echo $section[ 'second_menu' ]; ?>
        </nav>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; Untitled. All rights reserved. <br>
                Demo Images: <a href="https://unsplash.com">Unsplash</a>. <br>
                Design: <a href="https://html5up.net">HTML5 UP</a>.
            </p>
            <?php if (!empty($section[ 'footer' ])): ?>
                <?php echo $section[ 'footer' ]; ?>

            <?php endif; ?>
        </footer>
    </div>
</div>