<?php
// File: /wp-content/themes/aetherbloom/index.php

/**
 * The main template file - Updated for Phase 3 Integration
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

get_header(); ?>

<div class="layout">
    <!-- Fixed animated petals container -->
    <div class="fixed-petals-container">
        <div class="fixed-petal fixed-petal1"></div>
        <div class="fixed-petal fixed-petal2"></div>
        <div class="fixed-petal fixed-petal3"></div>
        <div class="fixed-petal fixed-petal4"></div>
    </div>
    
    <!-- Fixed video background - controlled by scroll position -->
    <div class="fixed-video-container" id="fixed-video-container" style="opacity: 1; visibility: visible;">
        <?php 
        $hero_video = get_post_meta(get_the_ID(), '_hero_video', true);
        if (!$hero_video) {
            $hero_video = get_template_directory_uri() . '/assets/videos/hero-video.mp4';
        }
        ?>
        <video class="fixed-video" autoplay muted loop playsinline>
            <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
            <div class="video-fallback"></div>
        </video>
    </div>
    
    <main class="site-main" id="main">
        <!-- Hero Section - Template part includes its own section wrapper -->
        <?php get_template_part('template-parts/hero'); ?>

        <!-- Content Wrapper for remaining sections -->
        <div class="content-wrapper">
            <!-- Why Aetherbloom Section - Template part includes its own section wrapper -->
            <?php get_template_part('template-parts/why-aetherbloom'); ?>

            <!-- Services Section - Template part includes its own section wrapper -->
            <?php get_template_part('template-parts/services'); ?>

            <!-- Pricing Calculator Section - Template part includes its own section wrapper -->
            <?php get_template_part('template-parts/pricing-calculator'); ?>

            <!-- CTA Section - Template part includes its own section wrapper -->
            <?php get_template_part('template-parts/cta'); ?>

            <?php get_footer(); ?>
        </div>
    </main>
</div>