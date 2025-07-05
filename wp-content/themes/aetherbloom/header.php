<?php
// File: /wp-content/themes/aetherbloom/header.php

/**
 * The header for our theme - Updated for separate pages
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'aetherbloom'); ?></a>
    
    <header id="masthead" class="site-header">
        <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e('Primary navigation', 'aetherbloom'); ?>">
            <div class="nav-container">
                <!-- Brand/Logo -->
                <div class="brand">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
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
                        // Fallback navigation - Updated for separate pages
                        ?>
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="nav-link">About</a>
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="nav-link">Services</a>
                        <a href="<?php echo esc_url(home_url('/impact')); ?>" class="nav-link">Impact</a>
                        <a href="<?php echo esc_url(home_url('/careers')); ?>" class="nav-link">Careers</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-link">Contact</a>
                        <?php
                    }
                    ?>
                </div>

                <!-- Action Buttons -->
                <div class="nav-actions">
                    <a href="<?php echo esc_url(home_url('/#pricing')); ?>" class="pricing-btn">
                        <?php esc_html_e('Pricing', 'aetherbloom'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="get-started-btn">
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