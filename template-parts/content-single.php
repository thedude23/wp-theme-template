<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>
                by <span><?php the_author_posts_link(); ?></span> 
                Categories: <span><?php the_category( ' ' ); ?></span> 
                <?php the_tags( 'Tags: <span>', ', ', '</span>' ); ?>
            </p>
        </div>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </header>
</article>