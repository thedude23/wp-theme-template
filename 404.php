<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" alt="Header Image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">

    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="error-404">
							<header>
								<h1><?php _e('Page Not Found', 'tk_custom_theme'); ?></h1>
								<p><?php _e('Unfortunately, the page you tried to reach does not exist.', 'tk_custom_theme'); ?></p>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="error">
							<p><?php _e('How about doing a search?', 'tk_custom_theme'); ?></p>
							<?php get_search_form(); ?>
							<?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => __('Latest Posts', 'tk_custom_theme'), 'number' => 3 ) ); ?>
						</div>
					</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
