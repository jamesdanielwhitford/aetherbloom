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
    <!-- Mobile WebM background -->
    <video autoplay loop muted playsinline class="mobile-webp-background">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/animated-petals-mobile.webm" type="video/webm">
    </video>
    
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
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                               <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
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
                                <a href="#assessment-form-container" class="path-cta reveal-assessment-trigger"><?php esc_html_e('Start Now', 'aetherbloom'); ?></a>
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
                                    <svg width="48" height="48" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                                  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                                </svg>
                                </div>
                                <h3><?php esc_html_e('Tailored Integration', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Comprehensive needs analysis and custom team building', 'aetherbloom'); ?></p>
                                <ul class="path-features">
                                    <li><?php esc_html_e('In-depth consultation', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Custom recruitment process', 'aetherbloom'); ?></li>
                                    <li><?php esc_html_e('Ongoing support', 'aetherbloom'); ?></li>
                                </ul>
                                <a href="#assessment-form-container" class="path-cta reveal-assessment-trigger"><?php esc_html_e('Let\'s Plan', 'aetherbloom'); ?></a>
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
                                <a href="#assessment-form-container" class="path-cta reveal-assessment-trigger"><?php esc_html_e('Discuss Partnership', 'aetherbloom'); ?></a>
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
                                    <a href="<?php echo esc_url(get_template_directory_uri() . '/assets/documents/The UK Leader\'s Guide to South African Talent.pdf'); ?>" class="resource-btn" download>
                                        <?php esc_html_e('Download Now', 'aetherbloom'); ?>
                                    </a>
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
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.webp'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="brand-icon" loading="lazy" width="58" height="48">
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
    const pathCtas = document.querySelectorAll('.reveal-assessment-trigger');

    if (revealButton && assessmentFormContainer) {
        revealButton.addEventListener('click', function() {
            assessmentFormContainer.style.display = 'block';
            assessmentFormContainer.scrollIntoView({ behavior: 'smooth' });
        });
    }

    if (pathCtas && assessmentFormContainer) {
        pathCtas.forEach(cta => {
            cta.addEventListener('click', function(e) {
                e.preventDefault();
                assessmentFormContainer.style.display = 'block';
                assessmentFormContainer.scrollIntoView({ behavior: 'smooth' });
            });
        });
    }
});
</script>
