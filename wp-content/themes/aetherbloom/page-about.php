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
    
    <main class="site-main about-page" id="main">
        <div class="content-wrapper">
            
            <!-- Hero Section - Full-width video background with story overlay -->
            <section class="about-hero-section">
                <div class="hero-background-video">
                    <video class="hero-video" autoplay muted loop playsinline>
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/about.mp4'); ?>" type="video/mp4">
                        <!-- Fallback for browsers that don't support video -->
                        <div class="video-fallback"></div>
                    </video>
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

            <!-- Mission, Vision & Values Consolidated Section -->
            <section class="mission-vision-values-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Our Foundation', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('The mission, vision and values that drive everything we do', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="foundation-cards">
                        <div class="foundation-card active" data-target="mission">
                            <div class="card-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7V12C2 17.55 5.84 22.54 9.35 23.85C10.15 24.05 11.15 24.05 12 24C12.85 24.05 13.85 24.05 14.65 23.85C18.16 22.54 22 17.55 22 12V7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Our Mission', 'aetherbloom'); ?></h3>
                        </div>
                        
                        <div class="foundation-card" data-target="vision">
                            <div class="card-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12S4 5 12 5S23 12 23 12S20 19 12 19S1 12 1 12Z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Our Vision', 'aetherbloom'); ?></h3>
                        </div>
                        
                        <div class="foundation-card" data-target="values">
                            <div class="card-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 14C19 18.4 15.4 22 11 22C6.6 22 3 18.4 3 14C3 10.6 6.6 7 11 7C15.4 7 19 10.6 19 14Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Our Values', 'aetherbloom'); ?></h3>
                        </div>
                    </div>
                    
                    <div class="foundation-content">
                        <div class="content-panel active" id="mission">
                            <p><?php esc_html_e('Aetherbloom\'s mission is to strategically connect UK businesses with highly skilled professionals in South Africa, delivering agile, high-quality outsourcing solutions that are ethically driven, cost-effective and empower individuals through meaningful economic opportunities and professional development. By combining rigorous recruitment and UK-standard training with social responsibility, we empower businesses to scale their support functions whilst driving real impact across borders.', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="content-panel" id="vision">
                            <p><?php esc_html_e('To become the leading bridge between UK businesses and exceptional global talent, recognised for our ethical approach, innovative solutions, and positive impact on communities. We envision a future where geographical boundaries no longer limit access to skilled professionals, and where every partnership creates meaningful opportunities for growth and development on both sides.', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="content-panel" id="values">
                            <div class="values-grid">
                                <div class="value-item">
                                    <h4><?php esc_html_e('Integrity', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('We operate with complete transparency and honesty in all our dealings. Trust is earned through consistent, reliable actions and open communication.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Respect', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('We value diversity, embrace different perspectives, and treat every individual with dignity. Mutual respect is the foundation of every relationship we build.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Accountability', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('We take ownership of our actions and responsibilities. Every team member is committed to delivering on promises and contributing to shared success.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Excellence', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('We don\'t settle. We strive to exceed expectations through innovation, high standards, and a genuine drive to deliver world-class service.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="value-item">
                                    <h4><?php esc_html_e('Empowerment', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('We believe in the power of opportunity to transform lives. We create pathways for South African professionals to reach their full potential while delivering exceptional value to our UK clients.', 'aetherbloom'); ?></p>
                                </div>
                            </div>
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
                                <div class="founder-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/della-headshot.jpg'); ?>" alt="<?php esc_attr_e('Della - Co-founder', 'aetherbloom'); ?>" class="founder-photo">
                                </div>
                                <div class="founder-info">
                                    <h3 class="founder-name"><?php esc_html_e('Della', 'aetherbloom'); ?></h3>
                                    <p class="founder-title"><?php esc_html_e('Co-founder', 'aetherbloom'); ?></p>
                                    <p class="founder-location"><?php esc_html_e('Cape Town, South Africa', 'aetherbloom'); ?></p>
                                    <div class="founder-tagline">
                                        <h4><?php esc_html_e('Della\'s Leadership Legacy', 'aetherbloom'); ?></h4>
                                    </div>
                                    <div class="founder-description">
                                        <p><?php esc_html_e('With years as a Civil Service Senior HR Lead, our co-founder has mastered the art of building high-performing teams within strict compliance frameworks. This expertise ensures Aetherbloom delivers rigorous quality control, ethical staffing practices, and seamless scalability critical for UK clients navigating complex labor markets.', 'aetherbloom'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="founder-profile">
                            <div class="founder-content">
                                <div class="founder-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/grace-headshot.jpg'); ?>" alt="<?php esc_attr_e('Grace - Co-founder', 'aetherbloom'); ?>" class="founder-photo">
                                </div>
                                <div class="founder-info">
                                    <h3 class="founder-name"><?php esc_html_e('Grace', 'aetherbloom'); ?></h3>
                                    <p class="founder-title"><?php esc_html_e('Co-founder', 'aetherbloom'); ?></p>
                                    <p class="founder-location"><?php esc_html_e('London, UK', 'aetherbloom'); ?></p>
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
                </div>
            </section>
            <?php get_footer(); ?>

        </div>
    </main>
</div>
