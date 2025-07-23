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
    <!-- Mobile WebM background -->
    <video autoplay loop muted playsinline class="mobile-webp-background">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/animated-petals-mobile.webm" type="video/webm">
    </video>
    
    <main class="site-main impact-page" id="main">
        <div class="content-wrapper">
            
            <!-- Hero Section - Cinematic Introduction -->
            <section class="impact-hero">
                <div class="hero-background-video">
                    <video class="hero-video" autoplay muted loop playsinline preload="metadata" poster="<?php echo esc_url(str_replace('.mp4', '.webp', get_template_directory_uri() . '/assets/videos/impact-video.mp4')); ?>">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/impact-video.webm'); ?>" type="video/webm">
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
                                <p><?php esc_html_e('Talented graduates forced into informal work', 'aetherbloom'); ?></p>
                            </div>
                            <div class="cost-item">
                                <p><?php esc_html_e('Single mothers choosing between rent and', 'aetherbloom'); ?></p>
                                <p><?php esc_html_e('school fees', 'aetherbloom'); ?></p>
                            </div>
                            <div class="cost-item">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-currency-pound" viewBox="0 0 16 16">
                                        <path d="M4 8.585h1.969c.115.465.186.939.186 1.43 0 1.385-.736 2.496-2.075 2.771V14H12v-1.24H6.492v-.129c.825-.525 1.135-1.446 1.135-2.694 0-.465-.07-.913-.168-1.352h3.29v-.972H7.22c-.186-.723-.372-1.455-.372-2.247 0-1.274 1.047-2.066 2.58-2.066a5.3 5.3 0 0 1 2.103.465V2.456A5.6 5.6 0 0 0 9.348 2C6.865 2 5.322 3.291 5.322 5.366c0 .775.195 1.515.399 2.247H4z"/>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"/>
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
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/skills-training.webp'); ?>" alt="Skills training program">
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
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tech-refurbishment.webp'); ?>" alt="Technology refurbishment">
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
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/community-partnerships.webp'); ?>" alt="Community partnerships">
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
                                    <li><?php esc_html_e('Feature employee volunteer opportunities.', 'aetherbloom'); ?></li>
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
                                        <?php esc_html_e('Email Aetherbloom', 'aetherbloom'); ?><br/>
                                        <?php esc_html_e('to Donate Equipment', 'aetherbloom'); ?>
                                    </a>
                                </div>
                                
                                <div class="action-card partner-impact">
                                    <h3><?php esc_html_e('Partner for Impact', 'aetherbloom'); ?></h3>
                                    <a href="mailto:partnerships@aetherbloom.co.za" class="action-cta secondary">
                                        <?php esc_html_e('Email Aetherbloom', 'aetherbloom'); ?><br/>
                                        <?php esc_html_e('to Partner on CSR Strategy', 'aetherbloom'); ?>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-globe-americas" viewBox="-4 -4 24 24">
                                  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" stroke="currentColor" stroke-width="1"/>
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
                        <div class="tagline-card">
                            <h2 class="tagline-text">"<strong>Outsource with intention.</strong><br><strong>Transform with action.</strong>"</h2>
                        </div>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary btn-large">
                            <?php esc_html_e('Start Your Impact Journey', 'aetherbloom'); ?>
                        </a>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>