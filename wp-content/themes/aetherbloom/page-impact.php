<?php
// File: /wp-content/themes/aetherbloom/page-impact.php

/**
 * Template for Impact page - Cinematic story-driven redesign with video and dynamic layouts
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
                <div class="hero-background">
                    <div class="hero-overlay"></div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sa-women-workspace.jpg'); ?>" alt="South African women in modern workspace" class="hero-bg-image">
                </div>
                <div class="hero-content">
                    <div class="container">
                        <h1 class="hero-title"><?php esc_html_e('Our Impact', 'aetherbloom'); ?></h1>
                        <p class="hero-subtitle"><?php esc_html_e('Empowering Women, Transforming Futures', 'aetherbloom'); ?></p>
                    </div>
                </div>
            </section>

            <!-- Why We Do What We Do - Split-Screen Video Feature -->
            <section class="mission-video-section">
                <div class="container">
                    <div class="section-intro">
                        <h2><?php esc_html_e('Why We Do What We Do', 'aetherbloom'); ?></h2>
                        <p class="section-subtitle">Two Challenges, One Solution</p>
                    </div>
                    
                    <div class="video-container">
                        <div class="split-screen-video">
                            <!-- Placeholder for split-screen video -->
                            <div class="video-placeholder">
                                <div class="video-side uk-side">
                                    <div class="video-label">UK Client Team Meeting</div>
                                    <div class="video-frame">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/uk-team-meeting.jpg'); ?>" alt="UK client team meeting">
                                        <div class="play-button">
                                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10" fill="rgba(255,255,255,0.9)"/>
                                                <polygon points="10,8 16,12 10,16" fill="#d84e28"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="video-divider">
                                    <div class="connection-line"></div>
                                    <div class="connection-icon">
                                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 16V8C21 6.89543 20.1046 6 19 6H5C3.89543 6 3 6.89543 3 8V16C3 17.1046 3.89543 18 5 18H19C20.1046 18 21 17.1046 21 16Z" stroke="currentColor" stroke-width="2"/>
                                            <path d="M3 10H21" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="video-side sa-side">
                                    <div class="video-label">South African Women in Training</div>
                                    <div class="video-frame">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sa-women-training.jpg'); ?>" alt="South African women in training">
                                        <div class="play-button">
                                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10" fill="rgba(255,255,255,0.9)"/>
                                                <polygon points="10,8 16,12 10,16" fill="#d84e28"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mission-explanation">
                        <div class="explanation-grid">
                            <div class="explanation-side">
                                <h3>For UK Businesses</h3>
                                <p>Agile, affordable teams trained in UK compliance and cultural fluency.</p>
                            </div>
                            <div class="explanation-center">
                                <div class="mission-quote">
                                    <p>"Your efficiency fuels their empowerment."</p>
                                </div>
                            </div>
                            <div class="explanation-side">
                                <h3>For South Africa</h3>
                                <p>Sustainable careers for women overcoming systemic barriers: domestic violence, poverty, and unemployment.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mission-story">
                        <p>South Africa is a nation brimming with untapped potential. Behind the statistics are millions of capable women held back by systemic barriers, gender discrimination, lack of access to digital tools and cycles of poverty that feel impossible to escape. At Aetherbloom, we don't just believe in change; we're building the infrastructure to make it happen.</p>
                    </div>
                </div>
            </section>

            <!-- The Stark Reality - Infographic Style -->
            <section class="reality-infographic">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e('The Stark Reality', 'aetherbloom'); ?></h2>
                    
                    <div class="reality-layout">
                        <div class="reality-image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sa-community.jpg'); ?>" alt="South African community" class="community-image">
                            <div class="image-overlay">
                                <div class="overlay-text">
                                    <h3>The Human Cost</h3>
                                    <p>These aren't just numbers, they represent:</p>
                                    <div class="cost-points">
                                        <div class="cost-point">Talented graduates forced into informal work</div>
                                        <div class="cost-point">Single mothers choosing between rent and school fees</div>
                                        <div class="cost-point">Young women with dreams but no pathways</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="reality-stats">
                            <h3>By the Numbers</h3>
                            <div class="floating-stats">
                                <div class="stat-float stat-1">
                                    <div class="stat-number" data-count="46">46%</div>
                                    <div class="stat-text">
                                        <p>of South African women aged 25-34 are unemployed</p>
                                        <span class="stat-source">(Stats SA 2023)</span>
                                    </div>
                                </div>
                                
                                <div class="stat-float stat-2">
                                    <div class="stat-number">1 in 3</div>
                                    <div class="stat-text">
                                        <p>single mothers struggles to afford basic nutrition</p>
                                        <span class="stat-source">(UN Women)</span>
                                    </div>
                                </div>
                                
                                <div class="stat-float stat-3">
                                    <div class="stat-number" data-count="28">28%</div>
                                    <div class="stat-text">
                                        <p>of rural women have access to digital skills training</p>
                                        <span class="stat-source">(World Bank)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Breaking the Cycle - Narrative Flow -->
            <section class="cycle-narrative">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e('How We\'re Breaking the Cycle', 'aetherbloom'); ?></h2>
                    <p class="section-subtitle">More Than Jobs, Dignity Through Work</p>
                    
                    <div class="narrative-flow">
                        <div class="narrative-intro">
                            <p class="intro-text">Every role we create provides:</p>
                        </div>
                        
                        <div class="transformation-timeline">
                            <div class="timeline-stage">
                                <div class="stage-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/before-transformation.jpg'); ?>" alt="Before transformation">
                                </div>
                                <div class="stage-content">
                                    <h3>Before</h3>
                                    <p>Systemic barriers preventing economic participation</p>
                                </div>
                            </div>
                            
                            <div class="timeline-connector">
                                <div class="connector-line"></div>
                                <div class="connector-text">Through Aetherbloom</div>
                            </div>
                            
                            <div class="timeline-stage">
                                <div class="stage-content">
                                    <h3>Living wages that transform households</h3>
                                    <p>Providing economic stability that breaks generational poverty cycles</p>
                                </div>
                                <div class="stage-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/skills-development.jpg'); ?>" alt="Skills development">
                                </div>
                            </div>
                            
                            <div class="timeline-connector">
                                <div class="connector-line"></div>
                                <div class="connector-text">Leading to</div>
                            </div>
                            
                            <div class="timeline-stage">
                                <div class="stage-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/empowered-women.jpg'); ?>" alt="Empowered women">
                                </div>
                                <div class="stage-content">
                                    <h3>Confidence to reimagine what's possible</h3>
                                    <p>Empowering women to envision and achieve bigger dreams</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Foundation Programs - Process Visualization -->
            <section class="foundation-workflow">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e('The Aetherbloom Foundation', 'aetherbloom'); ?></h2>
                    <p class="section-subtitle">Our Visionary Commitment to Social Activism</p>
                    
                    <div class="workflow-process">
                        <div class="process-step step-1">
                            <div class="step-number">1</div>
                            <div class="step-visual">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/training-program.jpg'); ?>" alt="Training program">
                            </div>
                            <div class="step-content">
                                <h3>Work-Readiness Revolution</h3>
                                <h4>Skills for Life</h4>
                                <p>Free 12-week programs in digital literacy, finance, and soft skills for women referred by NGOs.</p>
                                <div class="step-highlight">
                                    <p>"Graduates gain certifications recognized by UK/South African employers."</p>
                                </div>
                                <p class="step-note"><strong>Beyond Employment:</strong> Even if we can't hire them, we empower them.</p>
                            </div>
                        </div>
                        
                        <div class="workflow-arrow">
                            <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 20H50M50 20L40 10M50 20L40 30" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        
                        <div class="process-step step-2">
                            <div class="step-number">2</div>
                            <div class="step-visual">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/tech-donation.jpg'); ?>" alt="Tech donation">
                            </div>
                            <div class="step-content">
                                <h3>Second-Life Tech Initiative</h3>
                                <h4>Sustainability Meets Inclusion</h4>
                                <p>Donate or sell your decommissioned laptops, headsets, and phones. We refurbish equipment for our staff and trainees, reducing e-waste while bridging the digital divide.</p>
                                <div class="step-highlight">
                                    <p>"Every device donated supports a woman's access to work opportunities."</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="workflow-arrow">
                            <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 20H50M50 20L40 10M50 20L40 30" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        
                        <div class="process-step step-3">
                            <div class="step-number">3</div>
                            <div class="step-visual">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/community-partnership.jpg'); ?>" alt="Community partnership">
                            </div>
                            <div class="step-content">
                                <h3>NGO & Community Partnerships</h3>
                                <h4>Collaborate With Us</h4>
                                <p>Refer candidates from underserved groups for free training and employment opportunities. Co-design CSR projects (e.g., childcare subsidies, mental health workshops).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Business Impact - Split Content + Trust Section -->
            <section class="business-impact">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e('Why UK Businesses Choose Aetherbloom', 'aetherbloom'); ?></h2>
                    <p class="section-subtitle">Align Profit with Purpose</p>
                    
                    <div class="impact-split">
                        <div class="impact-benefits">
                            <div class="benefit-large">
                                <div class="benefit-icon">
                                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3C7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h3>Meet CSR & ESG Goals</h3>
                                <p>Quantify your impact: "£1 saved through outsourcing = £0.60 reinvested in women's upliftment."</p>
                                <ul class="benefit-list">
                                    <li>Annual impact reports detail your carbon footprint reduction (via tech recycling) and social ROI</li>
                                    <li>Audited fair wages, safe workspaces, and upskilling opportunities</li>
                                    <li>B-BBEE Level 1 compliant (South Africa's empowerment standard)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="impact-visual">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/business-impact.jpg'); ?>" alt="Business impact visualization">
                            <div class="visual-overlay">
                                <div class="storytelling-advantage">
                                    <h3>Storytelling Advantage</h3>
                                    <p>Showcase your partnership in marketing campaigns and feature employee volunteer opportunities (e.g., virtual mentorship).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Trust Badges Section -->
                    <div class="trust-credentials">
                        <h3>Trusted Certifications</h3>
                        <div class="credentials-grid">
                            <div class="credential-badge">
                                <div class="badge-icon">
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3C7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="badge-content">
                                    <h4>B-BBEE Level 1</h4>
                                    <p>South Africa Empowerment Standard</p>
                                </div>
                            </div>
                            
                            <div class="credential-badge">
                                <div class="badge-icon">
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="badge-content">
                                    <h4>Carbon Trust Certification</h4>
                                    <p>Environmental Impact Verified</p>
                                </div>
                            </div>
                            
                            <div class="credential-badge">
                                <div class="badge-icon">
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                        <path d="M23 21V19C23 17.1362 21.7252 15.5701 20 15.126" stroke="currentColor" stroke-width="2"/>
                                        <path d="M16 3.12598C17.7252 3.56992 19 5.13616 19 7C19 8.86384 17.7252 10.4301 16 10.874" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="badge-content">
                                    <h4>NGO Partner Network</h4>
                                    <p>Community Collaboration Verified</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Join Movement - Action Hero Section -->
            <section class="join-action-hero">
                <div class="action-background">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/partnership-action.jpg'); ?>" alt="Partnership in action" class="action-bg-image">
                    <div class="action-overlay"></div>
                </div>
                
                <div class="container">
                    <div class="action-content">
                        <h2><?php esc_html_e('Join the Movement', 'aetherbloom'); ?></h2>
                        
                        <div class="action-options">
                            <div class="action-path">
                                <div class="path-icon">
                                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="3" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                                        <path d="M8 21L12 17L16 21" stroke="currentColor" stroke-width="2"/>
                                        <path d="M12 17V21" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h3>Donate Equipment</h3>
                                <p>Get a tax receipt + sustainability certificate</p>
                                <a href="mailto:support@aetherbloom.co.uk" class="action-cta primary">Email Della to Donate Equipment</a>
                            </div>
                            
                            <div class="action-divider">
                                <span>or</span>
                            </div>
                            
                            <div class="action-path">
                                <div class="path-icon">
                                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                        <path d="M23 21V19C23 17.1362 21.7252 15.5701 20 15.126" stroke="currentColor" stroke-width="2"/>
                                        <path d="M16 3.12598C17.7252 3.56992 19 5.13616 19 7C19 8.86384 17.7252 10.4301 16 10.874" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h3>Partner for Impact</h3>
                                <p>Co-branded CSR initiatives</p>
                                <a href="mailto:partnerships@aetherbloom.co.za" class="action-cta secondary">Partner with Grace on CSR Strategy</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer Tagline -->
                <div class="impact-footer-tagline">
                    <div class="container">
                        <p class="tagline-text">"Outsource with intention. Transform with action."</p>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>