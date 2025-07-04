<?php
// File: /wp-content/themes/aetherbloom/functions.php

/**
 * Aetherbloom Theme Functions
 * 
 * @package Aetherbloom
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function aetherbloom_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Enable support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    // Enable support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'aetherbloom'),
        'footer'  => __('Footer Navigation', 'aetherbloom'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1400;
    }
}
add_action('after_setup_theme', 'aetherbloom_setup');

/**
 * Enqueue scripts and styles
 */
function aetherbloom_scripts() {
    // Get theme version
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue Google Fonts
    wp_enqueue_style(
        'aetherbloom-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Enqueue main stylesheet
    wp_enqueue_style(
        'aetherbloom-style',
        get_stylesheet_uri(),
        array('aetherbloom-fonts'),
        $theme_version
    );

    // Enqueue component stylesheets
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

    // Enqueue main JavaScript
    wp_enqueue_script(
        'aetherbloom-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        $theme_version,
        true
    );

    // Enqueue component JavaScript files
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

    // Remove WordPress emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('wp_enqueue_scripts', 'aetherbloom_scripts');

/**
 * Enqueue admin styles and scripts
 */
function aetherbloom_admin_scripts($hook) {
    if ('post.php' != $hook && 'post-new.php' != $hook) {
        return;
    }

    wp_enqueue_style(
        'aetherbloom-admin',
        get_template_directory_uri() . '/css/admin.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('admin_enqueue_scripts', 'aetherbloom_admin_scripts');

/**
 * Remove WordPress admin bar margin
 */
function aetherbloom_remove_admin_bar_margin() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'aetherbloom_remove_admin_bar_margin');

/**
 * Custom walker for navigation menu
 */
class Aetherbloom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

/**
 * Handle newsletter subscription AJAX
 */
function aetherbloom_handle_newsletter() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'aetherbloom_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }

    $email = sanitize_email($_POST['email']);

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }

    // Here you would typically integrate with your email service
    // For now, we'll just store in WordPress options or send an email
    
    $to = get_option('admin_email');
    $subject = 'New Newsletter Subscription';
    $message = "New newsletter subscription from: " . $email;
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    $sent = wp_mail($to, $subject, $message, $headers);

    if ($sent) {
        wp_send_json_success('Thank you for subscribing to our newsletter!');
    } else {
        wp_send_json_error('There was an error processing your subscription. Please try again.');
    }
}
add_action('wp_ajax_aetherbloom_newsletter', 'aetherbloom_handle_newsletter');
add_action('wp_ajax_nopriv_aetherbloom_newsletter', 'aetherbloom_handle_newsletter');

/**
 * Handle contact form AJAX
 */
function aetherbloom_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'aetherbloom_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }

    // Send email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Company: $company\n";
    $email_message .= "Message: $message\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    // Send email
    $sent = wp_mail($to, $subject, $email_message, $headers);

    if ($sent) {
        wp_send_json_success('Thank you for your message. We will get back to you soon!');
    } else {
        wp_send_json_error('Sorry, there was an error sending your message. Please try again.');
    }
}
add_action('wp_ajax_aetherbloom_contact_form', 'aetherbloom_handle_contact_form');
add_action('wp_ajax_nopriv_aetherbloom_contact_form', 'aetherbloom_handle_contact_form');

/**
 * Add custom fields support
 */
function aetherbloom_add_custom_fields() {
    // Hero section fields
    add_meta_box(
        'hero_settings',
        'Hero Section Settings',
        'aetherbloom_hero_meta_box',
        'page',
        'normal',
        'high'
    );

    // Services section fields
    add_meta_box(
        'services_settings',
        'Services Section Settings',
        'aetherbloom_services_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aetherbloom_add_custom_fields');

/**
 * Hero section meta box
 */
function aetherbloom_hero_meta_box($post) {
    wp_nonce_field('aetherbloom_meta_box', 'aetherbloom_meta_box_nonce');

    $hero_title = get_post_meta($post->ID, '_hero_title', true);
    $hero_subtitle = get_post_meta($post->ID, '_hero_subtitle', true);
    $hero_video = get_post_meta($post->ID, '_hero_video', true);

    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="hero_title">Hero Title</label></th>';
    echo '<td><input type="text" id="hero_title" name="hero_title" value="' . esc_attr($hero_title) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="hero_subtitle">Hero Subtitle</label></th>';
    echo '<td><textarea id="hero_subtitle" name="hero_subtitle" rows="3" cols="50">' . esc_textarea($hero_subtitle) . '</textarea></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="hero_video">Hero Video URL</label></th>';
    echo '<td><input type="url" id="hero_video" name="hero_video" value="' . esc_url($hero_video) . '" size="50" /></td>';
    echo '</tr>';
    echo '</table>';
}

/**
 * Services section meta box
 */
function aetherbloom_services_meta_box($post) {
    $services = get_post_meta($post->ID, '_services', true);
    if (!is_array($services)) {
        $services = array();
    }

    echo '<div id="services-container">';
    foreach ($services as $index => $service) {
        echo '<div class="service-item">';
        echo '<h4>Service ' . ($index + 1) . '</h4>';
        echo '<p><label>Title: <input type="text" name="services[' . $index . '][title]" value="' . esc_attr($service['title']) . '" /></label></p>';
        echo '<p><label>Subtitle: <input type="text" name="services[' . $index . '][subtitle]" value="' . esc_attr($service['subtitle']) . '" /></label></p>';
        echo '<p><label>Description: <textarea name="services[' . $index . '][description]">' . esc_textarea($service['description']) . '</textarea></label></p>';
        echo '<p><label>Features (one per line): <textarea name="services[' . $index . '][features]">' . esc_textarea(implode("\n", $service['features'])) . '</textarea></label></p>';
        echo '<button type="button" class="remove-service">Remove Service</button>';
        echo '</div>';
    }
    echo '</div>';
    echo '<button type="button" id="add-service">Add Service</button>';
}

/**
 * Save custom fields
 */
function aetherbloom_save_custom_fields($post_id) {
    if (!isset($_POST['aetherbloom_meta_box_nonce']) || !wp_verify_nonce($_POST['aetherbloom_meta_box_nonce'], 'aetherbloom_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save hero fields
    if (isset($_POST['hero_title'])) {
        update_post_meta($post_id, '_hero_title', sanitize_text_field($_POST['hero_title']));
    }

    if (isset($_POST['hero_subtitle'])) {
        update_post_meta($post_id, '_hero_subtitle', sanitize_textarea_field($_POST['hero_subtitle']));
    }

    if (isset($_POST['hero_video'])) {
        update_post_meta($post_id, '_hero_video', esc_url_raw($_POST['hero_video']));
    }

    // Save services
    if (isset($_POST['services'])) {
        $services = array();
        foreach ($_POST['services'] as $service) {
            $services[] = array(
                'title' => sanitize_text_field($service['title']),
                'subtitle' => sanitize_text_field($service['subtitle']),
                'description' => sanitize_textarea_field($service['description']),
                'features' => array_map('sanitize_text_field', explode("\n", $service['features']))
            );
        }
        update_post_meta($post_id, '_services', $services);
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