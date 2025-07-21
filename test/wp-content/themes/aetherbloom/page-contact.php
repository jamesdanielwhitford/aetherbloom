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
                                                 <path d="M5 4H9L11 9L8 11C9.5 14.5 12.5 17.5 16 19L18 16L23 18V22C23 22.5523 22.5523 23 22 23H18C9.71573 23 3 16.2843 3 8V4C3 3.44772 3.44772 3 4 3H8C8.55228 3 9 3.44772 9 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>
                                         </div>
                                         <span><?php esc_html_e('Call Us', 'aetherbloom'); ?></span>
                                     </button>
                                    
                                    <button class="contact-btn book-btn" onclick="openBookingForm()">
                                        <div class="btn-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                                <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                                <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                                <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                        </div>
                                        <span><?php esc_html_e('Book a Meeting', 'aetherbloom'); ?></span>
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
                                <a href="#assessment-form-container" id="quick-start-cta" class="path-cta"><?php esc_html_e('Start Now', 'aetherbloom'); ?></a>
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
                                <button type="button" class="hubspot-form-btn" id="reveal-assessment-form">
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

            <div id="assessment-form-container" style="display: none;">
                <?php get_template_part('template-parts/cta'); ?>
            </div>

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
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="brand-icon" style="width: 58px; height: 48px;">
                            </div>
                            <h3><?php esc_html_e('Follow Aetherbloom', 'aetherbloom'); ?></h3>
                            <p><?php esc_html_e('Connect with us on social media', 'aetherbloom'); ?></p>
                            <div class="social-links">
                                <a href="https://www.linkedin.com/company/aetherbloom" class="social-link" target="_blank" rel="noopener noreferrer">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                                <a href="https://web.facebook.com/people/Aetherbloom/61573177293499/" class="social-link" target="_blank" rel="noopener noreferrer">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/aetherbloom.group/" class="social-link" target="_blank" rel="noopener noreferrer">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/>
                                    </svg>
                                </a>
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
        window.open('https://meetings-eu1.hubspot.com/aetherbloom', '_blank');
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

    // Reveal assessment form
    const revealButton = document.getElementById('reveal-assessment-form');
    const assessmentFormContainer = document.getElementById('assessment-form-container');
    const quickStartCta = document.getElementById('quick-start-cta');

    if (revealButton && assessmentFormContainer) {
        revealButton.addEventListener('click', function() {
            assessmentFormContainer.style.display = 'block';
            assessmentFormContainer.scrollIntoView({ behavior: 'smooth' });
        });
    }

    if (quickStartCta && assessmentFormContainer) {
        quickStartCta.addEventListener('click', function(e) {
            e.preventDefault();
            assessmentFormContainer.style.display = 'block';
            assessmentFormContainer.scrollIntoView({ behavior: 'smooth' });
        });
    }
});
</script>
