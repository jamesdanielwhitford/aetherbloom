<?php
// File: /wp-content/themes/aetherbloom/page-about.php

/**
 * Template for About page - Updated with consolidated sections and improved layout
 *
 * @package Aetherbloom
 * @version 2.1.0
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
    
    <main class="site-main about-page" id="main">
        <div class="content-wrapper">
            
            <!-- Hero Section - Full-width video background with story overlay -->
            <section class="about-hero-section">
                <div class="hero-background-video">
                    <!-- Desktop Video (WebM preferred, then MP4 fallback) -->
                    <video class="hero-video desktop-video" autoplay muted loop playsinline preload="metadata" poster="<?php echo esc_url(str_replace('.mp4', '.webp', get_template_directory_uri() . '/assets/videos/about.mp4')); ?>">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/about.webm'); ?>" type="video/webm">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/about.mp4'); ?>" type="video/mp4">
                        <div class="video-fallback"></div>
                    </video>

                    <!-- Mobile Video (MP4 only for smaller size) -->
                    <video class="hero-video mobile-video" autoplay muted loop playsinline preload="metadata" poster="<?php echo esc_url(str_replace('.mp4', '.webp', get_template_directory_uri() . '/assets/videos/about.mp4')); ?>">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/about.mp4'); ?>" type="video/mp4">
                        <div class="video-fallback"></div>
                    </video>
                    <!--
                        IMPORTANT: Add CSS media queries to your stylesheet (e.g., about.css)
                        to show/hide 'desktop-video' and 'mobile-video' based on screen size.
                        Example:
                        .hero-video.desktop-video { display: block; }
                        .hero-video.mobile-video { display: none; }

                        @media (max-width: 768px) { /* Adjust breakpoint as needed */
                            .hero-video.desktop-video { display: none; }
                            .hero-video.mobile-video { display: block; }
                        }
                    -->
                    <div class="hero-video-overlay"></div>
                </div>
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title"><?php esc_html_e('The Aetherbloom Story', 'aetherbloom'); ?></h1>
                            <h2 class="hero-subtitle"><?php esc_html_e('Founders\' Expertise as Your Strategic Advantage', 'aetherbloom'); ?></h2>
                            <div class="hero-description">
                                <p><?php esc_html_e('Where UK Civil Service expertise meets South African talent, creating ethical outsourcing solutions that transform businesses and empower communities.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Mission Section -->
            <section class="mission-section section-padding">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Our Mission', 'aetherbloom'); ?></h2>
                    </div>
                    <div class="content-image-layout">
                        <div class="content-card glassmorphism-card">
                            <p><?php esc_html_e('Aetherbloom\'s mission is to strategically connect UK businesses with highly skilled professionals in South Africa, delivering agile, high-quality outsourcing solutions that are ethically driven, cost-effective and empower individuals through meaningful economic opportunities and professional development. By combining rigorous recruitment and UK-standard training with social responsibility, we empower businesses to scale their support functions whilst driving real impact across borders.', 'aetherbloom'); ?></p>
                        </div>
                        <div class="image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mission.webp'); ?>" alt="<?php esc_attr_e('Our Mission Image', 'aetherbloom'); ?>" class="section-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Vision Section -->
            <section class="vision-section section-padding">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Our Vision', 'aetherbloom'); ?></h2>
                    </div>
                    <div class="image-content-layout">
                        <div class="image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vision.webp'); ?>" alt="<?php esc_attr_e('Our Vision Image', 'aetherbloom'); ?>" class="section-image">
                        </div>
                        <div class="content-card glassmorphism-card">
                            <p><?php esc_html_e('To become the leading bridge between UK businesses and exceptional global talent, recognised for our ethical approach, innovative solutions, and positive impact on communities. We envision a future where geographical boundaries no longer limit access to skilled professionals, and where every partnership creates meaningful opportunities for growth and development on both sides.', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Values Section -->
            <section class="values-section section-padding">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Our Values', 'aetherbloom'); ?></h2>
                    </div>
                    <div class="content-image-layout">
                        <div class="content-card glassmorphism-card values-card-container">
                            <div class="values-list">
                                <div class="value-item">
                                    <h4><?php esc_html_e('Integrity', 'aetherbloom'); ?></h4>
                                    <p class="value-description"><?php esc_html_e('We operate with complete transparency and honesty in all our dealings. Trust is earned through consistent, reliable actions and open communication.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Respect', 'aetherbloom'); ?></h4>
                                    <p class="value-description"><?php esc_html_e('We value diversity, embrace different perspectives, and treat every individual with dignity. Mutual respect is the foundation of every relationship we build.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Accountability', 'aetherbloom'); ?></h4>
                                    <p class="value-description"><?php esc_html_e('We take ownership of our actions and responsibilities. Every team member is committed to delivering on promises and contributing to shared success.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Excellence', 'aetherbloom'); ?></h4>
                                    <p class="value-description"><?php esc_html_e('We don\'t settle. We strive to exceed expectations through innovation, high standards, and a genuine drive to deliver world-class service.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Empowerment', 'aetherbloom'); ?></h4>
                                    <p class="value-description"><?php esc_html_e('We believe in the power of opportunity to transform lives. We create pathways for South African professionals to reach their full potential while delivering exceptional value to our UK clients.', 'aetherbloom'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/values.webp'); ?>" alt="<?php esc_attr_e('Our Values Image', 'aetherbloom'); ?>" class="section-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Founders Section -->
            <section class="founders-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Meet Our Founders', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('The Aetherbloom Story: Founders\' Expertise as Your Strategic Advantage', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="founders-grid">
                        <div class="founder-profile">
                            <div class="founder-content">
                                <div class="founder-header">
                                    <div class="founder-details">
                                        <h3 class="founder-name"><?php esc_html_e('Della', 'aetherbloom'); ?></h3>
                                        <p class="founder-title"><?php esc_html_e('Co-founder', 'aetherbloom'); ?></p>
                                        <p class="founder-location"><?php esc_html_e('Cape Town, South Africa', 'aetherbloom'); ?></p>
                                    </div>
                                    <div class="founder-image">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/della-headshot.webp'); ?>" alt="<?php esc_attr_e('Della - Co-founder', 'aetherbloom'); ?>" class="founder-photo">
                                    </div>
                                </div>
                                <div class="founder-tagline">
                                    <h4><?php esc_html_e('Della\'s Leadership Legacy', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="founder-description">
                                    <p><?php esc_html_e('With years of experience as a Senior HR Lead in the UK Civil Service, Della brings a deep, practical understanding of how to build high-performing teams within some of the most regulated and complex environments. This background has shaped Aetherbloom\'s commitment to excellence in every aspect of our operations. From rigorous quality control to ethical, transparent staffing practices, we ensure our solutions not only meet but exceed industry standards.', 'aetherbloom'); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="founder-profile">
                            <div class="founder-content">
                                <div class="founder-header">
                                    <div class="founder-details">
                                        <h3 class="founder-name"><?php esc_html_e('Grace', 'aetherbloom'); ?></h3>
                                        <p class="founder-title"><?php esc_html_e('Co-founder', 'aetherbloom'); ?></p>
                                        <p class="founder-location"><?php esc_html_e('London, UK', 'aetherbloom'); ?></p>
                                    </div>
                                    <div class="founder-image">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/grace-headshot.webp'); ?>" alt="<?php esc_attr_e('Grace - Co-founder', 'aetherbloom'); ?>" class="founder-photo">
                                    </div>
                                </div>
                                <div class="founder-tagline">
                                    <h4><?php esc_html_e('Grace\'s Analytical Edge', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="founder-description">
                                    <p><?php esc_html_e('Based in the UK, Grace architects Aetherbloom\'s client strategy and drives our global growth, bringing a diverse background in strategic leadership, hospitality and recruitment. Grace provides a unique perspective on understanding client needs, building strong and lasting relationships. She merges her recruitment experience with data science from her previous roles to create a talent-matching engine powered by precision. By analysing workforce trends, cultural fit and performance metrics, we guarantee staff who excel in both skill and alignment with your brand values.', 'aetherbloom'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_footer(); ?>

        </div>
    </main>
</div>
