<?php
// File: /wp-content/themes/aetherbloom/page-careers.php

/**
 * Template for Careers page - Join Aetherbloom with Dover careers integration
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
    
    <main class="site-main careers-page" id="main">
        <div class="content-wrapper">
            
            <!-- Hero Section -->
            <section class="careers-hero">
                <div class="hero-background-video">
                    <video class="hero-video" autoplay muted loop playsinline preload="metadata" poster="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/careers-video.webp'); ?>">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/careers-video.webm'); ?>" type="video/webm">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/careers-video.mp4'); ?>" type="video/mp4">
                        <!-- Fallback for browsers that don't support video -->
                        <div class="video-fallback"></div>
                    </video>
                    <div class="hero-video-overlay"></div>
                </div>
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title"><?php esc_html_e('Join Aetherbloom', 'aetherbloom'); ?></h1>
                            <p class="hero-subtitle"><?php esc_html_e('Where Talent Meets Global Opportunity', 'aetherbloom'); ?></p>
                            <div class="hero-description">
                                <p><?php esc_html_e('Build your career with us and make a real impact while serving UK clients from South Africa', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Work With Us Section -->
            <section class="why-work-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Why Work With Us?', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Join a company that invests in your growth and development', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4M4.5 7A1.5 1.5 0 0 0 3 8.5v5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 11.5 7zM8 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('UK Compliance Training', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Receive comprehensive training in UK business standards, GDPR compliance, and professional certifications', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                    <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Competitive Salaries', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Attractive compensation packages with performance bonuses and career progression opportunities', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path d="M23 21V19C23 18.1332 22.7139 17.2893 22.1794 16.5781C21.6449 15.8669 20.8897 15.3257 20.0061 15.0107" stroke="currentColor" stroke-width="2"/>
                                    <path d="M16 3.13C16.8892 3.44431 17.6447 3.98544 18.1794 4.69653C18.7141 5.40762 19.0004 6.25152 19.0004 7.11824C19.0004 7.98496 18.7141 8.82886 18.1794 9.53995C17.6447 10.251 16.8892 10.7922 16 11.1065" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Growth-Focused Culture', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Inclusive environment with mentorship programs, skills development, and clear advancement pathways', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Current Openings Section -->
            <section class="openings-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Current Opportunities', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Explore our latest job openings and find your perfect role', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="dover-careers-container">
                        <div class="careers-iframe-wrapper">
                            <iframe 
                                width="800px" 
                                height="700px" 
                                src="https://app.dover.com/jobs/aetherbloom?embed=1" 
                                frameborder="0"
                                title="Aetherbloom Career Opportunities"
                                class="dover-careers-iframe">
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Employee Testimonial Section -->
            <section class="testimonial-section">
                <div class="container">
                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke="#d84e28" stroke-width="1.5" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275" />
                                <path stroke-linecap="round" stroke-linejoin="round" fill="#d84e28" stroke="none" stroke-width="0" d="M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <blockquote>
                            <p><?php esc_html_e('"Aetherbloom invested in my GDPR certification – now I support UK clients with confidence. The training and support I received helped me grow professionally and personally."', 'aetherbloom'); ?></p>
                        </blockquote>
                        <cite>
                            <strong><?php esc_html_e('Sarah H.', 'aetherbloom'); ?></strong>
                            <span><?php esc_html_e('Customer Success Specialist', 'aetherbloom'); ?></span>
                        </cite>
                    </div>
                </div>
            </section>

            <!-- Resource Download Section -->
            <section class="resource-download-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Unlock Your Potential', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Download our free guide to boost your career', 'aetherbloom'); ?></p>
                    </div>
                    <div class="resource-card">
                        <h3><?php esc_html_e('The 67-Minute Advantage', 'aetherbloom'); ?></h3>
                        <p><?php esc_html_e('Your Guide to Maximizing Productivity and Impact', 'aetherbloom'); ?></p>
                        <a href="<?php echo esc_url(get_template_directory_uri() . '/assets/documents/The 67-Minute Advantage (Your Guide).pdf'); ?>" class="resource-btn" download>
                            <?php esc_html_e('Download Guide', 'aetherbloom'); ?>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="careers-contact-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Questions About Joining Our Team?', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Get in touch with our HR team for more information about opportunities and application process', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4><?php esc_html_e('Email Us', 'aetherbloom'); ?></h4>
                                    <a href="mailto:hello@aetherbloom.co.uk" class="contact-link">hello@aetherbloom.co.uk</a>
                                    <p><?php esc_html_e('For general inquiries and applications', 'aetherbloom'); ?></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7293C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3147 6.72533 15.2662 5.19 12.85C3.49998 10.2412 2.44818 7.27099 2.12 4.18C2.09501 3.90347 2.12788 3.62476 2.21649 3.36162C2.3051 3.09849 2.44748 2.85669 2.63519 2.65162C2.8229 2.44655 3.05119 2.28271 3.30547 2.17052C3.55975 2.05833 3.83498 2.00026 4.11 2H7.11C7.59531 1.99522 8.06579 2.16708 8.43376 2.48353C8.80173 2.79999 9.04207 3.23945 9.11 3.72C9.23662 4.68007 9.47145 5.62273 9.81 6.53C9.94452 6.88792 9.97366 7.27691 9.8939 7.65088C9.81415 8.02485 9.62886 8.36811 9.36 8.64L8.09 9.91C9.51355 12.4135 11.5865 14.4865 14.09 15.91L15.36 14.64C15.6319 14.3711 15.9751 14.1859 16.3491 14.1061C16.7231 14.0263 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="contact-details">
                                    <h4><?php esc_html_e('Call Us', 'aetherbloom'); ?></h4>
                                    <a href="tel:+442080507881" class="contact-link">+44 208 0507 881</a>
                                    <p><?php esc_html_e('Mon-Fri, 8 AM – 6 PM GMT', 'aetherbloom'); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-cta">
                            <button onclick="openScheduler()" class="btn btn-primary btn-large">
                                <?php esc_html_e('Join Our Talent Pool', 'aetherbloom'); ?>
                            </button>
                            <p class="cta-note"><?php esc_html_e('Book a 15-minute call to discuss opportunities and learn more about our team', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>

<script>
function openScheduler() {
    window.open('https://app.dover.com/apply/Aetherboom/cbf5e60f-c6da-46ca-8ae4-b79e020f2dff', '_blank');
}
</script>