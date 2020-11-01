<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" alt="Header Image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">

    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <!-- <aside class="sidebar col-md-3"><?php //get_sidebar( 'blog' ); ?></aside> -->
                        <div class="archive col-md-9">
							<?php 
							
							the_archive_title( '<h1 class="archive-title">', '</h1>' );
							the_archive_description();

                            // If there are any posts
                            if ( have_posts(  ) ):
                                // While have posts, show them
                                while( have_posts(  ) ): the_post();
                            ?>
                            <?php // echo get_template_part( 'template-parts/content' ); ?>
                            <?php get_template_part( 'template-parts/content', 'archive' ); ?>
                            <?php
                                endwhile;
                            ?>

                            <!-- Pagination -->
                            <div class="row">
                                <div class="pages col-md-6 text-left">
                                    <?php previous_posts_link( __("<< Newer Posts", 'tk_custom_theme') ); ?>
                                </div>
                                <div class="pages col-md-6 text-right">
                                    <?php next_posts_link( __("Older Posts >>", 'tk_custom_theme') ); ?>
                                </div>
                            </div>

                            <?php
                            else:  
                            ?>
                            <p><?php _e("There's nothing yet to be displayed!", "tk_custom_theme"); ?></p>
                            <?php endif; ?>
                        </div>
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'blog' ); ?></aside>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
