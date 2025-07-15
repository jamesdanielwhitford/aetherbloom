<?php
// File: /wp-content/themes/aetherbloom/functions.php

/**
 * Aetherbloom Theme Functions - Updated for separate pages including careers
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
 * Enqueue scripts and styles - Updated for separate pages including careers
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

    // Careers page CSS
    if (is_page('careers') || is_page_template('page-careers.php')) {
        wp_enqueue_style(
            'aetherbloom-careers',
            get_template_directory_uri() . '/css/careers.css',
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

    // Careers page JavaScript (if needed)
    if (is_page('careers') || is_page_template('page-careers.php')) {
        wp_enqueue_script(
            'aetherbloom-careers',
            get_template_directory_uri() . '/js/careers.js',
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
 * Add careers page template to available templates
 */
function add_careers_page_template($post_templates, $wp_theme, $post, $post_type) {
    $post_templates['page-careers.php'] = 'Careers Page';
    return $post_templates;
}
add_filter('theme_page_templates', 'add_careers_page_template', 10, 4);

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
    if (is_page('careers') || is_page_template('page-careers.php')) {
        $classes[] = 'page-careers';
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
 * Register widget areas
 */
function aetherbloom_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'aetherbloom'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'aetherbloom'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer', 'aetherbloom'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'aetherbloom'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'aetherbloom_widgets_init');

/**
 * Enqueue block editor styles
 */
function aetherbloom_block_editor_styles() {
    wp_enqueue_style('aetherbloom-block-editor-style', get_template_directory_uri() . '/css/style-editor.css');
}
add_action('enqueue_block_editor_assets', 'aetherbloom_block_editor_styles');

/**
 * Add theme support for editor styles
 */
function aetherbloom_add_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style('css/style-editor.css');
}
add_action('after_setup_theme', 'aetherbloom_add_editor_styles');

/**
 * Customize excerpt length
 */
function aetherbloom_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'aetherbloom_excerpt_length');

/**
 * Customize excerpt more
 */
function aetherbloom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'aetherbloom_excerpt_more');

/**
 * Add custom image sizes
 */
function aetherbloom_add_image_sizes() {
    add_image_size('hero-large', 1920, 1080, true);
    add_image_size('hero-medium', 1200, 675, true);
    add_image_size('card-image', 400, 225, true);
}
add_action('after_setup_theme', 'aetherbloom_add_image_sizes');

/**
 * Security enhancements
 */
function aetherbloom_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'aetherbloom_security_headers');

/**
 * Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Add preconnect for Google Fonts
 */
function aetherbloom_preconnect_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'aetherbloom_preconnect_fonts', 1);

/**
 * Add structured data for organization
 */
function aetherbloom_structured_data() {
    if (is_front_page()) {
        $structured_data = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'url' => home_url(),
            'description' => get_bloginfo('description'),
            'sameAs' => array(
                // Add your social media URLs here
            )
        );
        echo '<script type="application/ld+json">' . json_encode($structured_data) . '</script>';
    }
}
add_action('wp_head', 'aetherbloom_structured_data');

/**
 * Optimize performance
 */
function aetherbloom_optimize_performance() {
    // Remove query strings from static resources
    if (!is_admin()) {
        add_filter('script_loader_src', 'aetherbloom_remove_query_strings', 15, 1);
        add_filter('style_loader_src', 'aetherbloom_remove_query_strings', 15, 1);
    }
    
    // Defer non-critical JavaScript
    add_filter('script_loader_tag', 'aetherbloom_defer_scripts', 10, 3);
}
add_action('init', 'aetherbloom_optimize_performance');

function aetherbloom_remove_query_strings($src) {
    $parts = explode('?', $src);
    return $parts[0];
}

function aetherbloom_defer_scripts($tag, $handle, $src) {
    // List of scripts to defer
    $defer_scripts = array(
        'aetherbloom-main',
        'aetherbloom-hero',
        'aetherbloom-services',
        'aetherbloom-pricing',
        'aetherbloom-cta',
        'aetherbloom-about',
        'aetherbloom-contact',
        'aetherbloom-careers'
    );
    
    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }
    
    return $tag;
}

/**
 * Add custom post types (if needed in future)
 */
function aetherbloom_custom_post_types() {
    // Example: Team members post type
    // register_post_type('team_member', array(
    //     'labels' => array(
    //         'name' => 'Team Members',
    //         'singular_name' => 'Team Member'
    //     ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'menu_icon' => 'dashicons-groups',
    //     'supports' => array('title', 'editor', 'thumbnail')
    // ));
}
add_action('init', 'aetherbloom_custom_post_types');

/**
 * Add theme customizer options
 */
function aetherbloom_customize_register($wp_customize) {
    // Add a section for theme options
    $wp_customize->add_section('aetherbloom_options', array(
        'title' => __('Aetherbloom Options', 'aetherbloom'),
        'priority' => 30,
    ));
    
    // Add contact information settings
    $wp_customize->add_setting('aetherbloom_phone', array(
        'default' => '+44 208 0507 881',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('aetherbloom_phone', array(
        'label' => __('Phone Number', 'aetherbloom'),
        'section' => 'aetherbloom_options',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('aetherbloom_email', array(
        'default' => 'hello@aetherbloom.co.uk',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('aetherbloom_email', array(
        'label' => __('Email Address', 'aetherbloom'),
        'section' => 'aetherbloom_options',
        'type' => 'email',
    ));
    
    // Add Calendly URL setting
    $wp_customize->add_setting('aetherbloom_calendly_url', array(
        'default' => 'https://calendly.com/aetherbloom',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('aetherbloom_calendly_url', array(
        'label' => __('Calendly URL', 'aetherbloom'),
        'section' => 'aetherbloom_options',
        'type' => 'url',
    ));
}
add_action('customize_register', 'aetherbloom_customize_register');

/**
 * Add admin notice for theme setup
 */
function aetherbloom_admin_notice() {
    if (current_user_can('edit_theme_options')) {
        $screen = get_current_screen();
        if ($screen->base === 'themes') {
            echo '<div class="notice notice-info"><p>';
            echo __('Aetherbloom theme is active! Make sure to create your pages (About, Services, Impact, Contact, Careers) and set up your navigation menu.', 'aetherbloom');
            echo '</p></div>';
        }
    }
}
add_action('admin_notices', 'aetherbloom_admin_notice');

/**
 * Filter to modify the main query for specific pages
 */
function aetherbloom_modify_main_query($query) {
    if (!is_admin() && $query->is_main_query()) {
        // Add any custom query modifications here
        // For example, if you want to modify the posts per page on certain pages
    }
}
add_action('pre_get_posts', 'aetherbloom_modify_main_query');

/**
 * Add cache-busting for CSS and JS files in development
 */
function aetherbloom_cache_busting() {
    if (defined('WP_DEBUG') && WP_DEBUG) {
        return time();
    }
    return wp_get_theme()->get('Version');
}

/**
 * Add custom CSS for WordPress admin
 */
function aetherbloom_admin_styles() {
    echo '<style>
        .toplevel_page_aetherbloom-options .wp-menu-image:before {
            content: "\f336";
        }
    </style>';
}
add_action('admin_head', 'aetherbloom_admin_styles');

/**
 * Add maintenance mode (commented out by default)
 */
// function aetherbloom_maintenance_mode() {
//     if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//         wp_die('<h1>Under Maintenance</h1><p>Website will be available soon. Thank you for your patience!</p>');
//     }
// }
// add_action('get_header', 'aetherbloom_maintenance_mode');

/**
 * Clean up WordPress head
 */
function aetherbloom_clean_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}
add_action('init', 'aetherbloom_clean_head');

/**
 * Add support for async and defer attributes on script tags
 */
function aetherbloom_add_async_attribute($tag, $handle) {
    // Add handles of scripts that should be loaded asynchronously
    $async_scripts = array(
        'aetherbloom-analytics', // If you add Google Analytics
    );
    
    if (in_array($handle, $async_scripts)) {
        return str_replace(' src', ' async src', $tag);
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'aetherbloom_add_async_attribute', 10, 2);

/**
 * Add critical CSS inline for above-the-fold content
 */
function aetherbloom_critical_css() {
    if (is_front_page()) {
        echo '<style id="critical-css">
            /* Add your critical CSS here for above-the-fold content */
            .fixed-petals-container { display: block; }
            .navbar { position: fixed; top: 0; z-index: 1000; }
            .hero-section { height: 100vh; }
        </style>';
    }
}
add_action('wp_head', 'aetherbloom_critical_css', 1);

/**
 * Add favicon and app icons
 */
function aetherbloom_add_favicon() {
    echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/assets/images/favicon.ico">';
    echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/assets/images/apple-touch-icon.png">';
}
add_action('wp_head', 'aetherbloom_add_favicon');

/**
 * Add Open Graph meta tags
 */
function aetherbloom_add_og_meta() {
    if (is_front_page()) {
        echo '<meta property="og:title" content="' . get_bloginfo('name') . '">';
        echo '<meta property="og:description" content="' . get_bloginfo('description') . '">';
        echo '<meta property="og:url" content="' . home_url() . '">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:image" content="' . get_template_directory_uri() . '/assets/images/og-image.jpg">';
    }
}
add_action('wp_head', 'aetherbloom_add_og_meta');

/**
 * Add Twitter Card meta tags
 */
function aetherbloom_add_twitter_meta() {
    if (is_front_page()) {
        echo '<meta name="twitter:card" content="summary_large_image">';
        echo '<meta name="twitter:title" content="' . get_bloginfo('name') . '">';
        echo '<meta name="twitter:description" content="' . get_bloginfo('description') . '">';
        echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/assets/images/twitter-card.jpg">';
    }
}
add_action('wp_head', 'aetherbloom_add_twitter_meta');

/**
 * Add theme version to body class for CSS cache busting
 */
function aetherbloom_version_body_class($classes) {
    $classes[] = 'theme-version-' . str_replace('.', '-', wp_get_theme()->get('Version'));
    return $classes;
}
add_filter('body_class', 'aetherbloom_version_body_class');

// Add this to your theme's functions.php file

/**
 * Enqueue scripts and localize AJAX data
 */
function aetherbloom_enqueue_form_scripts() {
    wp_enqueue_script(
        'aetherbloom-cta',
        get_template_directory_uri() . '/js/cta.js',
        array(),
        '1.0.0',
        true
    );
    
    // Localize AJAX data for the frontend
    wp_localize_script('aetherbloom-cta', 'aetherbloomCTAData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('aetherbloom_cta_nonce'),
        'restUrl' => rest_url('aetherbloom/v1/'),
        'restNonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts', 'aetherbloom_enqueue_form_scripts');

/**
 * AJAX Handler for Contact Form (Legacy approach)
 */
add_action('wp_ajax_aetherbloom_contact_form', 'aetherbloom_handle_contact_form');
add_action('wp_ajax_nopriv_aetherbloom_contact_form', 'aetherbloom_handle_contact_form');

function aetherbloom_handle_contact_form() {
    // Security check
    if (!wp_verify_nonce($_POST['nonce'] ?? '', 'aetherbloom_cta_nonce')) {
        wp_send_json_error('Security verification failed.');
    }
    
    // Sanitize and validate input
    $form_data = array(
        'company' => sanitize_text_field($_POST['company'] ?? ''),
        'firstname' => sanitize_text_field($_POST['firstname'] ?? ''),
        'lastname' => sanitize_text_field($_POST['lastname'] ?? ''),
        'email' => sanitize_email($_POST['email'] ?? ''),
        'phone' => sanitize_text_field($_POST['phone'] ?? ''),
        'primary_service' => sanitize_text_field($_POST['primary_service'] ?? ''),
        'addon_services' => array_map('sanitize_text_field', $_POST['addon_services'] ?? array())
    );
    
    // Validate required fields
    $errors = array();
    
    if (empty($form_data['company'])) {
        $errors[] = 'Company name is required.';
    }
    
    if (empty($form_data['firstname'])) {
        $errors[] = 'First name is required.';
    }
    
    if (empty($form_data['email']) || !is_email($form_data['email'])) {
        $errors[] = 'Valid email address is required.';
    }
    
    if (!empty($errors)) {
        wp_send_json_error(implode(' ', $errors));
    }
    
    // Process the form (save to database, send email, etc.)
    $result = aetherbloom_process_contact_submission($form_data);
    
    if ($result) {
        wp_send_json_success('Thank you! Your message has been sent successfully.');
    } else {
        wp_send_json_error('There was an error processing your request. Please try again.');
    }
}

/**
 * REST API Handler (Modern approach - recommended)
 */
add_action('rest_api_init', 'aetherbloom_register_contact_endpoint');

function aetherbloom_register_contact_endpoint() {
    register_rest_route('aetherbloom/v1', '/contact', array(
        'methods' => 'POST',
        'callback' => 'aetherbloom_handle_contact_rest',
        'permission_callback' => '__return_true',
        'args' => array(
            'company' => array(
                'required' => true,
                'sanitize_callback' => 'sanitize_text_field',
                'validate_callback' => function($param) {
                    return !empty($param);
                }
            ),
            'firstname' => array(
                'required' => true,
                'sanitize_callback' => 'sanitize_text_field',
                'validate_callback' => function($param) {
                    return !empty($param);
                }
            ),
            'lastname' => array(
                'required' => true,
                'sanitize_callback' => 'sanitize_text_field',
                'validate_callback' => function($param) {
                    return !empty($param);
                }
            ),
            'email' => array(
                'required' => true,
                'sanitize_callback' => 'sanitize_email',
                'validate_callback' => function($param) {
                    return is_email($param);
                }
            ),
            'phone' => array(
                'sanitize_callback' => 'sanitize_text_field'
            ),
            'primary_service' => array(
                'sanitize_callback' => 'sanitize_text_field'
            ),
            'addon_services' => array(
                'sanitize_callback' => function($param) {
                    return array_map('sanitize_text_field', (array)$param);
                }
            )
        )
    ));
}

function aetherbloom_handle_contact_rest($request) {
    // Verify nonce for extra security
    $nonce = $request->get_header('X-WP-Nonce');
    if (!wp_verify_nonce($nonce, 'wp_rest')) {
        return new WP_Error('rest_forbidden', 'Invalid nonce.', array('status' => 403));
    }
    
    // Get sanitized parameters (already handled by REST API)
    $form_data = array(
        'company' => $request['company'],
        'firstname' => $request['firstname'],
        'lastname' => $request['lastname'],
        'email' => $request['email'],
        'phone' => $request['phone'] ?? '',
        'primary_service' => $request['primary_service'] ?? '',
        'addon_services' => $request['addon_services'] ?? array()
    );
    
    // Process the form
    $result = aetherbloom_process_contact_submission($form_data);
    
    if ($result) {
        return array(
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully.'
        );
    } else {
        return new WP_Error('submission_failed', 'There was an error processing your request.', array('status' => 500));
    }
}

/**
 * Process the contact form submission
 */
function aetherbloom_process_contact_submission($form_data) {
    global $wpdb;
    
    try {
        // Save to custom table (create table first)
        $table_name = $wpdb->prefix . 'aetherbloom_contacts';
        
        $result = $wpdb->insert(
            $table_name,
            array(
                'company' => $form_data['company'],
                'firstname' => $form_data['firstname'],
                'lastname' => $form_data['lastname'],
                'email' => $form_data['email'],
                'phone' => $form_data['phone'],
                'primary_service' => $form_data['primary_service'],
                'addon_services' => json_encode($form_data['addon_services']),
                'submission_date' => current_time('mysql'),
                'ip_address' => $_SERVER['REMOTE_ADDR']
            ),
            array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
        );
        
        // Send notification email
        if ($result) {
            aetherbloom_send_contact_notification($form_data);
        }
        
        return $result !== false;
        
    } catch (Exception $e) {
        error_log('Contact form submission error: ' . $e->getMessage());
        return false;
    }
}

/**
 * Send notification email
 */
function aetherbloom_send_contact_notification($form_data) {
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - ' . $form_data['company'];
    
    $message = "New contact form submission:\n\n";
    $message .= "Company: " . $form_data['company'] . "\n";
    $message .= "Name: " . $form_data['firstname'] . " " . $form_data['lastname'] . "\n";
    $message .= "Email: " . $form_data['email'] . "\n";
    $message .= "Phone: " . $form_data['phone'] . "\n";
    $message .= "Primary Service: " . $form_data['primary_service'] . "\n";
    
    if (!empty($form_data['addon_services'])) {
        $message .= "Additional Services: " . implode(', ', $form_data['addon_services']) . "\n";
    }
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $form_data['email']
    );
    
    wp_mail($to, $subject, $message, $headers);
}

/**
 * Create database table on theme activation
 */
function aetherbloom_create_contact_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'aetherbloom_contacts';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        company varchar(255) NOT NULL,
        firstname varchar(100) NOT NULL,
        lastname varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20),
        primary_service varchar(100),
        addon_services text,
        submission_date datetime DEFAULT CURRENT_TIMESTAMP,
        ip_address varchar(45),
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Create table on theme switch
add_action('after_switch_theme', 'aetherbloom_create_contact_table');

/**
 * Add admin menu for viewing submissions
 */
add_action('admin_menu', 'aetherbloom_add_admin_menu');

function aetherbloom_add_admin_menu() {
    add_menu_page(
        'Contact Submissions',
        'Contact Forms',
        'manage_options',
        'aetherbloom-contacts',
        'aetherbloom_admin_page'
    );
}

function aetherbloom_admin_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aetherbloom_contacts';
    $submissions = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submission_date DESC");
    
    echo '<div class="wrap">';
    echo '<h1>Contact Form Submissions</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Date</th><th>Company</th><th>Name</th><th>Email</th><th>Service</th></tr></thead>';
    echo '<tbody>';
    
    foreach ($submissions as $submission) {
        echo '<tr>';
        echo '<td>' . esc_html($submission->submission_date) . '</td>';
        echo '<td>' . esc_html($submission->company) . '</td>';
        echo '<td>' . esc_html($submission->firstname . ' ' . $submission->lastname) . '</td>';
        echo '<td>' . esc_html($submission->email) . '</td>';
        echo '<td>' . esc_html($submission->primary_service) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody></table>';
    echo '</div>';
}
