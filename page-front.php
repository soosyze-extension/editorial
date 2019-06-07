
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

            <?php if (!empty($block[ 'messages' ])): ?>
                <?php echo $block[ 'messages' ]; ?>
            <?php endif; ?>
            <?php echo $block[ 'content' ]; ?>
        </section>
    </div>
</div>

<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">
        <!-- Menu -->
        <?php echo $block[ 'main_menu' ]; ?>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Get in touch</h2>
            </header>
            <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, 
                ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. 
                Sed nulla amet lorem feugiat tempus aliquam.
            </p>
            <ul class="contact">
                <li class="fa fa-envelope"><a href="#">information@untitled.tld</a></li>
                <li class="fa fa-phone">(000) 000-0000</li>
                <li class="fa fa-home">
                    1234 Somewhere Road #8254<br/>
                    Nashville, TN 00000-0000
                </li>
            </ul>
        </section>

        <?php echo $block[ 'second_menu' ]; ?>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; Untitled. All rights reserved.<br>
                Demo Images: <a href="https://unsplash.com">Unsplash</a>.<br>
                Design: <a href="https://html5up.net">HTML5 UP</a>.<br>
                Power by <a href="https://soosyze.com">SoosyzeCMS</a>.
            </p>
        </footer>
    </div>
</div>