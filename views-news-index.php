
<section>
    <?php if ($nodes): ?>
        <div class="posts">
            <?php foreach ($nodes as $key => $node): ?>
                <?php $node[ 'field' ] = unserialize($node[ 'field' ]); ?>

                <article>
                    <h3><a href="<?php echo $node[ 'link_view' ]; ?>"><?php echo $node[ 'title' ]; ?></a></h3>
                    <small><?php echo date('F d, Y', $node[ 'created' ]); ?></small>
                    <p><?php echo $node[ 'field' ][ 'summary' ]; ?></p>
                    <ul class="actions">
                        <li><a href="<?php echo $node[ 'link_view' ]; ?>"" class="button">En savoir plus</a></li>
                    </ul>
                </article>
            <?php endforeach; ?>
        <?php else: ?> 

            <div class="col-12">
                <p><?php echo $default; ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>