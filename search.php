<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <div class="row">
                <h2 class="search-result-title"><?php _e("Search results for: ", "tk_custom_theme"); ?> <?php echo get_search_query(); ?></h2>
                
                <?php get_search_form(); ?>

                <?php
                while(have_posts(  )):
                    the_post();
                    get_template_part( 'template-parts/content', 'search' );

                    if( comments_open() || get_comments_number() ):
                        comments_template();
                        // comments_template( 'filename.php' );
                    endif;
                endwhile;

                the_posts_pagination( array(
                    'prev_text' => __('Previous', 'tk_custom_theme'),
                    'next_text' => __('Next', 'tk_custom_theme')
                ) );
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
