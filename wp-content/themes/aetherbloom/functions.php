<?php
// File: /wp-content/themes/aetherbloom/functions.php

/**
 * Aetherbloom Theme Functions - Updated for separate pages
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
 * Enqueue scripts and styles - Updated for separate pages
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

    // Page-specific CSS files
    if (is_page('about')) {
        wp_enqueue_style(
            'aetherbloom-about',
            get_template_directory_uri() . '/css/about.css',
            array('aetherbloom-style'),
            $theme_version
        );
    }

    if (is_page('services')) {
        wp_enqueue_style(
            'aetherbloom-services-page',
            get_template_directory_uri() . '/css/services-page.css',
            array('aetherbloom-style'),
            $theme_version
        );
    }

    if (is_page('impact')) {
        wp_enqueue_style(
            'aetherbloom-impact',
            get_template_directory_uri() . '/css/impact.css',
            array('aetherbloom-style'),
            $theme_version
        );
    }

    if (is_page('contact')) {
        wp_enqueue_style(
            'aetherbloom-contact',
            get_template_directory_uri() . '/css/contact.css',
            array('aetherbloom-style'),
            $theme_version
        );
    }

    // JavaScript files - Load navbar on all pages
    wp_enqueue_script(
        'aetherbloom-navbar',
        get_template_directory_uri() . '/js/navbar.js',
        array(),
        $theme_version,
        true
    );

    // Load homepage scripts on front page and home page
    if (is_front_page() || is_home()) {
        wp_enqueue_script(
            'aetherbloom-main',
            get_template_directory_uri() . '/js/main.js',
            array(),
            $theme_version,
            true
        );

        wp_enqueue_script(
            'aetherbloom-hero',
            get_template_directory_uri() . '/js/hero.js',
            array(),
            $theme_version,
            true
        );

        wp_enqueue_script(
            'aetherbloom-why-aetherbloom',
            get_template_directory_uri() . '/js/why-aetherbloom.js',
            array(),
            $theme_version,
            true
        );

        wp_enqueue_script(
            'aetherbloom-services',
            get_template_directory_uri() . '/js/services.js',
            array(),
            $theme_version,
            true
        );

        wp_enqueue_script(
            'aetherbloom-pricing',
            get_template_directory_uri() . '/js/pricing-calculator.js',
            array(),
            $theme_version,
            true
        );

        wp_enqueue_script(
            'aetherbloom-cta',
            get_template_directory_uri() . '/js/cta.js',
            array(),
            $theme_version,
            true
        );
    }

    // Page-specific JavaScript files
    if (is_page('about')) {
        wp_enqueue_script(
            'aetherbloom-about',
            get_template_directory_uri() . '/js/about.js',
            array(),
            $theme_version,
            true
        );
    }

    if (is_page('services')) {
        wp_enqueue_script(
            'aetherbloom-services-page',
            get_template_directory_uri() . '/js/services-page.js',
            array(),
            $theme_version,
            true
        );
    }

    if (is_page('impact')) {
        wp_enqueue_script(
            'aetherbloom-impact',
            get_template_directory_uri() . '/js/impact.js',
            array(),
            $theme_version,
            true
        );
    }

    if (is_page('contact')) {
        wp_enqueue_script(
            'aetherbloom-contact',
            get_template_directory_uri() . '/js/contact.js',
            array(),
            $theme_version,
            true
        );
    }

    // WordPress default comment reply script (if needed)
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'aetherbloom_scripts');

/**
 * Register custom fields for pages
 */
function aetherbloom_add_page_options() {
    add_meta_box(
        'aetherbloom_page_options',
        'Page Options',
        'aetherbloom_page_options_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aetherbloom_add_page_options');

function aetherbloom_page_options_callback($post) {
    wp_nonce_field('aetherbloom_page_options', 'aetherbloom_page_options_nonce');
    
    $hero_video = get_post_meta($post->ID, '_hero_video', true);
    $page_subtitle = get_post_meta($post->ID, '_page_subtitle', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="hero_video">Hero Video URL</label></th>';
    echo '<td><input type="url" id="hero_video" name="hero_video" value="' . esc_attr($hero_video) . '" style="width: 100%;" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="page_subtitle">Page Subtitle</label></th>';
    echo '<td><input type="text" id="page_subtitle" name="page_subtitle" value="' . esc_attr($page_subtitle) . '" style="width: 100%;" /></td>';
    echo '</tr>';
    echo '</table>';
}

function aetherbloom_save_page_options($post_id) {
    if (!isset($_POST['aetherbloom_page_options_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['aetherbloom_page_options_nonce'], 'aetherbloom_page_options')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['hero_video'])) {
        update_post_meta($post_id, '_hero_video', sanitize_url($_POST['hero_video']));
    }
    
    if (isset($_POST['page_subtitle'])) {
        update_post_meta($post_id, '_page_subtitle', sanitize_text_field($_POST['page_subtitle']));
    }
}
add_action('save_post', 'aetherbloom_save_page_options');

/**
 * Add body classes for page-specific styling
 */
function aetherbloom_body_classes($classes) {
    if (is_page('about')) {
        $classes[] = 'page-about';
    }
    if (is_page('services')) {
        $classes[] = 'page-services';
    }
    if (is_page('impact')) {
        $classes[] = 'page-impact';
    }
    if (is_page('contact')) {
        $classes[] = 'page-contact';
    }
    
    return $classes;
}
add_filter('body_class', 'aetherbloom_body_classes');

/**
 * Custom navigation walker (if needed for advanced menu styling)
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
        
        $output .= $indent . '<li' . $id . $class_names .'>';
        
        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) .'"' : '';
        
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes .'>';
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
 * Additional theme functionality can be added here
 */