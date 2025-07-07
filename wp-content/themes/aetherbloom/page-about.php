<?php
// File: /wp-content/themes/aetherbloom/page-about.php

/**
 * Template for About page - Complete Redesign with Story-Driven Layout
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

            <!-- Founders Section - Split Screen Asymmetrical Layout -->
            <section class="founders-section">
                <div class="container">
                    <!-- Della's Profile - 60% Left -->
                    <div class="founder-profile founder-della">
                        <div class="founder-content">
                            <div class="founder-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/della-founder.jpg'); ?>" alt="Della - Co-Founder" class="founder-photo">
                                <div class="founder-title-overlay">
                                    <span class="founder-role"><?php esc_html_e('Co-Founder & HR Lead', 'aetherbloom'); ?></span>
                                </div>
                            </div>
                            <div class="founder-details">
                                <h3><?php esc_html_e('Della\'s Leadership Legacy', 'aetherbloom'); ?></h3>
                                <p class="founder-intro"><?php esc_html_e('Civil Service Senior HR Lead', 'aetherbloom'); ?></p>
                                <div class="founder-description">
                                    <p><?php esc_html_e('With years as a Civil Service Senior HR Lead, our co-founder has mastered the art of building high-performing teams within strict compliance frameworks. This expertise ensures Aetherbloom delivers rigorous quality control, ethical staffing practices, and seamless scalability critical for UK clients navigating complex labor markets.', 'aetherbloom'); ?></p>
                                    <div class="achievements-highlight">
                                        <h4><?php esc_html_e('Key Achievements:', 'aetherbloom'); ?></h4>
                                        <ul>
                                            <li><?php esc_html_e('Designed Aetherbloom\'s proprietary "UK-Ready" training program, bridging SA talent with SME needs', 'aetherbloom'); ?></li>
                                            <li><?php esc_html_e('Advocates for women\'s empowerment: 65% of Aetherbloom\'s SA workforce are upskilled from disadvantaged backgrounds', 'aetherbloom'); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grace's Profile - 40% Right, Different Layout -->
                    <div class="founder-profile founder-grace">
                        <div class="founder-content-alt">
                            <div class="founder-header">
                                <h3><?php esc_html_e('Grace Bernard-Broadreck, MSc', 'aetherbloom'); ?></h3>
                                <p class="founder-title"><?php esc_html_e('Co-Founder & Managing Director, Client Strategy & Global Growth', 'aetherbloom'); ?></p>
                                <p class="founder-location"><?php esc_html_e('Based in London, United Kingdom', 'aetherbloom'); ?></p>
                            </div>
                            <div class="founder-image-right">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/grace-founder.jpg'); ?>" alt="Grace Bernard-Broadreck" class="founder-photo-alt">
                            </div>
                            <div class="founder-story">
                                <h4><?php esc_html_e('Your Compliance Guardian & Growth Partner', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('A former Recruitment consultant and civil service lead data analyst, Grace combines public-sector rigor with private-sector agility. She oversees client strategy, ensuring Aetherbloom\'s solutions are GDPR-compliant, cost-transparent, and tailored to UK SMEs.', 'aetherbloom'); ?></p>
                                <p><?php esc_html_e('Grace architects Aetherbloom\'s client strategy and drives our global growth, bringing a diverse background in strategic leadership, hospitality and recruitment. She provides a unique perspective on understanding client needs, building strong and lasting relationships. She merges her recruitment experience with data science from her previous roles to create a talent-matching engine powered by precision.', 'aetherbloom'); ?></p>
                                <div class="grace-achievements">
                                    <h5><?php esc_html_e('Key Achievements:', 'aetherbloom'); ?></h5>
                                    <ul>
                                        <li><?php esc_html_e('Scaled Aetherbloom\'s client base through data-driven talent matching', 'aetherbloom'); ?></li>
                                        <li><?php esc_html_e('Pioneered the dual-hub model, enabling real-time collaboration between UK clients and SA teams', 'aetherbloom'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why South Africa - Infographic Style with Floating Elements -->
            <section class="why-south-africa-section">
                <div class="sa-background-image"></div>
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Why South Africa?', 'aetherbloom'); ?></h2>
                        <p class="section-intro"><?php esc_html_e('Strategic advantages that deliver real results for UK businesses', 'aetherbloom'); ?></p>
                    </div>
                    <div class="advantages-layout">
                        <div class="advantage-float advantage-cost">
                            <div class="advantage-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cost-efficiency-icon.svg'); ?>" alt="Cost Efficiency">
                            </div>
                            <div class="advantage-content">
                                <h3><?php esc_html_e('Cost Efficiency', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Reduce operational costs by up to 50% without sacrificing quality.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        <div class="advantage-float advantage-culture">
                            <div class="advantage-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cultural-synergy-icon.svg'); ?>" alt="Cultural Synergy">
                            </div>
                            <div class="advantage-content">
                                <h3><?php esc_html_e('Cultural Synergy', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('A workforce fluent in English, familiar with UK norms, and trained in your industry\'s nuances.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        <div class="advantage-float advantage-timezone">
                            <div class="advantage-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/timezone-icon.svg'); ?>" alt="Time Zone Advantage">
                            </div>
                            <div class="advantage-content">
                                <h3><?php esc_html_e('Time Zone Advantage', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Near-UK working hours for real-time collaboration.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission Section - Action Hero Background -->
            <section class="mission-section">
                <div class="mission-background"></div>
                <div class="mission-overlay">
                    <div class="container">
                        <div class="mission-content">
                            <h2><?php esc_html_e('Our Mission', 'aetherbloom'); ?></h2>
                            <div class="mission-statement">
                                <p><?php esc_html_e('Aetherbloom\'s mission is to strategically connect UK businesses with highly skilled professionals in South Africa, delivering agile, high-quality outsourcing solutions that are ethically driven, cost-effective and empower individuals through meaningful economic opportunities and professional development.', 'aetherbloom'); ?></p>
                                <p><?php esc_html_e('By combining rigorous recruitment and UK-standard training with social responsibility, we empower businesses to scale their support functions while driving real impact across borders.', 'aetherbloom'); ?></p>
                            </div>
                            <div class="mission-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary btn-large">
                                    <?php esc_html_e('Start Your Journey With Us', 'aetherbloom'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Strategic Allies - Staggered Layout -->
            <section class="strategic-allies-section">
                <div class="container">
                    <div class="section-header-center">
                        <h2><?php esc_html_e('Strategic Allies', 'aetherbloom'); ?></h2>
                        <p class="section-tagline"><?php esc_html_e('Expanding Our Capabilities Through Trusted Expertise', 'aetherbloom'); ?></p>
                        <p class="section-subtitle"><?php esc_html_e('Your vision, our collective expertise – no borders, no barriers.', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="allies-staggered-grid">
                        <!-- Primary Ally - Large Feature -->
                        <div class="ally-card ally-primary">
                            <div class="ally-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/james-witford.jpg'); ?>" alt="James Daniel Witford">
                            </div>
                            <div class="ally-content">
                                <h3><?php esc_html_e('James Daniel Witford', 'aetherbloom'); ?></h3>
                                <p class="ally-role"><?php esc_html_e('Software Developer & UX Specialist', 'aetherbloom'); ?></p>
                                <p class="ally-description"><?php esc_html_e('"Code. Design. Strategy. James brings it all together to power Aetherbloom\'s future with seamless, user-friendly tech."', 'aetherbloom'); ?></p>
                            </div>
                        </div>

                        <!-- Secondary Allies - Smaller Cards -->
                        <div class="ally-card ally-secondary">
                            <div class="ally-content-compact">
                                <h4><?php esc_html_e('Sally Jones', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('Business Strategy Advisor', 'aetherbloom'); ?></p>
                                <p class="ally-quote"><?php esc_html_e('"Architecting scalable cross-continent growth frameworks for UK-South Africa alignment."', 'aetherbloom'); ?></p>
                            </div>
                        </div>

                        <div class="ally-card ally-secondary">
                            <div class="ally-content-compact">
                                <h4><?php esc_html_e('Gugulethu Motsei', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('International Finance Manager', 'aetherbloom'); ?></p>
                                <p class="ally-quote"><?php esc_html_e('"Navigating currency, tax, and compliance for seamless UK-SA financial operations."', 'aetherbloom'); ?></p>
                            </div>
                        </div>

                        <div class="ally-card ally-tertiary">
                            <div class="ally-content-compact">
                                <h4><?php esc_html_e('Aaron Hayle', 'aetherbloom'); ?></h4>
                                <p class="ally-role"><?php esc_html_e('Business Coach & Leadership Consultant', 'aetherbloom'); ?></p>
                                <p class="ally-quote"><?php esc_html_e('"Optimising team resilience and performance in hybrid UK/SA workforce models."', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="allies-cta">
                        <p><?php esc_html_e('Want to connect with our experts?', 'aetherbloom'); ?></p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-outline">
                            <?php esc_html_e('Schedule an Intro', 'aetherbloom'); ?>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Journey Timeline - Horizontal Layout -->
            <section class="journey-section">
                <div class="container">
                    <div class="journey-header">
                        <h2><?php esc_html_e('Our Journey', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Building bridges between UK innovation and South African talent', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="timeline-horizontal">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4><?php esc_html_e('Foundation', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Civil Service expertise meets entrepreneurial vision', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4><?php esc_html_e('Innovation', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Developed UK-Ready training program', 'aetherbloom'); ?></p>
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
