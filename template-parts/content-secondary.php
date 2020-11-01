<article <?php post_class( array('class'=>'secondary') ); ?>>
    <?php // echo get_post_format(); ?>
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large', array('class'=> 'img-fluid') ); ?>
        </a>
    </div>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span> 
            Categories: <span><?php the_category( ' ' ); ?></span> 
            <?php the_tags( 'Tags: <span>', ', ', '</span>' ); ?>
        </p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>