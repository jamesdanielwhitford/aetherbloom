<?php
// File: /wp-content/themes/aetherbloom/page-impact.php

/**
 * Template for Impact page (Social Impact/Aetherbloom Foundation)
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
        <div class="page-header">
            <div class="container">
                <h1 class="page-title"><?php esc_html_e('Our Impact', 'aetherbloom'); ?></h1>
                <p class="page-subtitle"><?php esc_html_e('Empowering Women, Transforming Futures', 'aetherbloom'); ?></p>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Mission Overview Section -->
            <section class="mission-overview-section">
                <div class="container">
                    <div class="mission-content">
                        <h2><?php esc_html_e('Why We Do What We Do', 'aetherbloom'); ?></h2>
                        <div class="mission-grid">
                            <div class="mission-item">
                                <h3><?php esc_html_e('For UK Businesses:', 'aetherbloom'); ?></h3>
                                <p>Agile, affordable teams trained in UK compliance and cultural fluency.</p>
                            </div>
                            <div class="mission-item">
                                <h3><?php esc_html_e('For South Africa:', 'aetherbloom'); ?></h3>
                                <p>Sustainable careers for women overcoming systemic barriers: domestic violence, poverty, and unemployment.</p>
                            </div>
                        </div>
                        <div class="mission-quote">
                            <p>"Your efficiency fuels their empowerment."</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- The Reality Section -->
            <section class="reality-section">
                <div class="container">
                    <h2><?php esc_html_e('The Stark Reality', 'aetherbloom'); ?></h2>
                    <div class="reality-content">
                        <div class="statistics-grid">
                            <div class="stat-card">
                                <div class="stat-number">46%</div>
                                <div class="stat-description">of South African women aged 25-34 are unemployed</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">1 in 3</div>
                                <div class="stat-description">single mothers struggle to afford basic nutrition</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">28%</div>
                                <div class="stat-description">of rural women have access to digital skills training</div>
                            </div>
                        </div>
                        <div class="human-cost">
                            <h3><?php esc_html_e('The Human Cost', 'aetherbloom'); ?></h3>
                            <p>These aren't just numbers, they represent:</p>
                            <ul class="impact-list">
                                <li>Talented graduates forced into informal work</li>
                                <li>Single mothers choosing between rent and school fees</li>
                                <li>Young women with dreams but no pathways</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Foundation Programs Section -->
            <section class="foundation-programs-section">
                <div class="container">
                    <h2><?php esc_html_e('The Aetherbloom Foundation', 'aetherbloom'); ?></h2>
                    <p class="foundation-subtitle"><?php esc_html_e('Our Visionary Commitment to Social Activism', 'aetherbloom'); ?></p>
                    
                    <div class="programs-grid">
                        <div class="program-card">
                            <div class="program-number">1</div>
                            <h3><?php esc_html_e('Work-Readiness Revolution', 'aetherbloom'); ?></h3>
                            <p><strong>Skills for Life:</strong> Free 12-week programs in digital literacy, finance, and soft skills for women referred by NGOs.</p>
                            <ul class="program-benefits">
                                <li>Graduates gain certifications recognized by UK/South African employers</li>
                                <li>Even if we can't hire them, we empower them</li>
                            </ul>
                        </div>

                        <div class="program-card">
                            <div class="program-number">2</div>
                            <h3><?php esc_html_e('Second-Life Tech Initiative', 'aetherbloom'); ?></h3>
                            <p><strong>Sustainability Meets Inclusion:</strong> Donate or sell your decommissioned laptops, headsets, and phones.</p>
                            <ul class="program-benefits">
                                <li>We refurbish equipment for our staff and trainees</li>
                                <li>Reducing e-waste while bridging the digital divide</li>
                                <li>Every device donated supports a woman's access to work opportunities</li>
                            </ul>
                        </div>

                        <div class="program-card">
                            <div class="program-number">3</div>
                            <h3><?php esc_html_e('NGO & Community Partnerships', 'aetherbloom'); ?></h3>
                            <p><strong>Collaborate With Us:</strong> Building sustainable community relationships.</p>
                            <ul class="program-benefits">
                                <li>Refer candidates from underserved groups for free training</li>
                                <li>Co-design CSR projects (childcare subsidies, mental health workshops)</li>
                                <li>Create pathways to employment opportunities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Business Impact Section -->
            <section class="business-impact-section">
                <div class="container">
                    <h2><?php esc_html_e('Why UK Businesses Choose Aetherbloom', 'aetherbloom'); ?></h2>
                    <div class="business-benefits-grid">
                        <div class="benefit-card">
                            <h3><?php esc_html_e('Align Profit with Purpose', 'aetherbloom'); ?></h3>
                            <ul class="benefit-list">
                                <li>£1 saved through outsourcing = £0.60 reinvested in women's upliftment</li>
                                <li>Annual impact reports detail carbon footprint reduction</li>
                                <li>Social ROI tracking and measurement</li>
                            </ul>
                        </div>
                        <div class="benefit-card">
                            <h3><?php esc_html_e('Ethical Supply Chain Assurance', 'aetherbloom'); ?></h3>
                            <ul class="benefit-list">
                                <li>Audited fair wages and safe workspaces</li>
                                <li>Continuous upskilling opportunities</li>
                                <li>B-BBEE Level 1 compliant</li>
                            </ul>
                        </div>
                        <div class="benefit-card">
                            <h3><?php esc_html_e('Storytelling Advantage', 'aetherbloom'); ?></h3>
                            <ul class="benefit-list">
                                <li>Showcase partnership in marketing campaigns</li>
                                <li>Employee volunteer opportunities</li>
                                <li>Virtual mentorship programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get Involved Section -->
            <section class="get-involved-section">
                <div class="container">
                    <h2><?php esc_html_e('Join the Movement', 'aetherbloom'); ?></h2>
                    <div class="involvement-options">
                        <div class="involvement-card">
                            <h3><?php esc_html_e('Donate Equipment', 'aetherbloom'); ?></h3>
                            <p>Get a tax receipt + sustainability certificate for your donated tech equipment.</p>
                            <a href="mailto:support@aetherbloom.co.uk" class="involvement-btn">Email Della</a>
                        </div>
                        <div class="involvement-card">
                            <h3><?php esc_html_e('Partner for Impact', 'aetherbloom'); ?></h3>
                            <p>Co-branded CSR initiatives that create measurable social impact.</p>
                            <a href="mailto:partnerships@aetherbloom.co.za" class="involvement-btn">Partner with Grace</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Impact CTA Section -->
            <section class="impact-cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><?php esc_html_e('Outsource with Intention. Transform with Action.', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Ready to make business decisions that create positive change?', 'aetherbloom'); ?></p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-primary"><?php esc_html_e('Start Your Impact Journey', 'aetherbloom'); ?></a>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<?php get_footer(); ?>