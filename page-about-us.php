<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3"><?php get_sidebar( 'home' ); ?></aside>
                        <div class="news col-md-9">
                            <?php 
                            // If there are any posts
                            if ( have_posts(  ) ):
                                // While have posts, show them
                                while( have_posts(  ) ): the_post();
                            ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <p><?php _e('Posted in', 'tk_custom_theme'); ?> <?php echo get_the_date(); ?> <?php _e('by', 'tk_custom_theme'); ?> <?php the_author_posts_link(); ?></p>
                                <p><?php _e('Categories', 'tk_custom_theme'); ?> <?php the_category( ' '); ?></p> <!-- the_category(', ') -->
                                <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
                                <p><?php the_content(); ?></p>
                            </article>
                            <?php
                                endwhile;
                            else:  
                            ?>
                            <?php _e("There's nothing yet to be displayed!", "tk_custom_theme"); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
