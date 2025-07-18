<?php
// File: /wp-content/themes/aetherbloom/page-impact.php

/**
 * Template for Impact page - Complete content update with foundation programs and impact statistics
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
            
            <!-- Hero Section - Cinematic Introduction -->
            <section class="impact-hero">
                <div class="hero-background-video">
                    <video class="hero-video" autoplay muted loop playsinline>
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/impact-video.mp4'); ?>" type="video/mp4">
                        <!-- Fallback for browsers that don't support video -->
                        <div class="video-fallback"></div>
                    </video>
                    <div class="hero-video-overlay"></div>
                </div>
                <div class="hero-content">
                    <div class="container">
                        <h1 class="hero-title"><?php esc_html_e('Our Impact', 'aetherbloom'); ?></h1>
                        <p class="hero-subtitle"><?php esc_html_e('Empowering Women, Transforming Futures', 'aetherbloom'); ?></p>
                    </div>
                </div>
            </section>

            <!-- Why We Do What We Do Section -->
            <section class="mission-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Why We Do What We Do', 'aetherbloom'); ?></h2>
                        <p class="mission-tagline"><?php esc_html_e('Two Challenges, One Solution', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="mission-grid">
                        <div class="mission-card uk-business">
                            <div class="mission-icon">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="#39564F" stroke-width="2"/>
                                    <path d="M9 22V12H15V22" stroke="#39564F" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('For UK Businesses:', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Agile, affordable teams trained in UK compliance and cultural fluency.', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="mission-card south-africa">
                            <div class="mission-icon">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#39564F" stroke-width="2"/>
                                    <circle cx="12" cy="7" r="4" stroke="#39564F" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('For South Africa:', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Sustainable careers for women overcoming systemic barriers: domestic violence, poverty, and unemployment.', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                    
                    <div class="mission-quote">
                        <p><?php esc_html_e('"Your efficiency fuels their empowerment."', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="mission-description">
                        <p><?php esc_html_e('South Africa is a nation brimming with untapped potential. Behind the statistics are millions of capable women held back by systemic barriers, gender discrimination, lack of access to digital tools and cycles of poverty that feel impossible to escape. At Aetherbloom, we don\'t just believe in change, we\'re building the infrastructure to make it happen.', 'aetherbloom'); ?></p>
                    </div>
                </div>
            </section>

            <!-- The Stark Reality - Statistics Section -->
            <section class="stark-reality-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('The Stark Reality', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('By the Numbers', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="statistics-grid">
                        <div class="stat-card">
                            <div class="stat-number">46%</div>
                            <div class="stat-description">
                                <p><?php esc_html_e('of South African women aged 25-34 are unemployed', 'aetherbloom'); ?></p>
                                <span class="stat-source"><?php esc_html_e('(Stats SA 2023)', 'aetherbloom'); ?></span>
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-number">1 in 3</div>
                            <div class="stat-description">
                                <p><?php esc_html_e('single mothers struggles to afford basic nutrition', 'aetherbloom'); ?></p>
                                <span class="stat-source"><?php esc_html_e('(UN Women)', 'aetherbloom'); ?></span>
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-number">28%</div>
                            <div class="stat-description">
                                <p><?php esc_html_e('Only 28% of rural women have access to digital skills training', 'aetherbloom'); ?></p>
                                <span class="stat-source"><?php esc_html_e('(World Bank)', 'aetherbloom'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="human-cost-section">
                        <h3><?php esc_html_e('The Human Cost', 'aetherbloom'); ?></h3>
                        <p><?php esc_html_e('These aren\'t just numbers, they represent:', 'aetherbloom'); ?></p>
                        <div class="human-cost-grid">
                            <div class="cost-item">
                                <div class="cost-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 4H8C6.89543 4 6 4.89543 6 6V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V6C18 4.89543 17.1046 4 16 4Z" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 8H8" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 16V8" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                                <p><?php esc_html_e('Talented graduates forced into informal work', 'aetherbloom'); ?></p>
                            </div>
                            <div class="cost-item">
                                <div class="cost-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 18C17 15.7909 15.2091 14 13 14H5C2.79086 14 1 15.7909 1 18V20H17V18Z" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="9" cy="6" r="4" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23 20V18C23 16.1362 21.7252 14.5701 20 14.126" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 4.12598C17.7252 4.56992 19 6.13616 19 8C19 9.86384 17.7252 11.4301 16 11.874" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                                <p><?php esc_html_e('Single mothers choosing between rent and school fees', 'aetherbloom'); ?></p>
                            </div>
                            <div class="cost-item">
                                <div class="cost-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#39564F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                                <p><?php esc_html_e('Young women with dreams but no pathways', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Breaking the Cycle Section -->
            <section class="breaking-cycle-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('How We\'re Breaking the Cycle', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('More Than Jobs, Dignity Through Work', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="cycle-content">
                        <p class="cycle-intro"><?php esc_html_e('Every role we create provides:', 'aetherbloom'); ?></p>
                        
                        <div class="transformation-grid">
                            <div class="transformation-card">
                                <div class="transformation-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10" stroke="#39564F" stroke-width="2"/>
                                        <path d="M9.09 9C9.3251 8.33167 9.78915 7.76811 10.4 7.40913C11.0108 7.05016 11.7289 6.91894 12.4272 7.03871C13.1255 7.15849 13.7588 7.52152 14.2151 8.06353C14.6713 8.60553 14.9211 9.29152 14.92 10C14.92 12 11.92 13 11.92 13" stroke="#39564F" stroke-width="2"/>
                                        <path d="M12 17H12.01" stroke="#39564F" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h4><?php esc_html_e('Living wages that transform households', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Providing stable income that breaks cycles of poverty and creates financial security for families.', 'aetherbloom'); ?></p>
                            </div>
                            
                            <div class="transformation-card">
                                <div class="transformation-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 3H8C9.06087 3 10.0783 3.42143 10.8284 4.17157C11.5786 4.92172 12 5.93913 12 7V21C12 20.2044 11.6839 19.4413 11.1213 18.8787C10.5587 18.3161 9.79565 18 9 18H2V3Z" stroke="#39564F" stroke-width="2"/>
                                        <path d="M22 3H16C14.9391 3 13.9217 3.42143 13.1716 4.17157C12.4214 4.92172 12 5.93913 12 7V21C12 20.2044 12.3161 19.4413 12.8787 18.8787C13.4413 18.3161 14.2044 18 15 18H22V3Z" stroke="#39564F" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h4><?php esc_html_e('Skills development for lifelong employability', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Comprehensive training programs that build marketable skills and open doors to future opportunities.', 'aetherbloom'); ?></p>
                            </div>
                            
                            <div class="transformation-card">
                                <div class="transformation-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L3.09 8.26L4 21L12 17L20 21L20.91 8.26L12 2Z" stroke="#39564F" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h4><?php esc_html_e('Confidence to reimagine what\'s possible', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Empowering women to envision and achieve bigger dreams for themselves and their families.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Aetherbloom Foundation Section -->
            <section class="foundation-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('The Aetherbloom Foundation', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Our Visionary Commitment to Social Activism', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="foundation-programs">
                        <!-- Work-Readiness Revolution -->
                        <div class="program-card work-readiness">
                            <div class="program-number">1</div>
                            <div class="program-content">
                                <div class="program-header">
                                    <h3><?php esc_html_e('Work-Readiness Revolution', 'aetherbloom'); ?></h3>
                                    <h4><?php esc_html_e('Skills for Life', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="program-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/skills-training.jpg'); ?>" alt="Skills training program">
                                </div>
                                <div class="program-description">
                                    <p><?php esc_html_e('Free 12-week programs in digital literacy, finance, and soft skills for women referred by NGOs.', 'aetherbloom'); ?></p>
                                    <div class="program-highlight">
                                        <p><?php esc_html_e('"Graduates gain certifications recognised by UK/South African employers."', 'aetherbloom'); ?></p>
                                    </div>
                                    <p><strong><?php esc_html_e('Beyond Employment:', 'aetherbloom'); ?></strong> <?php esc_html_e('Even if we can\'t hire them, we empower them.', 'aetherbloom'); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Second-Life Tech Initiative -->
                        <div class="program-card tech-initiative">
                            <div class="program-number">2</div>
                            <div class="program-content">
                                <div class="program-header">
                                    <h3><?php esc_html_e('Second-Life Tech Initiative', 'aetherbloom'); ?></h3>
                                    <h4><?php esc_html_e('Sustainability Meets Inclusion', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="program-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tech-refurbishment.jpg'); ?>" alt="Technology refurbishment">
                                </div>
                                <div class="program-description">
                                    <p><?php esc_html_e('Donate or sell your decommissioned laptops, headsets, and phones. We refurbish equipment for our staff and trainees, reducing e-waste while bridging the digital divide.', 'aetherbloom'); ?></p>
                                    <div class="program-highlight">
                                        <p><?php esc_html_e('"Every device donated supports a woman\'s access to work opportunities."', 'aetherbloom'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- NGO & Community Partnerships -->
                        <div class="program-card ngo-partnerships">
                            <div class="program-number">3</div>
                            <div class="program-content">
                                <div class="program-header">
                                    <h3><?php esc_html_e('NGO & Community Partnerships', 'aetherbloom'); ?></h3>
                                    <h4><?php esc_html_e('Collaborate With Us', 'aetherbloom'); ?></h4>
                                </div>
                                <div class="program-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/community-partnerships.jpg'); ?>" alt="Community partnerships">
                                </div>
                                <div class="program-description">
                                    <ul>
                                        <li><?php esc_html_e('Refer candidates from underserved groups for free training and employment opportunities.', 'aetherbloom'); ?></li>
                                        <li><?php esc_html_e('Co-design CSR projects (e.g., childcare subsidies, mental health workshops).', 'aetherbloom'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why UK Businesses Choose Aetherbloom Section -->
            <section class="business-benefits-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Why UK Businesses Choose Aetherbloom', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Align Profit with Purpose', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="benefits-layout">
                        <div class="benefit-large csr-goals">
                            <h3><?php esc_html_e('Meet CSR & ESG Goals', 'aetherbloom'); ?></h3>
                            <div class="benefit-details">
                                <div class="impact-metric">
                                    <span class="metric-highlight"><?php esc_html_e('£1 saved through outsourcing = £0.60 reinvested in women\'s upliftment.', 'aetherbloom'); ?></span>
                                </div>
                                <ul>
                                    <li><?php esc_html_e('Annual impact reports detail your carbon footprint reduction (via tech recycling) and social ROI.', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('B-BBEE Level 1 compliant (South Africa\'s empowerment standard).', 'aetherbloom'); ?></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="benefit-cards">
                            <div class="benefit-card">
                                <h4><?php esc_html_e('Ethical Supply Chain Assurance', 'aetherbloom'); ?></h4>
                                <ul>
                                    <li><?php esc_html_e('Audited fair wages, safe workspaces, and upskilling opportunities.', 'aetherbloom'); ?></li>
                                </ul>
                            </div>
                            
                            <div class="benefit-card">
                                <h4><?php esc_html_e('Storytelling Advantage', 'aetherbloom'); ?></h4>
                                <ul>
                                    <li><?php esc_html_e('Showcase your partnership in marketing campaigns.', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Feature employee volunteer opportunities (e.g., virtual mentorship).', 'aetherbloom'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Join the Movement Section -->
            <section class="join-movement-section">
                <div class="container">
                    <div class="section-header">
                        <h2><?php esc_html_e('Join the Movement', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('How You Can Be Part of This Story', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="movement-layout">
                        <div class="movement-options">
                            <div class="movement-card partner-business">
                                <h3><?php esc_html_e('Partner Through Business', 'aetherbloom'); ?></h3>
                                <div class="partnership-flow">
                                    <div class="flow-item">
                                        <span class="flow-text"><?php esc_html_e('Outsource tasks', 'aetherbloom'); ?></span>
                                        <span class="flow-arrow">→</span>
                                        <span class="flow-result"><?php esc_html_e('Create stable jobs', 'aetherbloom'); ?></span>
                                    </div>
                                    <div class="flow-item">
                                        <span class="flow-text"><?php esc_html_e('Hire our team', 'aetherbloom'); ?></span>
                                        <span class="flow-arrow">→</span>
                                        <span class="flow-result"><?php esc_html_e('Fund training programs', 'aetherbloom'); ?></span>
                                    </div>
                                    <div class="flow-item">
                                        <span class="flow-text"><?php esc_html_e('Scale with us', 'aetherbloom'); ?></span>
                                        <span class="flow-arrow">→</span>
                                        <span class="flow-result"><?php esc_html_e('Expand our impact together', 'aetherbloom'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="action-section">
                            <div class="action-grid">
                                <div class="action-card donate-equipment">
                                    <h3><?php esc_html_e('Donate Equipment', 'aetherbloom'); ?></h3>
                                    <a href="mailto:partnerships@aetherbloom.co.uk" class="action-cta primary">
                                        <?php esc_html_e('Email Della', 'aetherbloom'); ?>
                                        <?php esc_html_e('to Donate Equipment', 'aetherbloom'); ?>
                                    </a>
                                </div>
                                
                                <div class="action-card partner-impact">
                                    <h3><?php esc_html_e('Partner for Impact', 'aetherbloom'); ?></h3>
                                    <a href="mailto:partnerships@aetherbloom.co.za" class="action-cta secondary">
                                        <?php esc_html_e('Partner with Grace', 'aetherbloom'); ?><br/>
                                        <?php esc_html_e('on CSR Strategy', 'aetherbloom'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trust Badges & Certifications -->
            <section class="trust-certifications-section">
                <div class="container">
                    <div class="certifications-grid">
                        <div class="cert-badge">
                            <div class="cert-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L3.09 8.26L4 21L12 17L20 21L20.91 8.26L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4><?php esc_html_e('B-BBEE Level 1', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('Contributor Certified', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="cert-badge">
                            <div class="cert-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 16V8C20.9996 7.64927 20.9071 7.30481 20.7315 7.00116C20.556 6.69751 20.3037 6.44536 20 6.27L13 2.27C12.696 2.09446 12.3511 2.00205 12 2.00205C11.6489 2.00205 11.304 2.09446 11 2.27L4 6.27C3.69626 6.44536 3.44398 6.69751 3.26846 7.00116C3.09294 7.30481 3.00036 7.64927 3 8V16C3.00036 16.3507 3.09294 16.6952 3.26846 16.9988C3.44398 17.3025 3.69626 17.5546 4 17.73L11 21.73C11.304 21.9055 11.6489 21.9979 12 21.9979C12.3511 21.9979 12.696 21.9055 13 21.73L20 17.73C20.3037 17.5546 20.556 17.3025 20.7315 16.9988C20.9071 16.6952 20.9996 16.3507 21 16Z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4><?php esc_html_e('Carbon Trust', 'aetherbloom'); ?></h4>
                            <p><?php esc_html_e('Certification', 'aetherbloom'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Tagline -->
            <section class="impact-footer-tagline">
                <div class="container">
                    <div class="tagline-content">
                        <h2 class="tagline-text"><?php esc_html_e('"Outsource with intention. Transform with action."', 'aetherbloom'); ?></h2>
                        <div class="tagline-cta">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary btn-large">
                                <?php esc_html_e('Start Your Impact Journey', 'aetherbloom'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>