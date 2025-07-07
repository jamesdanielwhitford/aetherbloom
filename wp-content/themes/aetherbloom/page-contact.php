<?php
// File: /wp-content/themes/aetherbloom/page-contact.php

/**
 * Template for Contact page - Conversion-optimized with varied layouts
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
            
            <!-- Hero Contact Section with Instant Quote -->
            <section class="contact-hero-section">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-left">
                            <h1 class="hero-title"><?php esc_html_e('Let\'s Build Your Outsourcing Strategy', 'aetherbloom'); ?></h1>
                            <p class="hero-subtitle"><?php esc_html_e('Zero Commitment, Maximum Clarity', 'aetherbloom'); ?></p>
                            <p class="hero-description"><?php esc_html_e('We\'d love to hear from you! Whether you\'re ready to get started or just want to explore how Aetherbloom can support your business, choose your preferred way to connect below.', 'aetherbloom'); ?></p>
                            
                            <div class="hero-ctas">
                                <a href="#instant-quote" class="cta-primary"><?php esc_html_e('Get Instant Quote', 'aetherbloom'); ?></a>
                                <a href="#discovery-call" class="cta-secondary"><?php esc_html_e('Schedule Discovery Call', 'aetherbloom'); ?></a>
                            </div>
                        </div>
                        
                        <div class="hero-right">
                            <div class="live-chat-simulation">
                                <div class="chat-header">
                                    <div class="chat-status">
                                        <span class="status-indicator online"></span>
                                        <span><?php esc_html_e('UK Team Online', 'aetherbloom'); ?></span>
                                    </div>
                                    <span class="chat-time"><?php esc_html_e('Mon-Fri, 8 AM – 6 PM GMT', 'aetherbloom'); ?></span>
                                </div>
                                <div class="chat-messages">
                                    <div class="chat-message">
                                        <div class="message-bubble">
                                            <?php esc_html_e('Hi! I\'m Grace from Aetherbloom. How can I help you reduce costs while scaling your team?', 'aetherbloom'); ?>
                                        </div>
                                    </div>
                                </div>
                                <button class="chat-start-btn" onclick="startLiveChat()"><?php esc_html_e('Start Chat Now', 'aetherbloom'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Instant Quote Calculator Section -->
            <section class="instant-quote-section" id="instant-quote">
                <div class="container">
                    <div class="quote-header">
                        <h2><?php esc_html_e('See Your Potential Savings Instantly', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Calculate your cost reduction vs UK hiring in real-time', 'aetherbloom'); ?></p>
                    </div>
                    
                    <!-- Include the pricing calculator template part -->
                    <?php get_template_part('template-parts/pricing-calculator'); ?>
                    
                    <div class="quote-cta">
                        <h3><?php esc_html_e('Ready to Start Saving?', 'aetherbloom'); ?></h3>
                        <a href="#contact-form" class="cta-primary"><?php esc_html_e('Claim Your Free Strategy Session', 'aetherbloom'); ?></a>
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
                            <a href="#contact-form" class="path-cta"><?php esc_html_e('Start Your Pilot', 'aetherbloom'); ?></a>
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
                                <li><?php esc_html_e('Custom workflows & SLAs', 'aetherbloom'); ?></li>
                                <li><?php esc_html_e('Quarterly business reviews', 'aetherbloom'); ?></li>
                            </ul>
                            <a href="#discovery-call" class="path-cta"><?php esc_html_e('Schedule Strategy Call', 'aetherbloom'); ?></a>
                        </div>

                        <!-- Path 3: CSR Impact -->
                        <div class="contact-path impact">
                            <div class="path-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.84 4.61A5.5 5.5 0 0 0 16 2A5.5 5.5 0 0 0 11.16 4.61A5.5 5.5 0 0 0 6.32 7A5.5 5.5 0 0 0 4.61 11.84A5.5 5.5 0 0 0 7 16.68A5.5 5.5 0 0 0 11.84 19.39A5.5 5.5 0 0 0 16 22A5.5 5.5 0 0 0 20.16 19.39A5.5 5.5 0 0 0 22 16.68A5.5 5.5 0 0 0 19.39 11.84A5.5 5.5 0 0 0 20.84 4.61Z" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 8L14 10L12 12L10 10L12 8Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('CSR & Impact Partnership', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Combine business efficiency with measurable social impact', 'aetherbloom'); ?></p>
                            <ul class="path-features">
                                <li><?php esc_html_e('B-BBEE Level 1 compliance', 'aetherbloom'); ?></li>
                                <li><?php esc_html_e('Annual impact reporting', 'aetherbloom'); ?></li>
                                <li><?php esc_html_e('Co-branded CSR initiatives', 'aetherbloom'); ?></li>
                            </ul>
                            <a href="mailto:partnerships@aetherbloom.co.za" class="path-cta"><?php esc_html_e('Partner with Grace', 'aetherbloom'); ?></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Interactive Assessment Tool -->
            <section class="assessment-section">
                <div class="container">
                    <div class="assessment-wrapper">
                        <div class="assessment-left">
                            <h2><?php esc_html_e('Find Your Perfect Service Match', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Answer 3 quick questions to discover which Aetherbloom service is right for your business', 'aetherbloom'); ?></p>
                            
                            <div class="assessment-tool" id="assessment-tool">
                                <div class="question-container active" data-question="1">
                                    <h3><?php esc_html_e('What\'s your primary need?', 'aetherbloom'); ?></h3>
                                    <div class="options">
                                        <button class="option-btn" data-value="customer-support"><?php esc_html_e('Customer Support & Service', 'aetherbloom'); ?></button>
                                        <button class="option-btn" data-value="admin-tasks"><?php esc_html_e('Admin & Back-Office Tasks', 'aetherbloom'); ?></button>
                                        <button class="option-btn" data-value="sales-growth"><?php esc_html_e('Sales & Lead Generation', 'aetherbloom'); ?></button>
                                    </div>
                                </div>

                                <div class="question-container" data-question="2">
                                    <h3><?php esc_html_e('What\'s your team size?', 'aetherbloom'); ?></h3>
                                    <div class="options">
                                        <button class="option-btn" data-value="startup"><?php esc_html_e('Startup (1-10 employees)', 'aetherbloom'); ?></button>
                                        <button class="option-btn" data-value="sme"><?php esc_html_e('Growing SME (11-50 employees)', 'aetherbloom'); ?></button>
                                        <button class="option-btn" data-value="enterprise"><?php esc_html_e('Established Business (50+ employees)', 'aetherbloom'); ?></button>
                                    </div>
                                </div>

                                <div class="question-container" data-question="3">
                                    <h3><?php esc_html_e('What\'s your timeline?', 'aetherbloom'); ?></h3>
                                    <div class="options">
                                        <button class="option-btn" data-value="immediate"><?php esc_html_e('Need help now (within 2 weeks)', 'aetherbloom'); ?></button>
                                        <button class="option-btn" data-value="planning"><?php esc_html_e('Planning ahead (1-3 months)', 'aetherbloom'); ?></button>
                                        <button class="option-btn" data-value="exploring"><?php esc_html_e('Just exploring options', 'aetherbloom'); ?></button>
                                    </div>
                                </div>

                                <div class="assessment-result" id="assessment-result" style="display: none;">
                                    <h3><?php esc_html_e('Perfect! Here\'s what we recommend:', 'aetherbloom'); ?></h3>
                                    <div class="recommendation" id="recommendation-content">
                                        <!-- Recommendation will be populated by JavaScript -->
                                    </div>
                                    <a href="#contact-form" class="cta-primary"><?php esc_html_e('Get Your Custom Quote', 'aetherbloom'); ?></a>
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

            <!-- Main Contact Form Section -->
            <section class="contact-form-section" id="contact-form">
                <div class="container">
                    <div class="form-wrapper">
                        <div class="form-left">
                            <h2><?php esc_html_e('Get Started in Just 2 Minutes', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Fill out the form below and a member of our team will be in touch within 48 hours', 'aetherbloom'); ?></p>
                            
                            <form class="contact-form" id="main-contact-form" method="post" action="">
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
                                            <span class="form-note"><?php esc_html_e('We\'ll call within 48hrs if preferred', 'aetherbloom'); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Needs Section -->
                                <div class="form-section">
                                    <h3><?php esc_html_e('Service Needs', 'aetherbloom'); ?></h3>
                                    
                                    <div class="form-group">
                                        <label for="primary_service"><?php esc_html_e('Primary Service', 'aetherbloom'); ?></label>
                                        <select id="primary_service" name="primary_service">
                                            <option value=""><?php esc_html_e('Select one', 'aetherbloom'); ?></option>
                                            <option value="digital-customer-success"><?php esc_html_e('Digital Customer Success (Email/chat support, order management, CRM updates)', 'aetherbloom'); ?></option>
                                            <option value="call-centre"><?php esc_html_e('Call Centre Solutions (Inbound/outbound calls, sales support, appointment booking)', 'aetherbloom'); ?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label><?php esc_html_e('Add-On Services (Optional)', 'aetherbloom'); ?></label>
                                        <div class="checkbox-group">
                                            <label class="checkbox-label">
                                                <input type="checkbox" name="addon_services[]" value="hr-support">
                                                <?php esc_html_e('HR Support (Onboarding, employee records)', 'aetherbloom'); ?>
                                            </label>
                                            <label class="checkbox-label">
                                                <input type="checkbox" name="addon_services[]" value="virtual-admin">
                                                <?php esc_html_e('Virtual Admin (Diary, inbox & task management)', 'aetherbloom'); ?>
                                            </label>
                                            <label class="checkbox-label">
                                                <input type="checkbox" name="addon_services[]" value="bookkeeping">
                                                <?php esc_html_e('Bookkeeping (Invoicing, expense tracking)', 'aetherbloom'); ?>
                                            </label>
                                            <label class="checkbox-label">
                                                <input type="checkbox" name="addon_services[]" value="data-analysis">
                                                <?php esc_html_e('Data Analysis (Custom reports & insights)', 'aetherbloom'); ?>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="how_can_help"><?php esc_html_e('How Can We Help?', 'aetherbloom'); ?></label>
                                        <textarea id="how_can_help" name="how_can_help" rows="4" placeholder="<?php esc_attr_e('Tell us more (Optional but helpful!)', 'aetherbloom'); ?>"></textarea>
                                    </div>
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="submit-btn"><?php esc_html_e('Submit Form → We\'ll respond within 48 hours', 'aetherbloom'); ?></button>
                                    <p class="form-footer">
                                        <?php esc_html_e('Prefer to talk?', 'aetherbloom'); ?> 
                                        <a href="#scheduler" class="book-call-link"><?php esc_html_e('Book a quick call', 'aetherbloom'); ?></a>
                                    </p>
                                </div>
                            </form>
                        </div>

                        <div class="form-right">
                            <!-- Direct Contact Cards -->
                            <div class="contact-cards">
                                <div class="contact-card uk-office">
                                    <h4><?php esc_html_e('UK Office (Grace)', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('London, UK', 'aetherbloom'); ?></p>
                                    <a href="tel:+44XXXXXXXXX" class="phone-link">+44 XXXX XXX XXX</a>
                                    <span class="office-hours"><?php esc_html_e('Mon-Fri, 8 AM – 6 PM GMT', 'aetherbloom'); ?></span>
                                </div>
                                
                                <div class="contact-card sa-office">
                                    <h4><?php esc_html_e('SA Hub (Della)', 'aetherbloom'); ?></h4>
                                    <p><?php esc_html_e('Johannesburg, SA', 'aetherbloom'); ?></p>
                                    <a href="tel:+27XXXXXXXX" class="phone-link">+27 XX XXX XXXX</a>
                                    <span class="office-hours"><?php esc_html_e('Mon-Fri, 7 AM – 5 PM SAST', 'aetherbloom'); ?></span>
                                </div>
                            </div>

                            <!-- Free Resource Download -->
                            <div class="resource-download">
                                <h4><?php esc_html_e('Free Resource', 'aetherbloom'); ?></h4>
                                <p><?php esc_html_e('"The UK Leader\'s Guide to South African Talent"', 'aetherbloom'); ?></p>
                                <form class="resource-form" id="resource-form">
                                    <input type="email" placeholder="<?php esc_attr_e('Your email address', 'aetherbloom'); ?>" required>
                                    <button type="submit"><?php esc_html_e('Instant Download', 'aetherbloom'); ?></button>
                                </form>
                                <small><?php esc_html_e('Email capture + instant download', 'aetherbloom'); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Meeting Scheduler Section -->
            <section class="scheduler-section" id="discovery-call">
                <div class="container">
                    <div class="scheduler-wrapper">
                        <div class="scheduler-left">
                            <h2><?php esc_html_e('Schedule a 15-Min Discovery Call', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Choose a time that works for your zone', 'aetherbloom'); ?></p>
                            
                            <div class="scheduler-benefits">
                                <div class="benefit-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span><?php esc_html_e('Understand your specific needs', 'aetherbloom'); ?></span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span><?php esc_html_e('Discuss potential cost savings', 'aetherbloom'); ?></span>
                                </div>
                                <div class="benefit-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span><?php esc_html_e('Explore partnership opportunities', 'aetherbloom'); ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="scheduler-right">
                            <div class="calendar-embed">
                                <!-- Placeholder for Calendly embed -->
                                <div class="calendar-placeholder">
                                    <h3><?php esc_html_e('Meeting Scheduler', 'aetherbloom'); ?></h3>
                                    <p><?php esc_html_e('Calendly widget will be embedded here', 'aetherbloom'); ?></p>
                                    <a href="https://calendly.com/aetherbloom" target="_blank" class="calendly-link"><?php esc_html_e('Open Scheduler', 'aetherbloom'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trust & Next Steps Section -->
            <section class="next-steps-section">
                <div class="container">
                    <h2 class="section-title"><?php esc_html_e('What Happens Next?', 'aetherbloom'); ?></h2>
                    
                    <div class="steps-timeline">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('We Respond Fast', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Get a same-day response during UK business hours, or within 24 hours maximum', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Strategy Session', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('15-minute discovery call to understand your needs and recommend the perfect solution', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Custom Proposal', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Receive a detailed proposal with transparent pricing and clear SLAs within 48 hours', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Start Your Pilot', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Begin with our 14-day pilot program and see the results firsthand', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="final-cta">
                        <h3><?php esc_html_e('Ready to Transform Your Business?', 'aetherbloom'); ?></h3>
                        <div class="cta-buttons">
                            <a href="#contact-form" class="cta-primary"><?php esc_html_e('Get Your Free Strategy Session', 'aetherbloom'); ?></a>
                            <a href="#instant-quote" class="cta-secondary"><?php esc_html_e('Calculate Your Savings', 'aetherbloom'); ?></a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
</div>

<script>
// Assessment Tool Functionality
document.addEventListener('DOMContentLoaded', function() {
    const assessmentTool = document.getElementById('assessment-tool');
    const questions = assessmentTool.querySelectorAll('.question-container');
    const result = document.getElementById('assessment-result');
    let currentQuestion = 1;
    let answers = {};

    // Handle option selection
    document.querySelectorAll('.option-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const questionNum = this.closest('.question-container').dataset.question;
            answers[questionNum] = this.dataset.value;
            
            // Move to next question or show result
            if (currentQuestion < 3) {
                questions[currentQuestion - 1].classList.remove('active');
                questions[currentQuestion].classList.add('active');
                currentQuestion++;
            } else {
                // Show recommendation
                showRecommendation(answers);
            }
        });
    });

    function showRecommendation(answers) {
        questions[2].classList.remove('active');
        result.style.display = 'block';
        
        // Generate recommendation based on answers
        let recommendation = generateRecommendation(answers);
        document.getElementById('recommendation-content').innerHTML = recommendation;
    }

    function generateRecommendation(answers) {
        // Simple recommendation logic
        if (answers['1'] === 'customer-support') {
            return '<h4>Digital Customer Success Package</h4><p>Perfect for managing customer interactions with email/chat support, order management, and CRM updates.</p><ul><li>Starting from £360/month</li><li>85% first-contact resolution</li><li>UK compliance guaranteed</li></ul>';
        } else if (answers['1'] === 'sales-growth') {
            return '<h4>Call Centre Solutions</h4><p>Ideal for sales-focused businesses needing inbound/outbound calls and lead generation.</p><ul><li>Starting from £1,600/month</li><li>Dedicated sales teams</li><li>Real-time dashboards</li></ul>';
        } else {
            return '<h4>Virtual Admin Services</h4><p>Great for streamlining back-office operations with HR support, bookkeeping, and data analysis.</p><ul><li>Starting from £8/hour</li><li>Flexible packages</li><li>UK-trained professionals</li></ul>';
        }
    }
});

// Live Chat Simulation
function startLiveChat() {
    alert('Live chat feature will be integrated with your chat system');
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php get_footer(); ?>