
<?php if ($news): ?>

    <div class="row">
        <div class="posts">
            <?php foreach ($news as $new): ?>

                <article>
                    <a class="image" href="<?php echo $new[ 'link_view' ]; ?>">
                        <img src="<?php echo $new[ 'field' ][ 'image' ][ 'field_value' ]; ?>" alt="Illustration <?php echo $new[ 'title' ]; ?>">
                    </a>
                    <h3><a href="<?php echo $new[ 'link_view' ]; ?>"><?php echo $new[ 'title' ]; ?></a></h3>
                    <small><?php echo date('F d, Y', $new[ 'date_created' ]); ?></small>
                    <small> ~<?php echo $new[ 'field' ][ 'reading_time' ][ 'field_value' ] . ' ' . t('minute(s)'); ?></small>
                    <p><?php echo $new[ 'field' ][ 'summary' ][ 'field_display' ]; ?></p>
                    <ul class="actions">
                        <li><a href="<?php echo $new[ 'link_view' ]; ?>" class="button">En savoir plus</a></li>
                    </ul>
                </article>
            <?php endforeach; ?>

        </div>

    </div>
    <?php if ($is_link_more): ?>
        <footer class="major">
            <ul class="buttons">
                <li><a href="<?php echo $link_more; ?>" class="btn btn-primary"><?php echo t('Toutes les actualités'); ?></a></li>
            </ul>
        </footer>
    <?php endif; ?>

<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo t('No articles for the moment'); ?></p>
        </div>
    </div>
<?php endif; ?>