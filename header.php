<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- <html lang="en"> -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php //wp_title(); ?></title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-md-7 col-sm-7 col-6">
                        <?php 
                        // Mobile menu (plugin-way)
                        if (is_active_sidebar( 'social-icons' )) {
                            dynamic_sidebar( 'social-icons' );
                        }
                        ?>
                    </div>
                    <div class="search col-xl-3 col-md-5 col-sm-5 col-6 text-right"><?php get_search_form(); ?></div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="align">
                        <section class="logo col-md-2 col-sm-12 col-12 text-center"><?php the_custom_logo(); ?></section>
                        <nav class="main-menu col-md-10 text-right">
                            <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
                        </nav>

                        <!-- <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <a class="navbar-brand" href="#">Menu</a>
                                    <?php 
                                    // wp_nav_menu( array(
                                    //     'theme_location'    => 'my_main_menu',
                                    //     'depth'             => 1,
                                    //     'container'         => 'div',
                                    //     'container_class'   => 'collapse navbar-collapse',
                                    //     'container_id'      => 'bs-example-navbar-collapse-1',
                                    //     'menu_class'        => 'nav navbar-nav',
                                    //     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    //     'walker'            => new WP_Bootstrap_Navwalker(),
                                    // ) );
                                    ?>
                            </div>
                        </nav> -->
                    </div>
                </div>
            </div>
        </section>
    </header>