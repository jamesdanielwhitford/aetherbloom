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
        </div>
    </main>
</div>

<!-- WordPress content (hidden by default, shown only for actual posts/pages) -->
<?php if (have_posts() && !is_front_page()) : ?>
    <div class="site-content">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'aetherbloom'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    edit_post_link(
                        sprintf(
                            wp_kses(
                                __('Edit <span class="screen-reader-text">%s</span>', 'aetherbloom'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer>
            </article>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>