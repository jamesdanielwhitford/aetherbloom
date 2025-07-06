<?php
// File: /wp-content/themes/aetherbloom/page-services.php

/**
 * Template for Services page - Updated to match homepage structure
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
        <div class="content-wrapper">
            <!-- Page Header Section - Moved inside content-wrapper -->
            <section class="page-header">
                <div class="container">
                    <h1 class="page-title"><?php esc_html_e('Our Services', 'aetherbloom'); ?></h1>
                    <p class="page-subtitle"><?php esc_html_e('Comprehensive BPO Solutions for Your Business', 'aetherbloom'); ?></p>
                </div>
            </section>

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
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/service-technical-support.svg'); ?>" alt="Technical Support">
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
                            <h3><?php esc_html_e('Digital Marketing Support', 'aetherbloom'); ?></h3>
                            <p>Social media management, content creation, and campaign assistance to boost your online presence.</p>
                        </div>
                        <div class="additional-service-item">
                            <h3><?php esc_html_e('Quality Assurance', 'aetherbloom'); ?></h3>
                            <p>Comprehensive testing and quality control processes to ensure excellence in service delivery.</p>
                        </div>
                        <div class="additional-service-item">
                            <h3><?php esc_html_e('Business Analytics', 'aetherbloom'); ?></h3>
                            <p>Data analysis and reporting services to help you make informed business decisions.</p>
                        </div>
                        <div class="additional-service-item">
                            <h3><?php esc_html_e('Training & Development', 'aetherbloom'); ?></h3>
                            <p>Customized training programs for your team and our staff to ensure optimal performance.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section class="why-choose-section">
                <div class="container">
                    <h2><?php esc_html_e('Why Choose Aetherbloom?', 'aetherbloom'); ?></h2>
                    <div class="reasons-grid">
                        <div class="reason-card">
                            <div class="reason-icon">
                                ⚡
                            </div>
                            <h3><?php esc_html_e('Lightning Fast Setup', 'aetherbloom'); ?></h3>
                            <p>Get your team operational within 48 hours with our streamlined onboarding process.</p>
                        </div>
                        <div class="reason-card">
                            <div class="reason-icon">
                                🛡️
                            </div>
                            <h3><?php esc_html_e('GDPR Compliant', 'aetherbloom'); ?></h3>
                            <p>Full compliance with UK and EU data protection regulations ensures your data security.</p>
                        </div>
                        <div class="reason-card">
                            <div class="reason-icon">
                                💰
                            </div>
                            <h3><?php esc_html_e('Cost Effective', 'aetherbloom'); ?></h3>
                            <p>Reduce operational costs by up to 60% while maintaining premium service quality.</p>
                        </div>
                        <div class="reason-card">
                            <div class="reason-icon">
                                🎯
                            </div>
                            <h3><?php esc_html_e('UK-Trained Teams', 'aetherbloom'); ?></h3>
                            <p>All staff receive comprehensive UK compliance and cultural training before deployment.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services CTA Section -->
            <section class="services-cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><?php esc_html_e('Ready to Transform Your Business?', 'aetherbloom'); ?></h2>
                        <p>Get started with a free consultation and discover how Aetherbloom can help streamline your operations and boost your bottom line.</p>
                        <div class="cta-buttons">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-primary">
                                <?php esc_html_e('Get Started Today', 'aetherbloom'); ?>
                            </a>
                            <a href="<?php echo esc_url(home_url('/about')); ?>" class="cta-secondary">
                                <?php esc_html_e('Learn More About Us', 'aetherbloom'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>