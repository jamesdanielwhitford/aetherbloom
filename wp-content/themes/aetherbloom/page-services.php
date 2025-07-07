<?php
// File: /wp-content/themes/aetherbloom/page-services.php

/**
 * Template for Services page - Complete redesign with varied layouts
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
    
    <main class="site-main services-page" id="main">
        <div class="content-wrapper">
            
            <!-- Hero Section - Full width background with overlay text -->
            <section class="services-hero">
                <div class="hero-background"></div>
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="hero-title">Aetherbloom Business Support Services</h1>
                    <p class="hero-subtitle">Scalable, Ethical Outsourcing for UK Businesses</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">40%+</span>
                            <span class="stat-label">Cost Reduction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">GDPR</span>
                            <span class="stat-label">Compliant</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Digital Customer Success - Split Screen Layout (60/40) -->
            <section class="digital-success-section">
                <div class="container">
                    <div class="split-layout">
                        <div class="content-side">
                            <h2>Digital Customer Success Packages</h2>
                            <p class="section-intro">Scalable, remote-first support to manage customer interactions, drive satisfaction and ease operational pressure without the overhead.</p>
                            <p class="bespoke-note">* Please see examples of what your bespoke Aetherbloom package could look like *</p>
                        </div>
                        <div class="image-side">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-success-team.jpg" alt="Customer Success Team in Action" class="section-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Digital Success Tiers - Staggered Layout -->
            <section class="success-tiers-section">
                <div class="container">
                    <div class="tiers-grid">
                        
                        <!-- Essentials Tier -->
                        <div class="tier-card essentials">
                            <div class="tier-header">
                                <h3>Essentials Tier</h3>
                                <div class="tier-pricing">
                                    <span class="hours">20hrs/month</span>
                                    <span class="price">£360</span>
                                </div>
                                <p class="tier-ideal">Ideal for: Startups needing foundational, reliable support</p>
                            </div>
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>Multi-Channel Assistance</h4>
                                    <ul>
                                        <li>Email & live chat coverage</li>
                                        <li>Pre-approved FAQ handling (up to 5)</li>
                                    </ul>
                                </div>
                                <div class="feature-group">
                                    <h4>Order & Account Management</h4>
                                    <ul>
                                        <li>Order processing/tracking</li>
                                        <li>CRM updates (e.g. address changes)</li>
                                    </ul>
                                </div>
                                <div class="feature-group">
                                    <h4>Billing Support</h4>
                                    <ul>
                                        <li>Invoice explanations</li>
                                        <li>Payment status follow-ups</li>
                                    </ul>
                                </div>
                                <div class="deliverables">
                                    <h4>Deliverables:</h4>
                                    <ul>
                                        <li>Response time: Within 12 hours</li>
                                        <li>85% first-contact resolution target</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Growth Tier -->
                        <div class="tier-card growth">
                            <div class="tier-header">
                                <h3>Growth Tier</h3>
                                <div class="tier-pricing">
                                    <span class="hours">30hrs/month</span>
                                    <span class="price">£500</span>
                                </div>
                                <p class="tier-ideal">Ideal for: Scaling businesses that want consistent, proactive customer care</p>
                            </div>
                            <div class="tier-features">
                                <p class="includes">All Essentials features plus:</p>
                                <div class="feature-group">
                                    <h4>Advanced Query Handling</h4>
                                    <ul>
                                        <li>Returns & refund processing</li>
                                    </ul>
                                </div>
                                <div class="feature-group">
                                    <h4>Customer Retention Support</h4>
                                    <ul>
                                        <li>Post-purchase check-ins</li>
                                        <li>Basic survey/feedback collection</li>
                                    </ul>
                                </div>
                                <div class="deliverables">
                                    <h4>Deliverables:</h4>
                                    <ul>
                                        <li>Response time: Within 8 hours</li>
                                        <li>90% satisfaction score target</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Enterprise Tier -->
                        <div class="tier-card enterprise">
                            <div class="tier-header">
                                <h3>Enterprise Tier</h3>
                                <div class="tier-pricing">
                                    <span class="hours">50hrs/month</span>
                                    <span class="price">£730</span>
                                </div>
                                <p class="tier-ideal">Ideal for: High-volume teams needing dedicated, data-driven support</p>
                            </div>
                            <div class="tier-features">
                                <p class="includes">All Growth features plus:</p>
                                <div class="feature-group">
                                    <ul>
                                        <li>Custom workflows & templates</li>
                                        <li>Priority ticket handling</li>
                                        <li>Monthly performance reports</li>
                                    </ul>
                                </div>
                                <div class="deliverables">
                                    <h4>Deliverables:</h4>
                                    <ul>
                                        <li>Response time: Within 4 hours</li>
                                        <li>Dedicated account manager included</li>
                                    </ul>
                                </div>
                                <div class="uk-equivalent">
                                    <strong>UK Equivalent Cost: £1,800–£2,500/month</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Call Centre Solutions - Magazine Spread Layout -->
            <section class="call-centre-section">
                <div class="container">
                    <div class="magazine-layout">
                        <div class="magazine-content">
                            <div class="section-number">02</div>
                            <h2>Call Centre Solutions</h2>
                            <p class="section-intro">Voice-first support for businesses needing inbound, outbound, and sales-focused customer engagement.</p>
                            
                            <div class="call-centre-tiers">
                                
                                <!-- Reception Tier -->
                                <div class="call-tier reception">
                                    <div class="tier-info">
                                        <h3>Reception Tier</h3>
                                        <div class="pricing">20hrs/month | £12/hr</div>
                                        <p class="ideal">Ideal for: Small businesses needing a friendly voice on the line</p>
                                    </div>
                                    <div class="tier-features">
                                        <h4>Inbound Call Handling</h4>
                                        <ul>
                                            <li>Call answering & routing</li>
                                            <li>CRM updates & call logging</li>
                                            <li>Appointment scheduling</li>
                                            <li>Standard FAQs</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Engagement Tier -->
                                <div class="call-tier engagement">
                                    <div class="tier-info">
                                        <h3>Engagement Tier</h3>
                                        <div class="pricing">40hrs/week | £1,600/month</div>
                                        <p class="ideal">Ideal for: Medium-sized businesses ready for full-time call coverage</p>
                                    </div>
                                    <div class="tier-features">
                                        <p class="includes">All Reception features plus:</p>
                                        <ul>
                                            <li>Outbound follow-ups & courtesy calls</li>
                                            <li>Upselling (optional commission model)</li>
                                            <li>Basic complaint handling</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Sales Accelerator Tier -->
                                <div class="call-tier sales-accelerator">
                                    <div class="tier-info">
                                        <h3>Sales Accelerator Tier</h3>
                                        <div class="pricing">3 agents with shift coverage | £5,000/month</div>
                                        <p class="ideal">Ideal for: Businesses focused on lead generation & sales growth</p>
                                    </div>
                                    <div class="tier-features">
                                        <p class="includes">All Engagement features plus:</p>
                                        <ul>
                                            <li>Cold calling & lead qualification</li>
                                            <li>Custom scripts & campaign management</li>
                                            <li>Live dashboards & call QA</li>
                                            <li>Priority escalation management</li>
                                        </ul>
                                        <div class="uk-equivalent">
                                            <strong>UK Equivalent Cost: £3,500–£7,000/month</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="magazine-visual">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/call-centre-operations.jpg" alt="Call Centre Operations" class="magazine-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comparison Section - Which Is Right for You? -->
            <section class="comparison-section">
                <div class="container">
                    <h2>Which Is Right for You?</h2>
                    <div class="comparison-table">
                        <div class="table-header">
                            <div class="feature-col">Feature</div>
                            <div class="digital-col">Digital Customer Success</div>
                            <div class="call-col">Call Centre Solutions</div>
                        </div>
                        <div class="table-row">
                            <div class="feature-col">Channels</div>
                            <div class="digital-col">Email, Chat</div>
                            <div class="call-col">Phone, Voice</div>
                        </div>
                        <div class="table-row">
                            <div class="feature-col">Speed</div>
                            <div class="digital-col">Hours</div>
                            <div class="call-col">Real-time (Minutes)</div>
                        </div>
                        <div class="table-row">
                            <div class="feature-col">Style</div>
                            <div class="digital-col">Reactive + Proactive</div>
                            <div class="call-col">Reactive + Sales</div>
                        </div>
                        <div class="table-row">
                            <div class="feature-col">Suited For</div>
                            <div class="digital-col">Order/account support</div>
                            <div class="call-col">High-touch engagement</div>
                        </div>
                        <div class="table-row">
                            <div class="feature-col">Pricing Model</div>
                            <div class="digital-col">Monthly tiered</div>
                            <div class="call-col">Hourly / Dedicated Teams</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Add-On Services - Floating Elements Layout -->
            <section class="addon-services-section">
                <div class="container">
                    <div class="addon-header">
                        <h2>Add-On Services</h2>
                        <p class="addon-intro">Specialist support to scale your operations, bespoke packages available upon request.</p>
                        <div class="addon-pricing">From £8/hour</div>
                    </div>
                    
                    <div class="addon-grid">
                        <div class="addon-item">
                            <div class="addon-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hr-support-icon.svg" alt="HR Support">
                            </div>
                            <h3>HR Support</h3>
                        </div>
                        <div class="addon-item">
                            <div class="addon-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/virtual-admin-icon.svg" alt="Virtual Admin">
                            </div>
                            <h3>Virtual Admin</h3>
                        </div>
                        <div class="addon-item">
                            <div class="addon-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookkeeping-icon.svg" alt="Book-keeping & Accounting">
                            </div>
                            <h3>Book-keeping & Accounting</h3>
                        </div>
                        <div class="addon-item">
                            <div class="addon-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/data-analysis-icon.svg" alt="Data Analysis">
                            </div>
                            <h3>Data Analysis</h3>
                        </div>
                        <div class="addon-item">
                            <div class="addon-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business-coaching-icon.svg" alt="Business Coaching">
                            </div>
                            <h3>Business Coaching</h3>
                        </div>
                        <div class="addon-item">
                            <div class="addon-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/website-design-icon.svg" alt="Website Design">
                            </div>
                            <h3>Website Design</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Aetherbloom - Action Hero Section -->
            <section class="why-aetherbloom-section">
                <div class="action-background"></div>
                <div class="action-overlay"></div>
                <div class="container">
                    <div class="action-content">
                        <h2>Why Clients Choose Aetherbloom</h2>
                        <div class="why-highlight">
                            <h3>Ethical Outsourcing</h3>
                            <p>Your support powers real employment for women in South Africa.</p>
                        </div>
                        <div class="action-buttons">
                            <a href="/contact" class="cta-primary">Start Your Strategy Session</a>
                            <a href="/about" class="cta-secondary">Learn Our Story</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>

<?php get_footer(); ?>