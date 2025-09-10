<?php
// File: /wp-content/themes/aetherbloom/404.php

/**
 * The template for displaying 404 pages (not found) - Styled to match privacy policy page
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
    
    <main class="site-main error-404-page" id="main">
        <div class="content-wrapper">
            <!-- 404 Hero Section -->
            <section class="privacy-hero">
                <div class="privacy-hero-content">
                    <h1 class="privacy-title">404</h1>
                    <p class="privacy-subtitle">Page Not Found</p>
                    <p class="last-updated">The page you're looking for doesn't exist</p>
                </div>
            </section>

            <!-- 404 Content Section -->
            <section class="privacy-content-section">
                <div class="privacy-container">
                    <div class="privacy-content-wrapper">
                        <div class="privacy-intro">
                            <p>Sorry, the page you're looking for doesn't exist. It might have been moved, deleted, or you entered the wrong URL.</p>
                        </div>
                        
                        <div class="privacy-section">
                            <h2>What can you do?</h2>
                            <ul>
                                <li>Check the URL for any typos</li>
                                <li>Go back to our <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a></li>
                                <li>Use the search function below</li>
                                <li>Browse our <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">services</a> or <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">learn about us</a></li>
                            </ul>
                        </div>
                        
                        <div class="privacy-section">
                            <h2>Search Our Site</h2>
                            <p>Try searching for what you were looking for:</p>
                            <div style="margin-top: 1rem;">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        
                        <div class="privacy-section">
                            <h2>Need Help?</h2>
                            <p>If you can't find what you're looking for, feel free to reach out to us:</p>
                            <div class="contact-info">
                                <p><strong>Email:</strong> <a href="mailto:<?php echo get_theme_mod('aetherbloom_email', 'hello@aetherbloom.co.uk'); ?>"><?php echo get_theme_mod('aetherbloom_email', 'hello@aetherbloom.co.uk'); ?></a></p>
                                <p><strong>Phone:</strong> <a href="tel:<?php echo str_replace(' ', '', get_theme_mod('aetherbloom_phone', '+44 208 0507 881')); ?>"><?php echo get_theme_mod('aetherbloom_phone', '+44 208 0507 881'); ?></a></p>
                            </div>
                            
                            <div style="margin-top: 2rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                                <a href="<?php echo esc_url(home_url('/')); ?>" 
                                   style="background: linear-gradient(135deg, var(--brand-color) 0%, var(--brand-color-light) 100%); 
                                          color: white; 
                                          padding: 12px 24px; 
                                          border-radius: 6px; 
                                          text-decoration: none; 
                                          font-weight: 500;
                                          display: inline-block;
                                          transition: transform 0.2s ease;">
                                    Return Home
                                </a>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" 
                                   style="background: transparent; 
                                          color: var(--text-primary); 
                                          padding: 12px 24px; 
                                          border: 2px solid rgba(255,255,255,0.3); 
                                          border-radius: 6px; 
                                          text-decoration: none; 
                                          font-weight: 500;
                                          display: inline-block;
                                          transition: all 0.2s ease;">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_footer(); ?>
        </div>
    </main>
</div>
