<?php
// File: /wp-content/themes/aetherbloom/page-about.php

/**
 * Template for About page - Complete content update with founder profiles and strategic allies
 *
 * @package Aetherbloom
 * @version 2.0.0
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
            
            <!-- Hero Section - Full-width background with story overlay -->
            <section class="about-hero-section">
                <div class="hero-background-image"></div>
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

            <!-- Mission & Vision Section -->
            <section class="mission-vision-section">
                <div class="container">
                    <div class="mission-vision-grid">
                        <div class="mission-card">
                            <div class="card-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7V12C2 17.55 5.84 22.54 9.35 23.85C10.15 24.05 11.15 24.05 12 24C12.85 24.05 13.85 24.05 14.65 23.85C18.16 22.54 22 17.55 22 12V7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Our Mission', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Aetherbloom\'s mission is to strategically connect UK businesses with highly skilled professionals in South Africa, delivering agile, high-quality outsourcing solutions that are ethically driven, cost-effective and empower individuals through meaningful economic opportunities and professional development. By combining rigorous recruitment and UK-standard training with social responsibility, we empower businesses to scale their support functions while driving real impact across borders.', 'aetherbloom'); ?></p>
                        </div>
                        <div class="vision-card">
                            <div class="card-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Vision', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('To be the leading force in UK-South Africa business partnerships, globally recognised for pioneering a model of exceptional outsourcing that not only drives client success but also ignites transformative and lasting socio-economic growth in South African communities.', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Values Section -->
            <section class="core-values-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Core Values', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('The principles that guide everything we do', 'aetherbloom'); ?></p>
                    </div>
                    <div class="values-grid">
                        <div class="value-card">
                            <h4><?php esc_html_e('Integrity', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('We operate with honesty, transparency, and a deep commitment to ethical practices—in how we treat our clients, our team, and the communities we serve.', 'aetherbloom'); ?></p>
                        </div>
                        <div class="value-card">
                            <h4><?php esc_html_e('Respect', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('We value diversity, listen actively, and treat everyone with fairness and dignity. Mutual respect is the foundation of every relationship we build.', 'aetherbloom'); ?></p>
                        </div>
                        <div class="value-card">
                            <h4><?php esc_html_e('Accountability', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('We take ownership of our actions and responsibilities. Every team member is committed to delivering on promises and contributing to shared success.', 'aetherbloom'); ?></p>
                        </div>
                        <div class="value-card">
                            <h4><?php esc_html_e('Excellence', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('We don\'t settle. We strive to exceed expectations through innovation, high standards, and a genuine drive to deliver world-class service.', 'aetherbloom'); ?></p>
                        </div>
                        <div class="value-card">
                            <h4><?php esc_html_e('Empowerment', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('We believe in the power of opportunity to transform lives. By investing in people, celebrating differences, and amplifying every voice, we unlock potential—for our team and for yours.', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Founders Section - Split Screen Asymmetrical Layout -->
            <section class="founders-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Meet the Founders', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Co-founded by industry leaders bridging opportunity and excellence across continents', 'aetherbloom'); ?></p>
                    </div>
                    
                    <!-- Della's Profile -->
                    <div class="founder-profile founder-della">
                        <div class="founder-content">
                            <div class="founder-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/della-potgieter.jpg'); ?>" alt="Della Potgieter" class="founder-photo">
                            </div>
                            <div class="founder-info">
                                <div class="founder-header">
                                    <h3 class="founder-name"><?php esc_html_e('Della Potgieter', 'aetherbloom'); ?></h3>
                                    <p class="founder-title"><?php esc_html_e('Co-Founder & Operations Director, Regional Leadership', 'aetherbloom'); ?></p>
                                    <p class="founder-location"><?php esc_html_e('Based in Johannesburg, South Africa', 'aetherbloom'); ?></p>
                                </div>
                                <div class="founder-tagline">
                                    <h4><?php esc_html_e('The Architect of High-Performing Teams', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="founder-description">
                                    <p><?php esc_html_e('With 10+ years in HR leadership across London\'s competitive corporate sector, Della spearheads Aetherbloom\'s South African operations. She handpicks talent ensuring every hire is rigorously trained in UK business practices, technical certifications, and cultural alignment.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="founder-achievements">
                                    <h5><?php esc_html_e('Key Achievements:', 'aetherbloom'); ?></h5>
                                    <ul>
                                        <li><?php esc_html_e('Designed Aetherbloom\'s proprietary "UK-Ready" training program, bridging SA talent with SME needs.', 'aetherbloom'); ?></li>
                                        <li><?php esc_html_e('Advocates for women\'s empowerment: 65% of Aetherbloom\'s SA workforce are upskilled from disadvantaged backgrounds.', 'aetherbloom'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grace's Profile -->
                    <div class="founder-profile founder-grace">
                        <div class="founder-content">
                            <div class="founder-info">
                                <div class="founder-header">
                                    <h3 class="founder-name"><?php esc_html_e('Grace Bernard-Broadreck, MSc', 'aetherbloom'); ?></h3>
                                    <p class="founder-title"><?php esc_html_e('Co-Founder & Managing Director, Client Strategy & Global Growth', 'aetherbloom'); ?></p>
                                    <p class="founder-location"><?php esc_html_e('Based in London, United Kingdom', 'aetherbloom'); ?></p>
                                </div>
                                <div class="founder-tagline">
                                    <h4><?php esc_html_e('Your Compliance Guardian & Growth Partner', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="founder-description">
                                    <p><?php esc_html_e('A former Recruitment consultant and civil service lead data analyst, Grace combines public-sector rigor with private-sector agility. She oversees client strategy, ensuring Aetherbloom\'s solutions are GDPR-compliant, cost-transparent, and tailored to UK SMEs.', 'aetherbloom'); ?></p>
                                </div>
                                <div class="founder-achievements">
                                    <h5><?php esc_html_e('Key Achievements:', 'aetherbloom'); ?></h5>
                                    <ul>
                                        <li><?php esc_html_e('Scaled Aetherbloom\'s client base through data-driven talent matching.', 'aetherbloom'); ?></li>
                                        <li><?php esc_html_e('Pioneered the dual-hub model, enabling real-time collaboration between UK clients and SA teams.', 'aetherbloom'); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="founder-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/grace-bernard-broadreck.jpg'); ?>" alt="Grace Bernard-Broadreck" class="founder-photo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Strategic Allies Section -->
            <section class="strategic-allies-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Strategic Allies', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Expanding Our Capabilities Through Trusted Expertise', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="allies-grid">
                        <div class="ally-card">
                            <div class="ally-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/james-witford.jpg'); ?>" alt="James Daniel Witford" class="ally-photo">
                            </div>
                            <div class="ally-info">
                                <h4 class="ally-name"><?php esc_html_e('James Daniel Witford', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('Software Developer & UX Specialist', 'aetherbloom'); ?></p>
                                <p class="ally-description"><?php esc_html_e('"Code. Design. Strategy. James brings it all together to power Aetherbloom\'s future with seamless, user-friendly tech."', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="ally-card">
                            <div class="ally-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sally-jones.jpg'); ?>" alt="Sally Jones" class="ally-photo">
                            </div>
                            <div class="ally-info">
                                <h4 class="ally-name"><?php esc_html_e('Sally Jones', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('Business Strategy Advisor', 'aetherbloom'); ?></p>
                                <p class="ally-description"><?php esc_html_e('"Architecting scalable cross-continent growth frameworks for UK-South Africa alignment."', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="ally-card">
                            <div class="ally-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gugulethu-motsei.jpg'); ?>" alt="Gugulethu Motsei" class="ally-photo">
                            </div>
                            <div class="ally-info">
                                <h4 class="ally-name"><?php esc_html_e('Gugulethu Motsei', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('International Finance Manager', 'aetherbloom'); ?></p>
                                <p class="ally-description"><?php esc_html_e('"Navigating currency, tax, and compliance for seamless UK-SA financial operations."', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="ally-card">
                            <div class="ally-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/aaron-hayle.jpg'); ?>" alt="Aaron Hayle" class="ally-photo">
                            </div>
                            <div class="ally-info">
                                <h4 class="ally-name"><?php esc_html_e('Aaron Hayle', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('Business Coach & Leadership Consultant', 'aetherbloom'); ?></p>
                                <p class="ally-description"><?php esc_html_e('"Optimising team resilience and performance in hybrid UK/SA workforce models."', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="ally-card">
                            <div class="ally-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/karen-placeholder.jpg'); ?>" alt="Karen" class="ally-photo">
                            </div>
                            <div class="ally-info">
                                <h4 class="ally-name"><?php esc_html_e('Karen', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('TBA', 'aetherbloom'); ?></p>
                                <p class="ally-description"><?php esc_html_e('Strategic partner role to be announced.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="allies-cta">
                        <p class="allies-tagline"><?php esc_html_e('"Your vision, our collective expertise – no borders, no barriers."', 'aetherbloom'); ?></p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">
                            <?php esc_html_e('Want to connect with our experts? Schedule an intro', 'aetherbloom'); ?>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Company Timeline Section -->
            <section class="company-timeline-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Our Journey', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('From vision to transformation', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="timeline-container">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4><?php esc_html_e('Foundation', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Founded by UK Civil Service expertise meeting South African talent', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4><?php esc_html_e('Growth', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Scaled through data-driven talent matching', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4><?php esc_html_e('Impact', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('65% women from disadvantaged backgrounds empowered', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trust Badges Section -->
            <section class="trust-badges-section">
                <div class="container">
                    <div class="badges-grid">
                        <div class="badge-item">
                            <div class="badge-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7V12C2 17.55 5.84 22.54 9.35 23.85C10.15 24.05 11.15 24.05 12 24C12.85 24.05 13.85 24.05 14.65 23.85C18.16 22.54 22 17.55 22 12V7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="badge-info">
                                <h4><?php esc_html_e('UK Company', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Reg. No: XXXXXXXX', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="badge-item">
                            <div class="badge-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L3.09 8.26L4 21L12 17L20 21L20.91 8.26L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="badge-info">
                                <h4><?php esc_html_e('Level 1 B-BBEE', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Contributor', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Final CTA Section -->
            <section class="about-cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><?php esc_html_e('Ready to Transform Your Business?', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Join the UK businesses already scaling with Aetherbloom\'s strategic outsourcing solutions.', 'aetherbloom'); ?></p>
                        <div class="cta-buttons">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary btn-large">
                                <?php esc_html_e('Claim Your Free Strategy Session', 'aetherbloom'); ?>
                            </a>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="btn btn-outline btn-large">
                                <?php esc_html_e('Explore Our Services', 'aetherbloom'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_footer(); ?>
        </div>
    </main>
</div>
