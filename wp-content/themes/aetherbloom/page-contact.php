<?php
// File: /wp-content/themes/aetherbloom/page-contact.php

/**
 * Template for Contact page - Complete content update with multi-path contact and live chat
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
                            <div class="live-chat-simulation">
                                <div class="chat-header">
                                    <div class="chat-status">
                                        <span class="status-indicator online"></span>
                                        <span class="status-text"><?php esc_html_e('UK Team Online', 'aetherbloom'); ?></span>
                                    </div>
                                    <span class="chat-time"><?php esc_html_e('Mon-Fri, 8 AM – 6 PM GMT', 'aetherbloom'); ?></span>
                                </div>
                                <div class="chat-messages">
                                    <div class="chat-message">
                                        <div class="message-avatar">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/grace-avatar.jpg'); ?>" alt="Grace">
                                        </div>
                                        <div class="message-bubble">
                                            <?php esc_html_e('Hi! I\'m Grace from Aetherbloom. How can I help you reduce costs while scaling your team?', 'aetherbloom'); ?>
                                        </div>
                                    </div>
                                </div>
                                <button class="chat-start-btn" onclick="startLiveChat()">
                                    <?php esc_html_e('Chat Now with Our UK Team', 'aetherbloom'); ?>
                                </button>
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
                                                <div class="option-icon">📞</div>
                                                <span><?php esc_html_e('Customer Support Overload', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="admin-tasks">
                                            <div class="option-content">
                                                <div class="option-icon">📋</div>
                                                <span><?php esc_html_e('Admin Tasks Taking Too Much Time', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="scaling-team">
                                            <div class="option-content">
                                                <div class="option-icon">👥</div>
                                                <span><?php esc_html_e('Need to Scale Team Quickly', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="challenge" value="high-costs">
                                            <div class="option-content">
                                                <div class="option-icon">💰</div>
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
                                                <span><?php esc_html_e('1-10 employees', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="11-50">
                                            <div class="option-content">
                                                <span><?php esc_html_e('11-50 employees', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="51-200">
                                            <div class="option-content">
                                                <span><?php esc_html_e('51-200 employees', 'aetherbloom'); ?></span>
                                            </div>
                                        </label>
                                        <label class="option-card">
                                            <input type="radio" name="team_size" value="200+">
                                            <div class="option-content">
                                                <span><?php esc_html_e('200+ employees', 'aetherbloom'); ?></span>
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
                            <div class="trust-signals">
                                <div class="trust-item">
                                    <div class="trust-number">7</div>
                                    <div class="trust-label"><?php esc_html_e('Days Average Setup', 'aetherbloom'); ?></div>
                                </div>
                                <div class="trust-item">
                                    <div class="trust-number">92%</div>
                                    <div class="trust-label"><?php esc_html_e('English Fluency Rate', 'aetherbloom'); ?></div>
                                </div>
                                <div class="trust-item">
                                    <div class="trust-number">50+</div>
                                    <div class="trust-label"><?php esc_html_e('UK SMEs Trust Us', 'aetherbloom'); ?></div>
                                </div>
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
                            <div class="path-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Quick Start', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Get up and running in 7 days with our proven onboarding process', 'aetherbloom'); ?></p>
                            <ul class="path-features">
                                <li><?php esc_html_e('Free 14-day pilot program', 'aetherbloom'); ?></li>
                                <li><?php esc_html_e('Pre-trained UK-compliant team', 'aetherbloom'); ?></li>
                                <li><?php esc_html_e('Same-day response guaranteed', 'aetherbloom'); ?></li>
                            </ul>
                            <a href="#main-contact-form" class="path-cta"><?php esc_html_e('Start Your Pilot', 'aetherbloom'); ?></a>
                        </div>

                        <!-- Path 2: Strategic Partnership -->
                        <div class="contact-path strategic">
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
            </section>

            <!-- Main Contact Form Section -->
            <section class="contact-form-section" id="main-contact-form">
                <div class="container">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <h2><?php esc_html_e('Get Started in Just 2 Minutes', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Fill out the form below and a member of our team will be in touch within 48 hours', 'aetherbloom'); ?></p>
                            
                            <form class="contact-form" id="main-contact-form-element" method="post" action="">
                                <?php wp_nonce_field('aetherbloom_contact_form', 'contact_nonce'); ?>
                                
                                <!-- Your Details Section -->
                                <div class="form-section">
                                    <h3><?php esc_html_e('Your Details', 'aetherbloom'); ?></h3>
                                    
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="full_name"><?php esc_html_e('Full Name', 'aetherbloom'); ?> <span class="required">*</span></label>
                                            <input type="text" id="full_name" name="full_name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="company_name"><?php esc_html_e('Company Name', 'aetherbloom'); ?></label>
                                            <input type="text" id="company_name" name="company_name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="email_address"><?php esc_html_e('Email Address', 'aetherbloom'); ?> <span class="required">*</span></label>
                                            <input type="email" id="email_address" name="email_address" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="phone_number"><?php esc_html_e('Phone Number', 'aetherbloom'); ?></label>
                                            <input type="tel" id="phone_number" name="phone_number">
                                        </div>
                                    </div>
                                </div>

                                <!-- Business Requirements Section -->
                                <div class="form-section">
                                    <h3><?php esc_html_e('Business Requirements', 'aetherbloom'); ?></h3>
                                    
                                    <div class="form-group">
                                        <label for="services_interested"><?php esc_html_e('Services You\'re Interested In', 'aetherbloom'); ?></label>
                                        <select id="services_interested" name="services_interested">
                                            <option value=""><?php esc_html_e('Select a service...', 'aetherbloom'); ?></option>
                                            <option value="digital-customer-success"><?php esc_html_e('Digital Customer Success', 'aetherbloom'); ?></option>
                                            <option value="call-centre-solutions"><?php esc_html_e('Call Centre Solutions', 'aetherbloom'); ?></option>
                                            <option value="add-on-services"><?php esc_html_e('Add-On Services', 'aetherbloom'); ?></option>
                                            <option value="not-sure"><?php esc_html_e('Not sure - need consultation', 'aetherbloom'); ?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="current_team_size"><?php esc_html_e('Current Team Size', 'aetherbloom'); ?></label>
                                        <select id="current_team_size" name="current_team_size">
                                            <option value=""><?php esc_html_e('Select team size...', 'aetherbloom'); ?></option>
                                            <option value="1-10"><?php esc_html_e('1-10 employees', 'aetherbloom'); ?></option>
                                            <option value="11-50"><?php esc_html_e('11-50 employees', 'aetherbloom'); ?></option>
                                            <option value="51-200"><?php esc_html_e('51-200 employees', 'aetherbloom'); ?></option>
                                            <option value="200+"><?php esc_html_e('200+ employees', 'aetherbloom'); ?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="project_timeline"><?php esc_html_e('When do you need to start?', 'aetherbloom'); ?></label>
                                        <select id="project_timeline" name="project_timeline">
                                            <option value=""><?php esc_html_e('Select timeline...', 'aetherbloom'); ?></option>
                                            <option value="asap"><?php esc_html_e('ASAP', 'aetherbloom'); ?></option>
                                            <option value="1-month"><?php esc_html_e('Within 1 month', 'aetherbloom'); ?></option>
                                            <option value="3-months"><?php esc_html_e('Within 3 months', 'aetherbloom'); ?></option>
                                            <option value="exploring"><?php esc_html_e('Just exploring options', 'aetherbloom'); ?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="project_details"><?php esc_html_e('Tell us about your project and requirements', 'aetherbloom'); ?></label>
                                        <textarea id="project_details" name="project_details" rows="4" placeholder="<?php esc_attr_e('Describe your business challenges, what you hope to achieve, and any specific requirements...', 'aetherbloom'); ?>"></textarea>
                                    </div>
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="submit-btn">
                                        <?php esc_html_e('Submit Form → We\'ll respond within 48 hours', 'aetherbloom'); ?>
                                    </button>
                                    <p class="form-footer">
                                        <?php esc_html_e('Prefer to talk?', 'aetherbloom'); ?> 
                                        <a href="#direct-contact" class="book-call-link"><?php esc_html_e('Contact us directly', 'aetherbloom'); ?></a>
                                    </p>
                                </div>
                            </form>
                        </div>

                        <div class="form-right">
                            <!-- Free Resource Download -->
                            <div class="resource-download">
                                <div class="resource-icon">
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" stroke="currentColor" stroke-width="2"/>
                                        <path d="M14 2V8H20" stroke="currentColor" stroke-width="2"/>
                                        <path d="M16 13H8" stroke="currentColor" stroke-width="2"/>
                                        <path d="M16 17H8" stroke="currentColor" stroke-width="2"/>
                                        <path d="M10 9H8" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <h4><?php esc_html_e('Free Resource', 'aetherbloom'); ?></h4>
                                <h5><?php esc_html_e('"The UK Leader\'s Guide to South African Talent"', 'aetherbloom'); ?></h5>
                                <p><?php esc_html_e('Download our comprehensive guide to understanding and leveraging South African talent for UK businesses.', 'aetherbloom'); ?></p>
                                
                                <form class="resource-form" id="resource-download-form">
                                    <div class="resource-input-group">
                                        <input type="email" id="resource_email" name="resource_email" placeholder="<?php esc_attr_e('Enter your email for instant download', 'aetherbloom'); ?>" required>
                                        <button type="submit" class="resource-btn"><?php esc_html_e('Download Free Guide', 'aetherbloom'); ?></button>
                                    </div>
                                    <p class="resource-note"><?php esc_html_e('No spam. Unsubscribe anytime.', 'aetherbloom'); ?></p>
                                </form>
                            </div>

                            <!-- Direct Contact Cards -->
                            <div class="contact-cards" id="direct-contact">
                                <div class="contact-card uk-office">
                                    <div class="card-flag">🇬🇧</div>
                                    <h4><?php esc_html_e('UK Office (Grace)', 'aetherbloom'); ?></h4>
                                    <p class="office-location"><?php esc_html_e('London, UK', 'aetherbloom'); ?></p>
                                    <a href="tel:+44XXXXXXXXX" class="phone-link">+44 XXXX XXX XXX</a>
                                    <span class="office-hours"><?php esc_html_e('Mon-Fri, 8 AM – 6 PM GMT', 'aetherbloom'); ?></span>
                                    <div class="contact-speciality">
                                        <small><?php esc_html_e('Client Strategy & Growth', 'aetherbloom'); ?></small>
                                    </div>
                                </div>
                                
                                <div class="contact-card sa-office">
                                    <div class="card-flag">🇿🇦</div>
                                    <h4><?php esc_html_e('SA Hub (Della)', 'aetherbloom'); ?></h4>
                                    <p class="office-location"><?php esc_html_e('Johannesburg, SA', 'aetherbloom'); ?></p>
                                    <a href="tel:+27XXXXXXXX" class="phone-link">+27 XX XXX XXXX</a>
                                    <span class="office-hours"><?php esc_html_e('Mon-Fri, 7 AM – 5 PM SAST', 'aetherbloom'); ?></span>
                                    <div class="contact-speciality">
                                        <small><?php esc_html_e('Operations & Talent Management', 'aetherbloom'); ?></small>
                                    </div>
                                </div>
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
                                    <path d="M22 16.92V19.92C22 20.42 21.72 20.87 21.31 21.11C20.9 21.35 20.4 21.35 20 21.11L12 17.03L4 21.11C3.6 21.35 3.1 21.35 2.69 21.11C2.28 20.87 2 20.42 2 19.92V16.92C2 16.42 2.28 15.97 2.69 15.73L12 10.73L21.31 15.73C21.72 15.97 22 16.42 22 16.92Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('LinkedIn', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Connect with our founders', 'aetherbloom'); ?></p>
                            <a href="https://linkedin.com/company/aetherbloom" class="method-link" target="_blank"><?php esc_html_e('Follow us on LinkedIn', 'aetherbloom'); ?></a>
                        </div>
                        
                        <div class="method-card">
                            <div class="method-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2"/>
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
                recommendation = '<h4>Digital Customer Success - Growth Tier</h4><p>Scalable solution perfect for growing businesses. 30hrs/month for £500.</p>';
            }
        } else if (challenge === 'high-costs') {
            recommendation = '<h4>Cost Optimization Analysis</h4><p>Let us analyze your current operations and show you how to save 40%+ on operational costs.</p>';
        }
        
        recommendationContent.innerHTML = recommendation;
        assessmentResult.style.display = 'block';
        assessmentResult.scrollIntoView({ behavior: 'smooth' });
    }
    
    // Live chat simulation
    window.startLiveChat = function() {
        alert('Live chat feature coming soon! For now, please use the contact form below or call us directly.');
    };
    
    // Scheduler function
    window.openScheduler = function() {
        alert('Scheduling system integration coming soon! Please contact us directly to book a call.');
    };
    
    // Resource download form
    const resourceForm = document.getElementById('resource-download-form');
    if (resourceForm) {
        resourceForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('resource_email').value;
            if (email) {
                alert('Thank you! Your download link has been sent to ' + email);
                resourceForm.reset();
            }
        });
    }
});
</script>