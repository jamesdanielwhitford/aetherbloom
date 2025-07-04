<?php
// File: /wp-content/themes/aetherbloom/index.php

/**
 * The main template file
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
        <!-- Hero Section -->
        <section class="hero-container section" id="hero">
            <?php get_template_part('template-parts/hero'); ?>
        </section>

        <!-- Content Wrapper for remaining sections -->
        <div class="content-wrapper">
            <!-- Why Aetherbloom Section -->
            <section class="section" id="why-aetherbloom">
                <?php get_template_part('template-parts/why-aetherbloom'); ?>
            </section>

            <!-- Services Section -->
            <section class="section" id="services">
                <?php get_template_part('template-parts/services'); ?>
            </section>

            <!-- Pricing Calculator Section -->
            <section class="section" id="pricing">
                <?php get_template_part('template-parts/pricing-calculator'); ?>
            </section>

            <!-- CTA Section -->
            <section class="section" id="contact">
                <?php get_template_part('template-parts/cta'); ?>
            </section>

            <!-- Footer -->
            <?php get_footer(); ?>
        </div>
    </main>
</div>

<?php
// If we have posts, show them
if (have_posts()) : ?>
    <div class="site-content" style="display: none;">
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

                <?php if (get_edit_post_link()) : ?>
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
                <?php endif; ?>
            </article>
        <?php endwhile; ?>

        <?php
        the_posts_navigation(array(
            'prev_text' => __('Previous page', 'aetherbloom'),
            'next_text' => __('Next page', 'aetherbloom'),
        ));
        ?>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>