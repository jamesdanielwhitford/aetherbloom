<?php
// File: /wp-content/themes/aetherbloom/page-services.php

/**
 * Template for Services page - Complete content update with detailed service packages
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
                            <span class="stat-label">Support Available</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">7</span>
                            <span class="stat-label">Days Setup</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Digital Customer Success Packages Section -->
            <section class="digital-services-section">
                <div class="container">
                    <div class="section-header">
                        <h2>1. Digital Customer Success Packages</h2>
                        <p>Scalable, remote-first support to manage customer interactions, drive satisfaction and ease operational pressure without the overhead.</p>
                        <div class="section-note">
                            <em>* Please see examples of what your bespoke Aetherbloom package could look like *</em>
                        </div>
                    </div>
                    
                    <div class="services-grid">
                        <!-- Essentials Tier -->
                        <div class="service-tier essentials-tier">
                            <div class="tier-header">
                                <div class="tier-badge">Most Popular</div>
                                <h3 class="tier-name">Essentials Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£360</span>
                                    <span class="period">20hrs/month</span>
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
                                
                                <div class="tier-deliverables">
                                    <h4>Deliverables:</h4>
                                    <ul>
                                        <li>Response time: Within 12 hours</li>
                                        <li>85% first-contact resolution target</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Growth Tier -->
                        <div class="service-tier growth-tier">
                            <div class="tier-header">
                                <h3 class="tier-name">Growth Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£500</span>
                                    <span class="period">30hrs/month</span>
                                </div>
                                <p class="tier-ideal">Ideal for: Scaling businesses that want consistent, proactive customer care</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>All Essentials features plus:</h4>
                                </div>
                                
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
                                
                                <div class="tier-deliverables">
                                    <h4>Deliverables:</h4>
                                    <ul>
                                        <li>Response time: Within 8 hours</li>
                                        <li>90% satisfaction score target</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Enterprise Tier -->
                        <div class="service-tier enterprise-tier">
                            <div class="tier-header">
                                <div class="tier-badge">Premium</div>
                                <h3 class="tier-name">Enterprise Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£730</span>
                                    <span class="period">50hrs/month</span>
                                </div>
                                <p class="tier-ideal">Ideal for: High-volume teams needing dedicated, data-driven support</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>All Growth features plus:</h4>
                                </div>
                                
                                <div class="feature-group">
                                    <h4>Premium Features</h4>
                                    <ul>
                                        <li>Custom workflows & templates</li>
                                        <li>Priority ticket handling</li>
                                        <li>Monthly performance reports</li>
                                    </ul>
                                </div>
                                
                                <div class="tier-deliverables">
                                    <h4>Deliverables:</h4>
                                    <ul>
                                        <li>Response time: Within 4 hours</li>
                                        <li>Dedicated account manager included</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="uk-equivalent">
                                <strong>UK Equivalent Cost: £1,800–£2,500/month</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call Centre Solutions Section -->
            <section class="call-centre-section">
                <div class="container">
                    <div class="section-header">
                        <h2>2. Call Centre Solutions</h2>
                        <p>Voice-first support for businesses needing inbound, outbound, and sales-focused customer engagement.</p>
                    </div>
                    
                    <div class="services-grid">
                        <!-- Reception Tier -->
                        <div class="service-tier reception-tier">
                            <div class="tier-header">
                                <h3 class="tier-name">Reception Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£12</span>
                                    <span class="period">per hour</span>
                                </div>
                                <div class="tier-monthly">20hrs/month</div>
                                <p class="tier-ideal">Ideal for: Small businesses needing a friendly voice on the line</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>Inbound Call Handling</h4>
                                    <ul>
                                        <li>Call answering & routing</li>
                                        <li>CRM updates & call logging</li>
                                        <li>Appointment scheduling</li>
                                        <li>Standard FAQs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Engagement Tier -->
                        <div class="service-tier engagement-tier">
                            <div class="tier-header">
                                <div class="tier-badge">Recommended</div>
                                <h3 class="tier-name">Engagement Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£1,600</span>
                                    <span class="period">per month</span>
                                </div>
                                <div class="tier-monthly">40hrs/week</div>
                                <p class="tier-ideal">Ideal for: Medium-sized businesses ready for full-time call coverage</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>All Reception features plus:</h4>
                                    <ul>
                                        <li>Outbound follow-ups & courtesy calls</li>
                                        <li>Upselling (optional commission model)</li>
                                        <li>Basic complaint handling</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sales Accelerator Tier -->
                        <div class="service-tier sales-tier">
                            <div class="tier-header">
                                <div class="tier-badge">Enterprise</div>
                                <h3 class="tier-name">Sales Accelerator Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£5,000</span>
                                    <span class="period">per month</span>
                                </div>
                                <div class="tier-monthly">3 agents with shift coverage</div>
                                <p class="tier-ideal">Ideal for: Businesses focused on lead generation & sales growth</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>All Engagement features plus:</h4>
                                    <ul>
                                        <li>Cold calling & lead qualification</li>
                                        <li>Custom scripts & campaign management</li>
                                        <li>Live dashboards & call QA</li>
                                        <li>Priority escalation management</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="uk-equivalent">
                                <strong>UK Equivalent Cost: £3,500–£7,000/month</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service Comparison Section -->
            <section class="service-comparison-section">
                <div class="container">
                    <div class="section-header">
                        <h2>3. Which Is Right for You?</h2>
                        <p>Compare our digital and call centre solutions at a glance</p>
                    </div>
                    
                    <div class="comparison-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Digital Customer Success</th>
                                    <th>Call Centre Solutions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Channels</strong></td>
                                    <td>Email, Chat</td>
                                    <td>Phone, Voice</td>
                                </tr>
                                <tr>
                                    <td><strong>Speed</strong></td>
                                    <td>Hours</td>
                                    <td>Real-time (Minutes)</td>
                                </tr>
                                <tr>
                                    <td><strong>Style</strong></td>
                                    <td>Reactive + Proactive</td>
                                    <td>Reactive + Sales</td>
                                </tr>
                                <tr>
                                    <td><strong>Suited For</strong></td>
                                    <td>Order/account support</td>
                                    <td>High-touch engagement</td>
                                </tr>
                                <tr>
                                    <td><strong>Pricing Model</strong></td>
                                    <td>Monthly tiered</td>
                                    <td>Hourly / Dedicated Teams</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Add-On Services Section -->
            <section class="addon-services-section">
                <div class="container">
                    <div class="section-header">
                        <h2>Add-On Services (From £8/hour)</h2>
                        <p>Specialist support to scale your operations, bespoke packages available upon request.</p>
                    </div>
                    
                    <div class="addon-grid">
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 21V19C16 16.7909 14.2091 15 12 15H5C2.79086 15 1 16.7909 1 19V21" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="8.5" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                    <path d="M23 21V19C23 17.1362 21.7252 15.5701 20 15.126" stroke="currentColor" stroke-width="2"/>
                                    <path d="M16 3.12598C17.7252 3.56992 19 5.13616 19 7C19 8.86384 17.7252 10.4301 16 10.874" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>HR Support</h4>
                            <p>Recruitment assistance, employee onboarding, and HR administration</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M14 2V8H20" stroke="currentColor" stroke-width="2"/>
                                    <path d="M16 13H8" stroke="currentColor" stroke-width="2"/>
                                    <path d="M16 17H8" stroke="currentColor" stroke-width="2"/>
                                    <path d="M10 9H8" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Virtual Admin</h4>
                            <p>Data entry, calendar management, and administrative tasks</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Book-keeping & Accounting</h4>
                            <p>Financial record keeping, invoicing, and basic accounting support</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 3V21H21" stroke="currentColor" stroke-width="2"/>
                                    <path d="M9 9L12 6L16 10L21 5" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Data Analysis</h4>
                            <p>Business intelligence, reporting, and data-driven insights</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7V12C2 17.55 5.84 22.54 9.35 23.85C10.15 24.05 11.15 24.05 12 24C12.85 24.05 13.85 24.05 14.65 23.85C18.16 22.54 22 17.55 22 12V7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Business Coaching</h4>
                            <p>Strategic guidance, process optimization, and growth planning</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                    <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Website Design</h4>
                            <p>Web development, design support, and digital presence management</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Clients Choose Aetherbloom Section -->
            <section class="why-choose-section">
                <div class="container">
                    <div class="section-header">
                        <h2>Why Clients Choose Aetherbloom</h2>
                        <p>What sets us apart in the outsourcing landscape</p>
                    </div>
                    
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L3.09 8.26L4 21L12 17L20 21L20.91 8.26L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Ethical Outsourcing</h3>
                            <p>Your support powers real employment for women in South Africa.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Culturally Aligned</h3>
                            <p>Our teams are fluent in UK business standards & tone.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.7 6.3C15.1 5.9 15.1 5.3 14.7 4.9C14.3 4.5 13.7 4.5 13.3 4.9L5 13.2L1.7 9.9C1.3 9.5 0.7 9.5 0.3 9.9C-0.1 10.3 -0.1 10.9 0.3 11.3L4.3 15.3C4.7 15.7 5.3 15.7 5.7 15.3L14.7 6.3Z" fill="currentColor"/>
                                    <path d="M21.7 6.3C22.1 5.9 22.1 5.3 21.7 4.9C21.3 4.5 20.7 4.5 20.3 4.9L12 13.2L8.7 9.9C8.3 9.5 7.7 9.5 7.3 9.9C6.9 10.3 6.9 10.9 7.3 11.3L11.3 15.3C11.7 15.7 12.3 15.7 12.7 15.3L21.7 6.3Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <h3>Tool Integration</h3>
                            <p>We work with Zendesk, HubSpot, Shopify & more.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Fast Setup</h3>
                            <p>Get up and running in as little as 7 days.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Next Steps Section -->
            <section class="next-steps-section">
                <div class="container">
                    <div class="next-steps-content">
                        <h2>Next Steps</h2>
                        <p>Ready to get started?</p>
                        
                        <div class="steps-grid">
                            <div class="step-card">
                                <div class="step-number">1</div>
                                <h3>Calculate Savings</h3>
                                <p>See your potential cost reduction with our interactive calculator</p>
                                <a href="<?php echo esc_url(home_url('/#pricing')); ?>" class="step-cta">Try Calculator</a>
                            </div>
                            
                            <div class="step-card">
                                <div class="step-number">2</div>
                                <h3>Start Small</h3>
                                <p>14-day pilot program available to test our services</p>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="step-cta">Start Pilot</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>