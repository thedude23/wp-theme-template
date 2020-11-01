<?php
// Theme Customizer
function wp_customizer ( $wp_customize ) {
    // Copyright (in footer)
    $wp_customize->add_section( 'sec_copyright', array(
        'title' => 'Copyright',
        'description' => 'Please, type here your copyright'
    ) );

    $wp_customize->add_setting( 'set_copyright', array(
        'type' => 'theme_mod',
        'default' => 'Copyright X - All rights reserved',
        'sanitize_callback' => 'esc_attr' // this is for string; for numbers: absint; for textarea: esc_textarea
    ) );

    $wp_customize->add_control( 'ctrl_copyright', array(
        'label' => 'Copyright Information',
        'description' => 'Please, type here your copyright information',
        'section' => 'sec_copyright', 
        'settings' => 'set_copyright',
        'type' => 'text'
    ) );


    // Map
    $wp_customize->add_section( 'sec_map', array(
        'title' => 'Map',
        'description' => 'Map section'
    ) );
    
    // API Key
    $wp_customize->add_setting( 'set_map_apikey', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_attr' 
    ) );

    $wp_customize->add_control( 'ctrl_map_apikey', array(
        'label' => 'Google Maps API Key Information',
        'description' => 'Get your key <a href="https://console.developers.google.com/apis/credentials?project=wp-course-293210" target="blank">here</a>',
        'section' => 'sec_map',
        'settings' => 'set_map_apikey',
        'type' => 'text'
    ) );

    // Map Address
    $wp_customize->add_setting( 'set_map_address', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'ctrl_map_address', array(
        'label' => 'Type your address here',
        'description' => 'No special characters allowed',
        'section' => 'sec_map',
        'settings' => 'set_map_address',
        'type' => 'textarea'
    ) );
}
add_action( 'customize_register', 'wp_customizer' );
