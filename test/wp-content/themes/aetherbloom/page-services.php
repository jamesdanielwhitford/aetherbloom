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
                        <h2><strong>Digital Customer Success Packages</strong></h2>
                        <p>Scalable, remote-first support to manage customer interactions, drive satisfaction and ease operational pressure without the overhead.</p>
                    </div>
                    
                    <div class="services-grid">
                        <!-- Essentials Tier -->
                        <div class="service-tier essentials-tier">
                            <div class="tier-header">
                                <div class="tier-badge">
                                    <span class="badge-text">Most Popular</span>
                                </div>
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
                                        <li>CRM updates (e.g. HubSpot, Salesforce)</li>
                                    </ul>
                                </div>
                                
                                <div class="feature-group">
                                    <h4>Reporting & Quality</h4>
                                    <ul>
                                        <li>Weekly performance dashboards</li>
                                        <li>Response time monitoring</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="tier-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="tier-button">Get Started</a>
                            </div>
                        </div>
                        
                        <!-- Growth Tier -->
                        <div class="service-tier growth-tier">
                            <div class="tier-header">
                                <div class="tier-badge">
                                    <span class="badge-text">Popular</span>
                                </div>
                                <h3 class="tier-name">Growth Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£720</span>
                                    <span class="period">40hrs/month</span>
                                </div>
                                <p class="tier-ideal">Ideal for: Growing businesses needing comprehensive support</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>Enhanced Customer Care</h4>
                                    <ul>
                                        <li>Multi-channel support (email, chat, phone)</li>
                                        <li>Advanced query handling</li>
                                    </ul>
                                </div>
                                
                                <div class="feature-group">
                                    <h4>Process Management</h4>
                                    <ul>
                                        <li>Returns & refunds processing</li>
                                        <li>Complaint resolution</li>
                                    </ul>
                                </div>
                                
                                <div class="feature-group">
                                    <h4>Analytics & Insights</h4>
                                    <ul>
                                        <li>Customer satisfaction tracking</li>
                                        <li>Performance optimisation</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="tier-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="tier-button">Get Started</a>
                            </div>
                        </div>
                        
                        <!-- Scale Tier -->
                        <div class="service-tier scale-tier">
                            <div class="tier-header">
                                <div class="tier-badge">
                                    <span class="badge-text">Premium</span>
                                </div>
                                <h3 class="tier-name">Scale Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£1,440</span>
                                    <span class="period">80hrs/month</span>
                                </div>
                                <p class="tier-ideal">Ideal for: Established businesses requiring dedicated teams</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>Dedicated Team</h4>
                                    <ul>
                                        <li>Dedicated account manager</li>
                                        <li>Specialised team training</li>
                                    </ul>
                                </div>
                                
                                <div class="feature-group">
                                    <h4>Advanced Operations</h4>
                                    <ul>
                                        <li>Custom workflow development</li>
                                        <li>Integration management</li>
                                    </ul>
                                </div>
                                
                                <div class="feature-group">
                                    <h4>Strategic Support</h4>
                                    <ul>
                                        <li>Monthly strategy reviews</li>
                                        <li>Continuous improvement</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="tier-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="tier-button">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call Centre Solutions Section -->
            <section class="digital-services-section">
                <div class="container">
                    <div class="section-header">
                        <h2><strong>Call Centre Solutions</strong></h2>
                        <p>Voice-first support for businesses needing inbound, outbound, and sales-focused customer engagement.</p>
                    </div>
                    
                    <div class="services-grid">
                        <!-- Reception Tier -->
                        <div class="service-tier essentials-tier">
                            <div class="tier-header">
                                <h3 class="tier-name">Reception <br/>Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£12/hr</span>
                                    <span class="period">20hrs/month</span>
                                </div>
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
                            
                            <div class="tier-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="tier-button">Get Started</a>
                            </div>
                        </div>
                        
                        <!-- Engagement Tier -->
                        <div class="service-tier growth-tier">
                            <div class="tier-header">
                                <h3 class="tier-name">Engagement <br/>Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£1,600</span>
                                    <span class="period">40hrs/week</span>
                                </div>
                                <p class="tier-ideal">Ideal for: Medium-sized businesses ready for full-time call coverage</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>All Reception features</h4>
                                    <ul>
                                        <li>Outbound follow-ups & courtesy calls</li>
                                        <li>Upselling (optional commission model)</li>
                                        <li>Basic complaint handling</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="tier-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="tier-button">Get Started</a>
                            </div>
                        </div>
                        
                        <!-- Sales Accelerator Tier -->
                        <div class="service-tier scale-tier">
                            <div class="tier-header">
                                <h3 class="tier-name">Sales Accelerator Tier</h3>
                                <div class="tier-pricing">
                                    <span class="price">£5,000</span>
                                </div>
                                <p class="period">3 agents with shift coverage</p>
                                <p class="tier-ideal">Ideal for: Businesses focused on lead generation & sales growth</p>
                            </div>
                            
                            <div class="tier-features">
                                <div class="feature-group">
                                    <h4>All Engagement features</h4>
                                    <ul>
                                        <li>Cold calling & lead qualification</li>
                                        <li>Custom scripts & campaign management</li>
                                        <li>Live dashboards & call QA</li>
                                        <li>Priority escalation management</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="tier-cta">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="tier-button">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service Comparison Section -->
            <section class="service-comparison-section">
                <div class="container">
                    <div class="section-header">
                        <h2><strong>Aetherbloom vs Traditional Outsourcing</strong></h2>
                        <p>See the difference ethical outsourcing makes</p>
                    </div>
                    
                    <div class="comparison-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Aetherbloom</th>
                                    <th>Traditional BPO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cultural Alignment</td>
                                    <td>UK-focused training</td>
                                    <td>Generic approach</td>
                                </tr>
                                <tr>
                                    <td>Setup Time</td>
                                    <td>7 days</td>
                                    <td>4-6 weeks</td>
                                </tr>
                                <tr>
                                    <td>Quality Standards</td>
                                    <td>UK compliance certified</td>
                                    <td>Variable</td>
                                </tr>
                                <tr>
                                    <td>Social Impact</td>
                                    <td>Empowering women</td>
                                    <td>Minimal</td>
                                </tr>
                                <tr>
                                    <td>Transparency</td>
                                    <td>Full visibility</td>
                                    <td>Limited</td>
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
                        <h2><strong>Add-On Services</strong> (From £8/hour)</h2>
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
                            <p>Diary management, inbox organisation, and task coordination</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 1L21 5V10C21 16 16.5 21 12 22C7.5 21 3 16 3 10V5L12 1Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Book-keeping & Accounting</h4>
                            <p>Invoice processing, expense tracking, and financial administration</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 3V21H21V3H3Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M3 9H21" stroke="currentColor" stroke-width="2"/>
                                    <path d="M9 21V9" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Data Analysis</h4>
                            <p>Custom reporting, insights generation, and business intelligence</p>
                        </div>
                        
                        <div class="addon-card">
                            <div class="addon-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7V12C2 17.55 5.84 22.54 9.35 23.85C10.15 24.05 11.15 24.05 12 24C12.85 24.05 13.85 24.05 14.65 23.85C18.16 22.54 22 17.55 22 12V7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h4>Business Coaching</h4>
                            <p>Strategic guidance, process optimisation, and growth planning</p>
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
                        <h2><strong>Why Clients Choose Aetherbloom</strong></h2>
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
                                    <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Culturally Aligned</h3>
                            <p>Our teams are fluent in UK business standards and tone.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 3H21V21H3V3Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M3 9H21" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 3V21" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3>Tool Integration</h3>
                            <p>We work with Zendesk, HubSpot, Shopify and more.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Next Steps Section -->
            <section class="next-steps-section">
                <div class="next-steps-background"></div>
                <div class="container">
                    <div class="next-steps-content">
                        <h2><strong>Next Steps</strong></h2>
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
                                <p>14-day pilot programme available to test our services</p>
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

<script>
// Services page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for navigation links
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add hover effects to cards
    const cards = document.querySelectorAll('.service-tier, .addon-card, .benefit-card, .step-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>

<?php wp_footer(); ?>