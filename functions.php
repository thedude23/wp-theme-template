<?php
// Including Bootstrap Navwalker file (bootstrap responsive menu)
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Including customizer.php (theme customizer)
require_once get_template_directory() . '/inc/customizer.php';

// Including TGM Plugin Activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

/* ************************************************************************************** */
// Registering scripts and styles
function load_scripts() {
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true ); //  'true' is to enqueue a script before </body> instead of in the <head> portion; alternative is 'false'
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );

    wp_enqueue_script( 'fitvids', get_template_directory() . '/js/fitvids.js', array('jquery'), null, true );

    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' ); // wp_enqueue_style( 'main', get_stylesheet_uri() ); // alternative, which is not working?!
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


/* ************************************************************************************** */
// Main configuration function
function wp_config() {
    // Registering nav menus
    register_nav_menus( 
        array(
            'my_main_menu' => __('Main Menu', 'tk_custom_theme'),
            'footer_menu' => __('Footer Menu', 'tk_custom_theme'),
        )
    );

    // Registering theme supports
    add_theme_support( 'custom-header', array(
        'height' => 225,
        'width'  => 1920,
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array(
        'video', 
        'image',
    ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 110,
        'width' => 200
    ) );
    
    add_theme_support( 'align-wide' ); // Gutenberg wide images
    add_theme_support( 'editor-color-palette', array( // Gutenberg color palette
        array(
            'name' => __('Blood red', 'tk_custom_theme'),
            'slug' => 'blood-red',
            'color' => '#b9121b'
        ),
        array(
            'name' => __('White', 'tk_custom_theme'),
            'slug' => 'white',
            'color' => '#ffffff'
        ),
    ) );
    // add_theme_support( 'disable-custom-colors' ); // Gutenberg disable other colors
    add_theme_support( 'editor-styles' ); // Gutenberg custom css
    add_editor_style( '/css/style-editor.css' );
    add_theme_support( 'wp-block-styles' );

    // Languages
    $textdomain = 'tk_custom_theme';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

}
add_action( 'after_setup_theme', 'wp_config', 0 );


function wp_gutenberg_fonts() {
    wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css?family=Oswald:200,400,900' );
    wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,900' );
}
add_action( 'enqueue_block_editor_assets', 'wp_gutenberg_fonts' );

/* ************************************************************************************** */
// Registering sidebars & widgets
function wp_sidebars() {
    register_sidebar( 
        array(
            'name' => __('Home Page Sidebar', 'tk_custom_theme'),
            'id' => 'sidebar-1',
            'description' => __('This is the home page sidebar. You can add your widgets here.', 'tk_custom_theme'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) 
    );
    register_sidebar( 
        array(
            'name' => __('Blog Sidebar', 'tk_custom_theme'),
            'id' => 'sidebar-2',
            'description' => __('This is the blog page sidebar. You can add your widgets here.', 'tk_custom_theme'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) 
    );

    register_sidebar( 
        array(
            'name' => __('Services 1', 'tk_custom_theme'),
            'id' => 'services-1',
            'description' => __('Service area 1', 'tk_custom_theme'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) 
    );
    register_sidebar( 
        array(
            'name' => __('Services 1', 'tk_custom_theme'),
            'id' => 'services-2',
            'description' => __('Service area 2', 'tk_custom_theme'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) 
    );
    register_sidebar( 
        array(
            'name' => __('Services 1', 'tk_custom_theme'),
            'id' => 'services-3',
            'description' => __('Service area 3', 'tk_custom_theme'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) 
    );

    register_sidebar( 
        array(
            'name' => __('Social Icons Widget', 'tk_custom_theme'),
            'id' => 'social-icons',
            'description' => __('Social Icons Widget', 'tk_custom_theme'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) 
    );
}
add_action( 'widgets_init', 'wp_sidebars' );