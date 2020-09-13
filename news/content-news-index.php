
<section>
    <?php if ($news): ?>
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
    <?php else: ?> 

        <div class="col-12">
            <p><?php echo $default; ?></p>
        </div>
    <?php endif; ?>
</section>
<div class="col-12">
    <?php echo $paginate; ?>
</div>
<div class="col-12">
    <a type="application/rss+xml" href="<?php echo $link_rss; ?>" title="Flux RSS"><i class="fa fa-rss-square" aria-hidden="true"></i></a>
</div>