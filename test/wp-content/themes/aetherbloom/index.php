<?php
// File: /wp-content/themes/aetherbloom/index.php

/**
 * The main template file - Fixed for proper homepage content display and footer placement
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
    <!-- Mobile WebM background -->
    <video autoplay loop muted playsinline class="mobile-webp-background">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/animated-petals-mobile.webm" type="video/webm">
    </video>
    
    <!-- Fixed video background - controlled by scroll position -->
    <div class="fixed-video-container" id="fixed-video-container" style="opacity: 1; visibility: visible;">
        <?php 
        $hero_video = get_post_meta(get_the_ID(), '_hero_video', true);
        if (!$hero_video) {
            $hero_video = get_template_directory_uri() . '/assets/videos/hero-video.mp4';
        }
        ?>
        <video class="fixed-video" autoplay muted loop playsinline poster="<?php echo esc_url(str_replace('.mp4', '.jpg', $hero_video)); ?>">
            <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
            <div class="video-fallback"></div>
        </video>
    </div>
    
    <main class="site-main" id="main">
        <?php if (is_front_page() || is_home() || !have_posts()) : ?>
            <!-- This is the homepage - show all sections -->
            
            <!-- Hero Section -->
            <?php get_template_part('template-parts/hero'); ?>

            <!-- Content Wrapper for remaining sections -->
            <div class="content-wrapper">
                <!-- Why Aetherbloom Section -->
                <?php get_template_part('template-parts/why-aetherbloom'); ?>

                <!-- Services Section -->
                <?php get_template_part('template-parts/services'); ?>

                <!-- Pricing Calculator Section -->
                <?php get_template_part('template-parts/pricing-calculator'); ?>

                <!-- CTA Section -->
                <?php get_template_part('template-parts/cta'); ?>

                <?php get_footer(); ?>
            </div>
            
        <?php else : ?>
            <!-- This is a blog/archive page - show regular post content -->
            
            <div class="content-wrapper">
                <div class="container">
                    <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <?php
                            the_archive_title('<h1 class="page-title">', '</h1>');
                            the_archive_description('<div class="archive-description">', '</div>');
                            ?>
                        </header>

                        <div class="posts-container">
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                                    <header class="entry-header">
                                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                                    </header>

                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>

                                    <footer class="entry-footer">
                                        <span class="posted-on"><?php the_date(); ?></span>
                                    </footer>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <?php
                        the_posts_navigation(array(
                            'prev_text' => esc_html__('Older posts', 'aetherbloom'),
                            'next_text' => esc_html__('Newer posts', 'aetherbloom'),
                        ));
                        ?>

                    <?php else : ?>
                        <section class="no-results not-found">
                            <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e('Nothing here', 'aetherbloom'); ?></h1>
                            </header>

                            <div class="page-content">
                                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'aetherbloom'); ?></p>
                                <?php get_search_form(); ?>
                            </div>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
            
        <?php endif; ?>
    </main>
</div>