<?php

    require get_template_directory() . '/inc/customizer.php';
    require get_template_directory() . '/inc/ajax.php';

    // Register Nav Walker class_alias
    require_once('wp-bootstrap-navwalker.php');

    // Theme Support
    function wpb_theme_setup( ){
        add_theme_support('post-thumbnails');

        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));

        //Post Format
        add_theme_support('post-formats', array('aside', 'gallery', 'image'));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    // Excerpt Length Control
    function set_excerpt_length() {
        return 50;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    // Widget Locations
    function wpb_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'   => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets');