<?php
// File: /wp-content/themes/aetherbloom/functions.php

/**
 * Aetherbloom Theme Functions - Phase 3 Complete Integration
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Set up theme defaults and register support for various WordPress features
 */
function aetherbloom_setup() {
    // Make theme available for translation
    load_theme_textdomain('aetherbloom', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add theme support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'aetherbloom'),
        'footer'  => esc_html__('Footer Menu', 'aetherbloom'),
    ));
}
add_action('after_setup_theme', 'aetherbloom_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet
 */
function aetherbloom_content_width() {
    $GLOBALS['content_width'] = apply_filters('aetherbloom_content_width', 1200);
}
add_action('after_setup_theme', 'aetherbloom_content_width', 0);

/**
 * Enqueue scripts and styles - COMPLETE INTEGRATION
 */
function aetherbloom_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // Main theme stylesheet
    wp_enqueue_style('aetherbloom-style', get_stylesheet_uri(), array(), $theme_version);

    // Component CSS files - PROPERLY ORDERED
    wp_enqueue_style(
        'aetherbloom-navbar',
        get_template_directory_uri() . '/css/navbar.css',
        array('aetherbloom-style'),
        $theme_version
    );

    wp_enqueue_style(
        'aetherbloom-hero',
        get_template_directory_uri() . '/css/hero.css',
        array('aetherbloom-style'),
        $theme_version
    );

    wp_enqueue_style(
        'aetherbloom-why-aetherbloom',
        get_template_directory_uri() . '/css/why-aetherbloom.css',
        array('aetherbloom-style'),
        $theme_version
    );

    wp_enqueue_style(
        'aetherbloom-services',
        get_template_directory_uri() . '/css/services.css',
        array('aetherbloom-style'),
        $theme_version
    );

    wp_enqueue_style(
        'aetherbloom-pricing',
        get_template_directory_uri() . '/css/pricing-calculator.css',
        array('aetherbloom-style'),
        $theme_version
    );

    wp_enqueue_style(
        'aetherbloom-cta',
        get_template_directory_uri() . '/css/cta.css',
        array('aetherbloom-style'),
        $theme_version
    );

    wp_enqueue_style(
        'aetherbloom-footer',
        get_template_directory_uri() . '/css/footer.css',
        array('aetherbloom-style'),
        $theme_version
    );

    // JAVASCRIPT FILES - COMPLETE INTEGRATION WITH PROPER DEPENDENCIES
    
    // Main JavaScript - loads first
    wp_enqueue_script(
        'aetherbloom-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        $theme_version,
        true
    );

    // Component JavaScript files - all depend on main.js
    wp_enqueue_script(
        'aetherbloom-navbar',
        get_template_directory_uri() . '/js/navbar.js',
        array('aetherbloom-main'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'aetherbloom-hero',
        get_template_directory_uri() . '/js/hero.js',
        array('aetherbloom-main'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'aetherbloom-why-aetherbloom',
        get_template_directory_uri() . '/js/why-aetherbloom.js',
        array('aetherbloom-main'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'aetherbloom-services',
        get_template_directory_uri() . '/js/services.js',
        array('aetherbloom-main'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'aetherbloom-pricing',
        get_template_directory_uri() . '/js/pricing-calculator.js',
        array('aetherbloom-main'),
        $theme_version,
        true
    );

    wp_enqueue_script(
        'aetherbloom-cta',
        get_template_directory_uri() . '/js/cta.js',
        array('aetherbloom-main'),
        $theme_version,
        true
    );

    // Localize script for AJAX
    wp_localize_script('aetherbloom-main', 'aetherbloom_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('aetherbloom_nonce'),
    ));

    // Add conditional script for comment reply
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'aetherbloom_scripts');

/**
 * AJAX handler for contact form
 */
function aetherbloom_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'aetherbloom_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize and validate input
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $email_message = "Name: {$name}\n";
    $email_message .= "Email: {$email}\n";
    if (!empty($company)) {
        $email_message .= "Company: {$company}\n";
    }
    $email_message .= "Message:\n{$message}";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Send email
    if (wp_mail($to, $subject, $email_message, $headers)) {
        wp_send_json_success('Thank you for your message. We\'ll get back to you soon!');
    } else {
        wp_send_json_error('Sorry, there was an error sending your message. Please try again.');
    }
}
add_action('wp_ajax_aetherbloom_contact_form', 'aetherbloom_handle_contact_form');
add_action('wp_ajax_nopriv_aetherbloom_contact_form', 'aetherbloom_handle_contact_form');

/**
 * AJAX handler for newsletter signup
 */
function aetherbloom_handle_newsletter_signup() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'aetherbloom_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize and validate input
    $email = sanitize_email($_POST['email']);

    // Basic validation
    if (empty($email)) {
        wp_send_json_error('Please enter your email address.');
        return;
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }

    // Here you would integrate with your email marketing service
    // For now, we'll just send a notification email
    $to = get_option('admin_email');
    $subject = 'New Newsletter Signup';
    $message = "New newsletter signup: {$email}";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if (wp_mail($to, $subject, $message, $headers)) {
        wp_send_json_success('Thank you for subscribing to our newsletter!');
    } else {
        wp_send_json_error('Sorry, there was an error processing your subscription. Please try again.');
    }
}
add_action('wp_ajax_aetherbloom_newsletter_signup', 'aetherbloom_handle_newsletter_signup');
add_action('wp_ajax_nopriv_aetherbloom_newsletter_signup', 'aetherbloom_handle_newsletter_signup');

/**
 * Customize theme options
 */
function aetherbloom_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('aetherbloom_hero', array(
        'title'    => __('Hero Section', 'aetherbloom'),
        'priority' => 120,
    ));

    // Hero title line 1
    $wp_customize->add_setting('hero_title_line1', array(
        'default'           => 'Transform Your Business With',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title_line1', array(
        'label'   => __('Hero Title Line 1', 'aetherbloom'),
        'section' => 'aetherbloom_hero',
        'type'    => 'text',
    ));

    // Hero animated texts
    $wp_customize->add_setting('hero_animated_texts', array(
        'default'           => 'Transformed.,Cost-Effective.,Scalable.,Agile.,Optimized.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_animated_texts', array(
        'label'       => __('Hero Animated Texts (comma-separated)', 'aetherbloom'),
        'section'     => 'aetherbloom_hero',
        'type'        => 'text',
        'description' => __('Enter comma-separated texts that will cycle in the hero title', 'aetherbloom'),
    ));

    // Hero description
    $wp_customize->add_setting('hero_description', array(
        'default'           => 'Scale your operations with expertly-sourced South African professionals trained to UK standards. Cut costs by 40%+ while scaling with confidence.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_description', array(
        'label'   => __('Hero Description', 'aetherbloom'),
        'section' => 'aetherbloom_hero',
        'type'    => 'textarea',
    ));

    // Social Links Section
    $wp_customize->add_section('aetherbloom_social', array(
        'title'    => __('Social Links', 'aetherbloom'),
        'priority' => 130,
    ));

    // Social media links
    $social_networks = array('facebook', 'twitter', 'linkedin', 'instagram');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting("social_{$network}", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("social_{$network}", array(
            'label'   => sprintf(__('%s URL', 'aetherbloom'), ucfirst($network)),
            'section' => 'aetherbloom_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'aetherbloom_customize_register');

/**
 * Custom fields for post/page content
 */
function aetherbloom_add_custom_fields() {
    add_meta_box(
        'aetherbloom_custom_fields',
        'Aetherbloom Custom Fields',
        'aetherbloom_custom_fields_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aetherbloom_add_custom_fields');

function aetherbloom_custom_fields_callback($post) {
    wp_nonce_field('aetherbloom_save_custom_fields', 'aetherbloom_custom_fields_nonce');
    
    $hero_video = get_post_meta($post->ID, '_hero_video', true);
    $services = get_post_meta($post->ID, '_services', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="hero_video">Hero Video URL</label></th>';
    echo '<td><input type="url" id="hero_video" name="hero_video" value="' . esc_attr($hero_video) . '" style="width: 100%;" /></td>';
    echo '</tr>';
    echo '</table>';
}

function aetherbloom_save_custom_fields($post_id) {
    if (!isset($_POST['aetherbloom_custom_fields_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['aetherbloom_custom_fields_nonce'], 'aetherbloom_save_custom_fields')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['hero_video'])) {
        update_post_meta($post_id, '_hero_video', esc_url_raw($_POST['hero_video']));
    }
}
add_action('save_post', 'aetherbloom_save_custom_fields');

/**
 * Disable WordPress blocks and enable classic editor
 */
function aetherbloom_disable_blocks() {
    add_filter('use_block_editor_for_post', '__return_false');
    add_filter('use_block_editor_for_post_type', '__return_false');
}
add_action('init', 'aetherbloom_disable_blocks');

/**
 * Clean up WordPress head
 */
function aetherbloom_clean_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}
add_action('init', 'aetherbloom_clean_head');

/**
 * Optimize WordPress queries
 */
function aetherbloom_optimize_queries() {
    if (!is_admin()) {
        // Disable WordPress emojis
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    }
}
add_action('init', 'aetherbloom_optimize_queries');

/**
 * Security enhancements
 */
function aetherbloom_security() {
    // Hide WordPress version
    remove_action('wp_head', 'wp_generator');
    
    // Remove version from scripts and styles
    function remove_version_scripts_styles($src) {
        if (strpos($src, 'ver=')) {
            $src = remove_query_arg('ver', $src);
        }
        return $src;
    }
    add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
    add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);
}
add_action('init', 'aetherbloom_security');