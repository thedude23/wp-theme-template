<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" alt="Header Image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">

    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="news col-md-9">
                            <?php 
                            // If there are any posts
                            if ( have_posts(  ) ):
                                // While have posts, show them
                                while( have_posts(  ) ): the_post();
                            ?>

                            <!-- Require the file which is at template-parts/content.php (by default) -->
                            <?php // echo get_template_part( 'template-parts/content' ); ?>
                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                            <?php
                                endwhile;
                            ?>

                            <!-- Pagination -->
                            <div class="row">
                                <div class="pages col-md-6 text-left">
                                    <?php previous_posts_link( __("<< Newer Posts", 'tk_custom_theme' ) ); ?>
                                </div>
                                <div class="pages col-md-6 text-right">
                                    <?php next_posts_link( __("Older Posts >>", 'tk_custom_theme' ) ); ?>
                                </div>
                            </div>

                            <?php
                            else:  
                            ?>
                            <p><?php _e("There's nothing yet to be displayed!", "tk_custom_theme"); ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Sidebar -->
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'blog' ); ?></aside>
                    </div>
                </div>
            </section>

            <!-- Map -->
            <section class="map">
                <?php 
                $key = get_theme_mod( 'set_map_apikey' );
                $address = urlencode( get_theme_mod( 'set_map_address' ) );
                ?>
                <!-- <iframe
                    width="100%"
                    height="350"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBR2OE1Q9B3W9lMJdO40QhpETImyeXdm8U
                        &q=Koglerweg+25,+8551,+Austria&zoom=15" allowfullscreen>
                </iframe> -->
                <iframe
                    width="100%"
                    height="350"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>
                        &q=<?php echo $address; ?>&zoom=15" allowfullscreen>
                </iframe>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
