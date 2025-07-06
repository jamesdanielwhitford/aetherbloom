<?php
// File: /wp-content/themes/aetherbloom/page-impact.php

/**
 * Template for Impact page - Updated to match homepage structure
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
    
    <main class="site-main impact-page" id="main">
        <div class="content-wrapper">
            <!-- Page Header Section - Moved inside content-wrapper -->
            <section class="page-header">
                <div class="container">
                    <h1 class="page-title"><?php esc_html_e('Our Impact', 'aetherbloom'); ?></h1>
                    <p class="page-subtitle"><?php esc_html_e('Empowering Women, Transforming Futures', 'aetherbloom'); ?></p>
                </div>
            </section>

            <!-- Mission Overview Section -->
            <section class="mission-overview-section">
                <div class="container">
                    <div class="mission-content">
                        <h2><?php esc_html_e('Why We Do What We Do', 'aetherbloom'); ?></h2>
                        <div class="mission-grid">
                            <div class="mission-item">
                                <h3><?php esc_html_e('For UK Businesses:', 'aetherbloom'); ?></h3>
                                <p>Agile, affordable teams trained in UK compliance and cultural fluency, delivering premium service quality while reducing operational costs.</p>
                            </div>
                            <div class="mission-item">
                                <h3><?php esc_html_e('For South Africa:', 'aetherbloom'); ?></h3>
                                <p>Sustainable careers for women overcoming systemic barriers: domestic violence, poverty, and unemployment. Creating pathways to economic independence.</p>
                            </div>
                        </div>
                        <div class="mission-quote">
                            <p>"Your efficiency fuels their empowerment. Together, we're breaking cycles of poverty and building sustainable futures."</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reality Section -->
            <section class="reality-section">
                <div class="container">
                    <h2><?php esc_html_e('The Reality We\'re Changing', 'aetherbloom'); ?></h2>
                    <div class="statistics-grid">
                        <div class="stat-card">
                            <div class="stat-number">40%</div>
                            <div class="stat-description">Unemployment rate among South African women</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">1 in 4</div>
                            <div class="stat-description">Women experience gender-based violence</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">65%</div>
                            <div class="stat-description">Single mothers living in poverty</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">Limited</div>
                            <div class="stat-description">Access to quality employment opportunities</div>
                        </div>
                    </div>
                    <div class="human-cost">
                        <h3><?php esc_html_e('The Human Cost', 'aetherbloom'); ?></h3>
                        <p>Behind every statistic is a woman with dreams, ambitions, and the potential to transform her community. Traditional barriers create a cycle of dependency that we're committed to breaking.</p>
                        <ul class="impact-list">
                            <li>Limited access to skills development and training</li>
                            <li>Lack of flexible work opportunities for mothers</li>
                            <li>Geographic barriers to employment in urban centers</li>
                            <li>Insufficient support systems for career advancement</li>
                            <li>Economic dependence perpetuating vulnerability</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Foundation Programs Section -->
            <section class="foundation-programs-section">
                <div class="container">
                    <h2><?php esc_html_e('Aetherbloom Foundation Programs', 'aetherbloom'); ?></h2>
                    <p class="foundation-subtitle">Comprehensive support systems designed to create lasting change</p>
                    <div class="programs-grid">
                        <div class="program-card">
                            <div class="program-number">1</div>
                            <h3><?php esc_html_e('Skills Development & Training', 'aetherbloom'); ?></h3>
                            <p>Comprehensive training programs in digital skills, customer service, and UK business practices, preparing women for global opportunities.</p>
                            <ul class="program-benefits">
                                <li>Professional certification programs</li>
                                <li>UK compliance and cultural training</li>
                                <li>Digital literacy and technology skills</li>
                                <li>Soft skills and communication development</li>
                                <li>Ongoing professional development</li>
                            </ul>
                        </div>

                        <div class="program-card">
                            <div class="program-number">2</div>
                            <h3><?php esc_html_e('Economic Empowerment', 'aetherbloom'); ?></h3>
                            <p>Creating sustainable income opportunities through employment placement, entrepreneurship support, and financial literacy programs.</p>
                            <ul class="program-benefits">
                                <li>Guaranteed job placement assistance</li>
                                <li>Competitive salary packages</li>
                                <li>Entrepreneurship mentorship</li>
                                <li>Financial planning and literacy</li>
                                <li>Savings and investment guidance</li>
                            </ul>
                        </div>

                        <div class="program-card">
                            <div class="program-number">3</div>
                            <h3><?php esc_html_e('Holistic Support System', 'aetherbloom'); ?></h3>
                            <p>Addressing the root causes of inequality through counseling, childcare support, legal assistance, and community building initiatives.</p>
                            <ul class="program-benefits">
                                <li>Psychological support and counseling</li>
                                <li>Childcare assistance programs</li>
                                <li>Legal aid and protection services</li>
                                <li>Healthcare access and wellness</li>
                                <li>Community network building</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Business Impact Section -->
            <section class="business-impact-section">
                <div class="container">
                    <h2><?php esc_html_e('Business Impact & Value', 'aetherbloom'); ?></h2>
                    <div class="business-benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                💼
                            </div>
                            <h3><?php esc_html_e('Enhanced Service Quality', 'aetherbloom'); ?></h3>
                            <p>Motivated, well-trained professionals who are invested in long-term success deliver exceptional service quality and customer satisfaction.</p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                📊
                            </div>
                            <h3><?php esc_html_e('Improved Retention Rates', 'aetherbloom'); ?></h3>
                            <p>Our holistic support system creates loyal, committed team members with significantly lower turnover rates than industry standards.</p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                🌟
                            </div>
                            <h3><?php esc_html_e('Brand Reputation', 'aetherbloom'); ?></h3>
                            <p>Partnering with Aetherbloom enhances your company's social responsibility profile and demonstrates commitment to positive global impact.</p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                🔄
                            </div>
                            <h3><?php esc_html_e('Sustainable Operations', 'aetherbloom'); ?></h3>
                            <p>Our ethical approach creates stable, scalable operations that align with modern business values and ESG requirements.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get Involved Section -->
            <section class="get-involved-section">
                <div class="container">
                    <h2><?php esc_html_e('Get Involved', 'aetherbloom'); ?></h2>
                    <div class="involvement-options">
                        <div class="involvement-card">
                            <h3><?php esc_html_e('Partner with Us', 'aetherbloom'); ?></h3>
                            <p>Become an Aetherbloom client and directly contribute to our mission while enhancing your business operations.</p>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="involvement-link">Start Your Journey</a>
                        </div>
                        <div class="involvement-card">
                            <h3><?php esc_html_e('Corporate Sponsorship', 'aetherbloom'); ?></h3>
                            <p>Support our foundation programs through corporate partnerships and sponsorship opportunities.</p>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="involvement-link">Learn More</a>
                        </div>
                        <div class="involvement-card">
                            <h3><?php esc_html_e('Volunteer & Mentorship', 'aetherbloom'); ?></h3>
                            <p>Share your expertise through mentorship programs and volunteer opportunities in our training initiatives.</p>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="involvement-link">Get Involved</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Impact CTA Section -->
            <section class="impact-cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><?php esc_html_e('Ready to Make a Difference?', 'aetherbloom'); ?></h2>
                        <p>Join us in creating sustainable change while building your business success. Every partnership creates ripple effects of empowerment that transform communities.</p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-primary">
                            <?php esc_html_e('Start Creating Impact Today', 'aetherbloom'); ?>
                        </a>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>