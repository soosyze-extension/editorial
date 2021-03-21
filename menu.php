
<ul>
    <?php foreach ($menu as $link): ?>

        <li class="<?php echo $link[ 'link_active' ]; ?>">
        <?php if (empty($link[ 'submenu' ])): ?>
            <a href="<?php echo $link[ 'link' ]; ?>"<?php if ($link[ 'target_link' ]): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>>
                <?php echo if_or($link['icon'], '<i class="' . htmlspecialchars($link['icon']) . ' aria-hidden="true"></i> ') . t($link[ 'title_link' ]); ?>
            </a>
        <?php else: ?>
            <span class="opener"><?php echo t($link[ 'title_link' ]); ?></span>
            <?php echo $link[ 'submenu' ]; ?>
        <?php endif; ?>

        </li>
    <?php endforeach; ?>

</ul>