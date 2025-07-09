<?php
// File: /wp-content/themes/aetherbloom/page-contact.php

/**
 * Template for Contact page - Complete content update with multi-path contact
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
    
    <main class="site-main contact-page" id="main">
        <div class="content-wrapper">
            
            <!-- Hero Contact Section -->
            <section class="contact-hero-section">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-left">
                            <h1 class="hero-title"><?php esc_html_e('Let\'s Build Your Outsourcing Strategy', 'aetherbloom'); ?></h1>
                            <p class="hero-subtitle"><?php esc_html_e('Zero Commitment, Maximum Clarity', 'aetherbloom'); ?></p>
                            <p class="hero-description"><?php esc_html_e('We\'d love to hear from you! Whether you\'re ready to get started or just want to explore how Aetherbloom can support your business, send us a message using the form below and a member of our team will be in touch.', 'aetherbloom'); ?></p>
                        </div>
                        
                        <div class="hero-right">
                            <div class="contact-options">
                                <div class="contact-option-header">
                                    <h3><?php esc_html_e('Get In Touch', 'aetherbloom'); ?></h3>
                                    <p><?php esc_html_e('Choose how you\'d like to connect with us', 'aetherbloom'); ?></p>
                                </div>
                                
                                <div class="contact-buttons">
                                    <button class="contact-btn email-btn" onclick="window.location.href='mailto:info@aetherbloom.co.uk'">
                                        <div class="btn-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </div>
                                        <?php esc_html_e('Email Us', 'aetherbloom'); ?>
                                    </button>
                                    
                                    <button class="contact-btn appointment-btn" onclick="window.open('https://calendly.com/aetherbloom', '_blank')">
                                        <div class="btn-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                                <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                                <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                                <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </div>
                                        <?php esc_html_e('Book An Appointment', 'aetherbloom'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Business Assessment Section -->
            <section class="business-assessment-section">
                <div class="container">
                    <div class="assessment-content">
                        <div class="assessment-left">
                            <h2><?php esc_html_e('Quick Business Assessment', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Tell us about your business needs and we\'ll recommend the perfect solution for you.', 'aetherbloom'); ?></p>
                            
                            <div class="assessment-form" id="assessment-form">
                                <div class="assessment-question">
                                    <h3><?php esc_html_e('What\'s your primary business challenge?', 'aetherbloom'); ?></h3>
                                    <div class="option-grid">
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="customer-support">
                                            <div class="option-content">
                                                <div class="option-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 16.92V19a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h2.09a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9a16 16 0 006 6l.36-.36a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <span><?php esc_html_e('Customer Support Overload', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="admin-tasks">
                                            <div class="option-content">
                                                <div class="option-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <span><?php esc_html_e('Admin Tasks Taking Too Much Time', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="scaling-team">
                                            <div class="option-content">
                                                <div class="option-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="currentColor" stroke-width="2"/>
                                                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M23 21V19C23 17.1362 21.7252 15.5701 20 15.126" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M16 3.12598C17.7252 3.56992 19 5.13616 19 7C19 8.86384 17.7252 10.4301 16 10.874" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <span><?php esc_html_e('Need to Scale Team Quickly', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="high-costs">
                                            <div class="option-content">
                                                <div class="option-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="2"/>
                                                        <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="currentColor" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <span><?php esc_html_e('High Operational Costs', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="assessment-question">
                                    <h3><?php esc_html_e('What\'s your team size?', 'aetherbloom'); ?></h3>
                                    <div class="option-grid">
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="1-10">
                                            <div class="option-content">
                                                <span><?php esc_html_e('1-10 people', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="11-50">
                                            <div class="option-content">
                                                <span><?php esc_html_e('11-50 people', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="51-200">
                                            <div class="option-content">
                                                <span><?php esc_html_e('51-200 people', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="200+">
                                            <div class="option-content">
                                                <span><?php esc_html_e('200+ people', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="assessment-result" id="assessment-result" style="display: none;">
                                    <h3><?php esc_html_e('Here\'s what we recommend:', 'aetherbloom'); ?></h3>
                                    <div class="recommendation" id="recommendation-content">
                                        <!-- Recommendation will be populated by JavaScript -->
                                    </div>
                                    <a href="#main-contact-form" class="cta-primary"><?php esc_html_e('Get Your Custom Quote', 'aetherbloom'); ?></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="assessment-right">
                            <div class="assessment-suggestion" id="assessment-suggestion">
                                <h4><?php esc_html_e('Our Recommendation', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('Complete the assessment to see personalized recommendations for your business needs.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Multi-Path Contact Section -->
            <section class="multi-path-section">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e('Choose Your Path to Success', 'aetherbloom'); ?></h2>
                    
                    <div class="contact-paths">
                        <!-- Path 1: Quick Start -->
                        <div class="contact-path quick-start">
                            <div class="path-header">
                                <h3><?php esc_html_e('Quick Start', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Perfect for immediate needs', 'aetherbloom'); ?></p>
                            </div>
                            <div class="path-content">
                                <div class="path-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h3><?php esc_html_e('Immediate Support', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Get started within 48 hours with our ready-to-deploy talent pool', 'aetherbloom'); ?></p>
                                <ul class="path-features">
                                    <li><?php esc_html_e('Same-day consultation', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Pre-vetted candidates', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Flexible contracts', 'aetherbloom'); ?></li>
                                </ul>
                                <a href="#main-contact-form" class="path-cta"><?php esc_html_e('Start Now', 'aetherbloom'); ?></a>
                            </div>
                        </div>
                        
                        <!-- Path 2: Custom Solution -->
                        <div class="contact-path custom-solution">
                            <div class="path-header">
                                <h3><?php esc_html_e('Custom Solution', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Tailored to your specific needs', 'aetherbloom'); ?></p>
                            </div>
                            <div class="path-content">
                                <div class="path-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L2 7V17C2 17.5304 2.21071 18.0391 2.58579 18.4142C2.96086 18.7893 3.46957 19 4 19H20C20.5304 19 21.0391 18.7893 21.4142 18.4142C21.7893 18.0391 22 17.5304 22 17V7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="8,9 12,13 16,9" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h3><?php esc_html_e('Tailored Integration', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Comprehensive needs analysis and custom team building', 'aetherbloom'); ?></p>
                                <ul class="path-features">
                                    <li><?php esc_html_e('In-depth consultation', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Custom recruitment process', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Ongoing support', 'aetherbloom'); ?></li>
                                </ul>
                                <a href="#main-contact-form" class="path-cta"><?php esc_html_e('Let\'s Plan', 'aetherbloom'); ?></a>
                            </div>
                        </div>
                        
                        <!-- Path 3: Strategic Partnership -->
                        <div class="contact-path strategic-partnership">
                            <div class="path-header">
                                <h3><?php esc_html_e('Strategic Partnership', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Long-term growth partnership', 'aetherbloom'); ?></p>
                            </div>
                            <div class="path-content">
                                <div class="path-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                        <path d="M23 21V19C23 17.1362 21.7252 15.5701 20 15.126" stroke="currentColor" stroke-width="2"/>
                                        <path d="M16 3.12598C17.7252 3.56992 19 5.13616 19 7C19 8.86384 17.7252 10.4301 16 10.874" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h3><?php esc_html_e('Strategic Partnership', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Long-term growth with dedicated teams and custom solutions', 'aetherbloom'); ?></p>
                                <ul class="path-features">
                                    <li><?php esc_html_e('Dedicated account manager', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Custom workflows & processes', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Scalable team structure', 'aetherbloom'); ?></li>
                                </ul>
                                <a href="#main-contact-form" class="path-cta"><?php esc_html_e('Discuss Partnership', 'aetherbloom'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get Started Section -->
            <section class="contact-form-section" id="main-contact-form">
                <div class="container">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <h2><?php esc_html_e('Get Started in Just 2 Minutes', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Enter your email and we\'ll send you a personalized assessment form', 'aetherbloom'); ?></p>
                            
                            <div class="email-capture-form">
                                <div class="form-group">
                                    <input type="email" id="email_capture" name="email" class="form-input" placeholder="Enter your email address" required>
                                </div>
                                <button type="button" class="hubspot-form-btn" onclick="openHubSpotForm()">
                                    <?php esc_html_e('Get My Assessment', 'aetherbloom'); ?>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-right">
                            <div class="resource-download">
                                <h3><?php esc_html_e('Free Resource', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Download our guide: "The UK Leader\'s Guide to South African Talent"', 'aetherbloom'); ?></p>
                                
                                <div class="resource-form">
                                    <div class="resource-input-group">
                                        <input type="email" id="resource-email" name="resource_email" class="resource-input" placeholder="Enter your email" required>
                                        <button type="button" class="resource-btn" onclick="downloadResource()">
                                            <?php esc_html_e('Download Now', 'aetherbloom'); ?>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="contact-info">
                                    <div class="contact-item">
                                        <h4><?php esc_html_e('UK Office', 'aetherbloom'); ?></h4>
                                        <p><?php esc_html_e('London, UK', 'aetherbloom'); ?></p>
                                        <a href="tel:+44XXXXXXXXX" class="phone-link">+44 XXXX XXX XXX</a>
                                        <span class="office-hours"><?php esc_html_e('Mon-Fri, 8 AM – 6 PM GMT', 'aetherbloom'); ?></span>
                                    </div>
                                </div>
                                
                                <p class="privacy-note"><?php esc_html_e('We respect your privacy. Unsubscribe anytime.', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Alternative Contact Methods -->
            <section class="alternative-contact-section">
                <div class="container">
                    <h2><?php esc_html_e('Other Ways to Connect', 'aetherbloom'); ?></h2>
                    
                    <div class="contact-methods">
                        <div class="method-card">
                            <div class="method-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                    <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Email Us', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('General inquiries and support', 'aetherbloom'); ?></p>
                            <a href="mailto:info@aetherbloom.co.uk" class="method-link">info@aetherbloom.co.uk</a>
                        </div>
                        
                        <div class="method-card">
                            <div class="method-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Schedule a Call', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Book a time that works for you', 'aetherbloom'); ?></p>
                            <a href="#" class="method-link" onclick="openScheduler()"><?php esc_html_e('Book a consultation', 'aetherbloom'); ?></a>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>

<script>
// Contact form functionality
document.addEventListener('DOMContentLoaded', function() {
    // Assessment form logic
    const assessmentForm = document.getElementById('assessment-form');
    const assessmentResult = document.getElementById('assessment-result');
    const recommendationContent = document.getElementById('recommendation-content');
    const assessmentSuggestion = document.getElementById('assessment-suggestion');
    
    if (assessmentForm) {
        const radioButtons = assessmentForm.querySelectorAll('input[type="radio"]');
        
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                const challenge = assessmentForm.querySelector('input[name="challenge"]:checked')?.value;
                const teamSize = assessmentForm.querySelector('input[name="team_size"]:checked')?.value;
                
                if (challenge && teamSize) {
                    showRecommendation(challenge, teamSize);
                }
            });
        });
    }
    
    function showRecommendation(challenge, teamSize) {
        let recommendation = '';
        
        if (challenge === 'customer-support') {
            if (['1-10', '11-50'].includes(teamSize)) {
                recommendation = '<h4>Digital Customer Success - Essentials Tier</h4><p>Perfect for startups needing reliable customer support foundation. Start with 20hrs/month for £360.</p>';
            } else {
                recommendation = '<h4>Call Centre Solutions - Engagement Tier</h4><p>Full-time call coverage ideal for medium to large businesses. 40hrs/week for £1,600/month.</p>';
            }
        } else if (challenge === 'admin-tasks') {
            recommendation = '<h4>Add-On Services - Virtual Admin</h4><p>Streamline your administrative tasks with our virtual admin support starting from £8/hour.</p>';
        } else if (challenge === 'scaling-team') {
            if (teamSize === '200+') {
                recommendation = '<h4>Strategic Partnership</h4><p>Custom enterprise solutions with dedicated teams and account management for large organizations.</p>';
            } else {
                recommendation = '<h4>Digital Customer Success - Growth Tier</h4><p>Scalable solution perfect for growing businesses. 40hrs/week for £1,200/month.</p>';
            }
        } else if (challenge === 'high-costs') {
            recommendation = '<h4>Cost Optimization Assessment</h4><p>Let us analyze your current operations and show you exactly how much you can save with our solutions.</p>';
        }
        
        if (recommendation) {
            recommendationContent.innerHTML = recommendation;
            assessmentSuggestion.innerHTML = '<h4>Perfect Match Found!</h4>' + recommendation;
        }
    }
});

function openHubSpotForm() {
    const email = document.getElementById('email_capture').value;
    if (email) {
        // Open HubSpot form with pre-filled email
        window.open(`https://share.hsforms.com/your-form-id?email=${encodeURIComponent(email)}`, '_blank');
    } else {
        alert('Please enter your email address first.');
    }
}

function downloadResource() {
    const email = document.getElementById('resource-email').value;
    if (email) {
        // Handle resource download
        window.location.href = 'mailto:info@aetherbloom.co.uk?subject=Resource Download Request&body=Please send me the UK Leader\'s Guide to South African Talent. Email: ' + email;
    } else {
        alert('Please enter your email address first.');
    }
}

function openScheduler() {
    window.open('https://calendly.com/aetherbloom', '_blank');
}
</script>