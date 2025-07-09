<?php
// File: /wp-content/themes/aetherbloom/inc/customizer.php

/**
 * Aetherbloom Theme Customizer
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aetherbloom_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'aetherbloom_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'aetherbloom_customize_partial_blogdescription',
        ));
    }

    // Add Aetherbloom Theme Options Panel
    $wp_customize->add_panel('aetherbloom_theme_options', array(
        'title'       => esc_html__('Aetherbloom Theme Options', 'aetherbloom'),
        'description' => esc_html__('Customize your Aetherbloom theme settings.', 'aetherbloom'),
        'priority'    => 30,
    ));

    // Header Section
    $wp_customize->add_section('aetherbloom_header_section', array(
        'title'    => esc_html__('Header Settings', 'aetherbloom'),
        'panel'    => 'aetherbloom_theme_options',
        'priority' => 10,
    ));

    // Hero Section
    $wp_customize->add_section('aetherbloom_hero_section', array(
        'title'    => esc_html__('Hero Section', 'aetherbloom'),
        'panel'    => 'aetherbloom_theme_options',
        'priority' => 20,
    ));

    // Colors Section
    $wp_customize->add_section('aetherbloom_colors_section', array(
        'title'    => esc_html__('Theme Colors', 'aetherbloom'),
        'panel'    => 'aetherbloom_theme_options',
        'priority' => 30,
    ));

    // Hero Video Setting
    $wp_customize->add_setting('aetherbloom_hero_video', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('aetherbloom_hero_video', array(
        'label'       => esc_html__('Hero Video URL', 'aetherbloom'),
        'description' => esc_html__('Enter the URL for the hero section background video.', 'aetherbloom'),
        'section'     => 'aetherbloom_hero_section',
        'type'        => 'url',
    ));

    // Primary Color Setting
    $wp_customize->add_setting('aetherbloom_primary_color', array(
        'default'           => '#d84e28',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aetherbloom_primary_color', array(
        'label'   => esc_html__('Primary Color', 'aetherbloom'),
        'section' => 'aetherbloom_colors_section',
    )));

    // Secondary Color Setting
    $wp_customize->add_setting('aetherbloom_secondary_color', array(
        'default'           => '#4caf50',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aetherbloom_secondary_color', array(
        'label'   => esc_html__('Secondary Color', 'aetherbloom'),
        'section' => 'aetherbloom_colors_section',
    )));

    // Contact Information Section
    $wp_customize->add_section('aetherbloom_contact_section', array(
        'title'    => esc_html__('Contact Information', 'aetherbloom'),
        'panel'    => 'aetherbloom_theme_options',
        'priority' => 40,
    ));

    // UK Phone Number
    $wp_customize->add_setting('aetherbloom_uk_phone', array(
        'default'           => '+44 XXXX XXX XXX',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('aetherbloom_uk_phone', array(
        'label'   => esc_html__('UK Phone Number', 'aetherbloom'),
        'section' => 'aetherbloom_contact_section',
        'type'    => 'tel',
    ));

    // SA Phone Number
    $wp_customize->add_setting('aetherbloom_sa_phone', array(
        'default'           => '+27 XX XXX XXXX',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('aetherbloom_sa_phone', array(
        'label'   => esc_html__('South Africa Phone Number', 'aetherbloom'),
        'section' => 'aetherbloom_contact_section',
        'type'    => 'tel',
    ));

    // Email Address
    $wp_customize->add_setting('aetherbloom_email', array(
        'default'           => 'hello@aetherbloom.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('aetherbloom_email', array(
        'label'   => esc_html__('Email Address', 'aetherbloom'),
        'section' => 'aetherbloom_contact_section',
        'type'    => 'email',
    ));
}
add_action('customize_register', 'aetherbloom_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function aetherbloom_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function aetherbloom_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aetherbloom_customize_preview_js() {
    wp_enqueue_script('aetherbloom-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'aetherbloom_customize_preview_js');

/**
 * Output custom colors to the head
 */
function aetherbloom_customizer_css() {
    $primary_color = get_theme_mod('aetherbloom_primary_color', '#d84e28');
    $secondary_color = get_theme_mod('aetherbloom_secondary_color', '#4caf50');
    
    if ($primary_color !== '#d84e28' || $secondary_color !== '#4caf50') {
        ?>
        <style type="text/css">
            :root {
                --primary-color: <?php echo esc_attr($primary_color); ?>;
                --secondary-color: <?php echo esc_attr($secondary_color); ?>;
            }
            
            /* Update primary color usage */
            .get-started-btn,
            .cta-primary,
            .submit-btn {
                background: <?php echo esc_attr($primary_color); ?>;
            }
            
            .nav-link:hover,
            .contact-link,
            .book-call-link {
                color: <?php echo esc_attr($primary_color); ?>;
            }
            
            /* Update secondary color usage */
            .pricing-btn,
            .scheduler-btn {
                background: <?php echo esc_attr($secondary_color); ?>;
            }
            
            .form-guarantee,
            .contact-hours {
                color: <?php echo esc_attr($secondary_color); ?>;
            }
        </style>
        <?php
    }
}
add_action('wp_head', 'aetherbloom_customizer_css');

/**
 * Sanitize hex color
 */
function aetherbloom_sanitize_hex_color($color) {
    if ('' === $color) {
        return '';
    }

    // 3 or 6 hex digits, or the empty string.
    if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color)) {
        return $color;
    }

    return '';
}