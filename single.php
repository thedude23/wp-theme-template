<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <div class="row">
                <?php
                while(have_posts(  )):
                    the_post();
                    get_template_part( 'template-parts/content', 'single' );
                ?>
                    <!-- Pagination -->
                    <!-- <div class="row"> -->
                        <div class="pages col-6 text-left"><?php next_post_link( __('&laquo; %link', 'tk_custom_theme') ); ?></div>
                        <div class="pages col-6 text-right"><?php previous_post_link( __('%link &raquo;', 'tk_custom_theme') ); ?></div>
                    <!-- </div> -->

                <?php
                    // Display a comment form if this post is open to comments
                    if( comments_open() || get_comments_number() ):
                        comments_template();
                        // comments_template( 'filename.php' );
                    endif;
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
