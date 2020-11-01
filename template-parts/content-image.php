<article <?php post_class(); ?>>
    <?php // echo get_post_format(); ?>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( array( 275, 275 ) ); ?>     <?php //the_post_thumbnail( 'thumbnail' ); ?>
    </a>
    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?></p>
        <p>Categories: <?php the_category( ' '); ?></p>
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
    <p><?php the_content(); ?></p>
</article>