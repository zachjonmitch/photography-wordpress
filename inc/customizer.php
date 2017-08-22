<?php 
    function wpb_customize_register($wp_customize) {
        // Showcase Section
        $wp_customize->add_section('showcase', array(
            'title' => __('Showcase', 'wpbootstrap'),
            'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
            'priority'    => 130
        ));

        $wp_customize->add_setting('showcase_heading', array(
            'default' => _x('Photography Portfolio', 'wpbootstrap'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_heading', array(
            'label' => __('Heading', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 1
        ));

        $wp_customize->add_setting('showcase_text', array(
            'default' => _x('Just another WordPress site', 'wpbootstrap'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text', array(
            'label' => __('Text', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 1
        ));
    }

    add_action('customize_register', 'wpb_customize_register');