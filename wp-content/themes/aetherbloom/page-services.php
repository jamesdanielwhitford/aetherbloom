<?php
// File: /wp-content/themes/aetherbloom/page-services.php

/**
 * Template for Services page
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
    
    <main class="site-main services-page" id="main">
        <div class="page-header">
            <div class="container">
                <h1 class="page-title"><?php esc_html_e('Our Services', 'aetherbloom'); ?></h1>
                <p class="page-subtitle"><?php esc_html_e('Comprehensive BPO Solutions for Your Business', 'aetherbloom'); ?></p>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Services Overview Section -->
            <section class="services-overview-section">
                <div class="container">
                    <div class="overview-content">
                        <h2><?php esc_html_e('Tailored Solutions for Every Business Need', 'aetherbloom'); ?></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </section>

            <!-- Core Services Section -->
            <section class="core-services-section">
                <div class="container">
                    <h2><?php esc_html_e('Core Services', 'aetherbloom'); ?></h2>
                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/service-customer-support.svg'); ?>" alt="Customer Support">
                            </div>
                            <h3><?php esc_html_e('Customer Support', 'aetherbloom'); ?></h3>
                            <p class="service-subtitle"><?php esc_html_e('24/7 Omnichannel Excellence', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="service-features">
                                <li>24/7 Multi-channel Support</li>
                                <li>UK Compliance Training</li>
                                <li>Real-time Quality Monitoring</li>
                                <li>Native-level Communication</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/service-back-office.svg'); ?>" alt="Back Office Operations">
                            </div>
                            <h3><?php esc_html_e('Back Office Operations', 'aetherbloom'); ?></h3>
                            <p class="service-subtitle"><?php esc_html_e('Streamlined Efficiency', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="service-features">
                                <li>Data Processing & Entry</li>
                                <li>Financial Administration</li>
                                <li>HR Support Services</li>
                                <li>Document Management</li>
                            </ul>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/service-tech-support.svg'); ?>" alt="Technical Support">
                            </div>
                            <h3><?php esc_html_e('Technical Support', 'aetherbloom'); ?></h3>
                            <p class="service-subtitle"><?php esc_html_e('Expert Problem Solving', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="service-features">
                                <li>Tiered IT Helpdesk</li>
                                <li>Software Support</li>
                                <li>Technical Documentation</li>
                                <li>System Troubleshooting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Additional Services Section -->
            <section class="additional-services-section">
                <div class="container">
                    <h2><?php esc_html_e('Additional Services', 'aetherbloom'); ?></h2>
                    <div class="additional-services-grid">
                        <div class="additional-service-item">
                            <h4><?php esc_html_e('HR Support', 'aetherbloom'); ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="additional-service-item">
                            <h4><?php esc_html_e('Virtual Admin', 'aetherbloom'); ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="additional-service-item">
                            <h4><?php esc_html_e('Bookkeeping & Accounting', 'aetherbloom'); ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="additional-service-item">
                            <h4><?php esc_html_e('Data Analysis', 'aetherbloom'); ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="additional-service-item">
                            <h4><?php esc_html_e('Business Coaching', 'aetherbloom'); ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="additional-service-item">
                            <h4><?php esc_html_e('Website Design', 'aetherbloom'); ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Section -->
            <section class="why-choose-section">
                <div class="container">
                    <h2><?php esc_html_e('Why Clients Choose Aetherbloom', 'aetherbloom'); ?></h2>
                    <div class="reasons-grid">
                        <div class="reason-card">
                            <h3><?php esc_html_e('Ethical Outsourcing', 'aetherbloom'); ?></h3>
                            <p>Your support powers real employment for women in South Africa.</p>
                        </div>
                        <div class="reason-card">
                            <h3><?php esc_html_e('Culturally Aligned', 'aetherbloom'); ?></h3>
                            <p>Our teams are fluent in UK business standards & tone.</p>
                        </div>
                        <div class="reason-card">
                            <h3><?php esc_html_e('Tool Integration', 'aetherbloom'); ?></h3>
                            <p>We work with Zendesk, HubSpot, Shopify & more.</p>
                        </div>
                        <div class="reason-card">
                            <h3><?php esc_html_e('Fast Setup', 'aetherbloom'); ?></h3>
                            <p>Get up and running in as little as 7 days.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="services-cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><?php esc_html_e('Ready to Get Started?', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Transform your business with our expert BPO solutions', 'aetherbloom'); ?></p>
                        <div class="cta-buttons">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-primary"><?php esc_html_e('Contact Us Today', 'aetherbloom'); ?></a>
                            <a href="<?php echo esc_url(home_url('/#pricing')); ?>" class="cta-secondary"><?php esc_html_e('View Pricing', 'aetherbloom'); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<?php get_footer(); ?>