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
                                    <button class="contact-btn email-btn" onclick="window.location.href='mailto:hello@aetherbloom.co.uk'">
                                        <div class="btn-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </div>
                                        <span><?php esc_html_e('Email Us', 'aetherbloom'); ?></span>
                                    </button>
                                    
                                    <button class="contact-btn phone-btn" onclick="window.location.href='tel:+442080507881'">
                                        <div class="btn-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 16.92V19.92C22 20.51 21.76 21.06 21.35 21.42C20.94 21.78 20.4 21.92 19.86 21.86C16.43 21.53 13.13 20.39 10.32 18.55C7.75 16.89 5.64 14.78 3.98 12.21C2.14 9.39 1 6.08 0.67 2.64C0.61 2.1 0.75 1.56 1.11 1.15C1.47 0.74 2.02 0.5 2.61 0.5H5.61C6.48 0.49 7.22 1.16 7.31 2.02C7.49 3.75 7.89 5.44 8.5 7.07C8.74 7.65 8.63 8.32 8.2 8.79L6.85 10.14C8.44 12.87 10.83 15.26 13.56 16.85L14.91 15.5C15.38 15.07 16.05 14.96 16.63 15.2C18.26 15.81 19.95 16.21 21.68 16.39C22.55 16.48 23.22 17.23 23.21 18.1L22 16.92Z" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </div>
                                        <span><?php esc_html_e('Call Us', 'aetherbloom'); ?></span>
                                    </button>
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
                            <h2><?php esc_html_e('Get Started', 'aetherbloom'); ?><br><?php esc_html_e('in 2 Minutes:', 'aetherbloom'); ?></h2>
                            <p><?php esc_html_e('Enter your email and we\'ll send you our assessment form', 'aetherbloom'); ?></p>
                            
                            <div class="email-capture-form">
                                <button type="button" class="hubspot-form-btn" onclick="openHubSpotForm()">
                                    <?php esc_html_e('Get My Assessment', 'aetherbloom'); ?>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-right">
                            <div class="resource-download">
                                <h3><?php esc_html_e('Download Our', 'aetherbloom'); ?><br><?php esc_html_e('Free Resource:', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('The UK Leader\'s Guide to South African Talent', 'aetherbloom'); ?></p>
                                
                                <div class="resource-form">
                                    <div class="resource-input-group">
                                        <button type="button" class="resource-btn" onclick="downloadResource()">
                                            <?php esc_html_e('Download Now', 'aetherbloom'); ?>
                                        </button>
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
                            <a href="mailto:hello@aetherbloom.co.uk" class="method-link">hello@aetherbloom.co.uk</a>
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
                            <h3><?php esc_html_e('Book a Call', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Schedule a free consultation', 'aetherbloom'); ?></p>
                            <a href="#" class="method-link" onclick="openBookingForm()">Book Meeting</a>
                        </div>
                        
                        <div class="method-card">
                            <div class="method-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16.92V19.92C22 20.51 21.76 21.06 21.35 21.42C20.94 21.78 20.4 21.92 19.86 21.86C16.43 21.53 13.13 20.39 10.32 18.55C7.75 16.89 5.64 14.78 3.98 12.21C2.14 9.39 1 6.08 0.67 2.64C0.61 2.1 0.75 1.56 1.11 1.15C1.47 0.74 2.02 0.5 2.61 0.5H5.61C6.48 0.49 7.22 1.16 7.31 2.02C7.49 3.75 7.89 5.44 8.5 7.07C8.74 7.65 8.63 8.32 8.2 8.79L6.85 10.14C8.44 12.87 10.83 15.26 13.56 16.85L14.91 15.5C15.38 15.07 16.05 14.96 16.63 15.2C18.26 15.81 19.95 16.21 21.68 16.39C22.55 16.48 23.22 17.23 23.21 18.1L22 16.92Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e('Call Direct', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Speak to our team directly', 'aetherbloom'); ?></p>
                            <a href="tel:+442080507881" class="method-link">+44 208 0507 881</a>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_footer(); ?>
        </div>
    </main>
</div>

<script>
// Contact page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Email capture form handling
    const emailCaptureForm = document.querySelector('.email-capture-form');
    const resourceForm = document.querySelector('.resource-form');
    
    // HubSpot form opener
    window.openHubSpotForm = function() {
        const email = document.getElementById('email_capture').value;
        if (!email || !isValidEmail(email)) {
            alert('Please enter a valid email address');
            return;
        }
        
        // Here you would integrate with HubSpot
        console.log('Opening HubSpot form for:', email);
        alert('Assessment form will be sent to: ' + email);
    };
    
    // Resource download handler
    window.downloadResource = function() {
        const email = document.getElementById('resource-email').value;
        if (!email || !isValidEmail(email)) {
            alert('Please enter a valid email address');
            return;
        }
        
        // Here you would integrate with your download system
        console.log('Downloading resource for:', email);
        alert('Download link will be sent to: ' + email);
    };
    
    // Booking form opener
    window.openBookingForm = function() {
        // Here you would integrate with your booking system (Calendly, etc.)
        console.log('Opening booking form');
        alert('Booking system would open here');
    };
    
    // Email validation helper
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Smooth scrolling for anchor links
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
    const cards = document.querySelectorAll('.contact-path, .method-card, .form-left, .resource-download');
    
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
