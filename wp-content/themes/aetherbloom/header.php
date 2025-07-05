<?php
// File: /wp-content/themes/aetherbloom/header.php

/**
 * The header for our theme - Temporary fix without custom walker
 *
 * @package Aetherbloom
 * @version 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Meta Tags -->
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="author" content="Aetherbloom">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . '/assets/images/og-image.jpg'); ?>">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri() . '/assets/images/og-image.jpg'); ?>">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'aetherbloom'); ?></a>

    <header id="masthead" class="site-header">
        <nav class="navbar">
            <div class="nav-container">
                <!-- Brand Section -->
                <div class="nav-brand">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    
                    if (has_custom_logo()) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" rel="home">
                            <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="brand-icon">
                            <span class="brand-name"><?php bloginfo('name'); ?></span>
                        </a>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" rel="home">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="brand-icon">
                            <span class="brand-name"><?php bloginfo('name'); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Navigation Links -->
                <div class="nav-links">
                    <?php
                    // Check if menu exists, otherwise show fallback
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                            'link_before'    => '',
                            'link_after'     => '',
                        ));
                    } else {
                        // Fallback navigation
                        ?>
                        <a href="#why-aetherbloom" class="nav-link">About us</a>
                        <a href="#services" class="nav-link">Services</a>
                        <a href="#impact" class="nav-link">Impact</a>
                        <a href="#contact" class="nav-link">Contact</a>
                        <?php
                    }
                    ?>
                </div>

                <!-- Action Buttons -->
                <div class="nav-actions">
                    <a href="#pricing" class="pricing-btn">
                        <?php esc_html_e('Pricing', 'aetherbloom'); ?>
                    </a>
                    <a href="#contact" class="get-started-btn">
                        <?php esc_html_e('Get Started', 'aetherbloom'); ?>
                    </a>
                </div>

                <!-- Mobile Menu Toggle (for future implementation) -->
                <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e('Toggle navigation', 'aetherbloom'); ?>" style="display: none;">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header><!-- #masthead -->