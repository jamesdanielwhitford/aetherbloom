<?php
// File: /wp-content/themes/aetherbloom/page-about.php

/**
 * Template for About page - Updated to match homepage structure
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
    
    <main class="site-main about-page" id="main">
        <div class="content-wrapper">
            <!-- Page Header Section - Moved inside content-wrapper -->
            <section class="page-header">
                <div class="container">
                    <h1 class="page-title"><?php esc_html_e('About Aetherbloom', 'aetherbloom'); ?></h1>
                    <p class="page-subtitle"><?php esc_html_e('Where Expertise Meets Efficiency', 'aetherbloom'); ?></p>
                </div>
            </section>

            <!-- About Hero Section -->
            <section class="about-hero-section">
                <div class="container">
                    <div class="about-hero-content">
                        <div class="about-hero-text">
                            <h2><?php esc_html_e('Transforming Business Through Strategic Outsourcing', 'aetherbloom'); ?></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="about-hero-image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-hero.jpg'); ?>" alt="About Aetherbloom" class="hero-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Story Section -->
            <section class="our-story-section">
                <div class="container">
                    <h2><?php esc_html_e('Our Story', 'aetherbloom'); ?></h2>
                    <div class="story-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </section>

            <!-- Leadership Section -->
            <section class="leadership-section">
                <div class="container">
                    <h2><?php esc_html_e('Leadership Team', 'aetherbloom'); ?></h2>
                    <div class="leadership-grid">
                        <div class="leader-card">
                            <div class="leader-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/leader-1.jpg'); ?>" alt="Leader 1">
                            </div>
                            <div class="leader-info">
                                <h3>Grace Smith</h3>
                                <p class="leader-title">CEO & Founder</p>
                                <p class="leader-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="leader-card">
                            <div class="leader-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/leader-2.jpg'); ?>" alt="Leader 2">
                            </div>
                            <div class="leader-info">
                                <h3>Della Johnson</h3>
                                <p class="leader-title">COO & Co-Founder</p>
                                <p class="leader-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission & Values Section -->
            <section class="mission-values-section">
                <div class="container">
                    <div class="mission-values-grid">
                        <div class="mission-card">
                            <h3><?php esc_html_e('Our Mission', 'aetherbloom'); ?></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="values-card">
                            <h3><?php esc_html_e('Our Values', 'aetherbloom'); ?></h3>
                            <ul class="values-list">
                                <li>Excellence in service delivery</li>
                                <li>Transparency and integrity</li>
                                <li>Empowerment through opportunity</li>
                                <li>Innovation and continuous improvement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_footer(); ?>
        </div>
    </main>
</div>