<?php
// File: /wp-content/themes/aetherbloom/page-contact.php

/**
 * Template for Contact page - Updated to match homepage structure
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
            <!-- Page Header Section - Moved inside content-wrapper -->
            <section class="page-header">
                <div class="container">
                    <h1 class="page-title"><?php esc_html_e('Contact Us', 'aetherbloom'); ?></h1>
                    <p class="page-subtitle"><?php esc_html_e('Let\'s Build Your Outsourcing Strategy – Zero Commitment, Maximum Clarity', 'aetherbloom'); ?></p>
                </div>
            </section>

            <!-- Contact Overview Section -->
            <section class="contact-overview-section">
                <div class="container">
                    <div class="overview-content">
                        <p>We'd love to hear from you! Whether you're ready to get started or just want to explore how Aetherbloom can support your business, send us a message using the form below and a member of our team will be in touch within 48 hours.</p>
                    </div>
                </div>
            </section>

            <!-- Contact Main Section -->
            <section class="contact-main-section">
                <div class="container">
                    <div class="contact-grid">
                        <!-- Contact Form -->
                        <div class="contact-form-wrapper">
                            <h2><?php esc_html_e('Get Started in Just 2 Minutes', 'aetherbloom'); ?></h2>
                            
                            <form class="contact-form" id="contact-form" method="post" action="">
                                <!-- Your Details Section -->
                                <div class="form-section">
                                    <h3><?php esc_html_e('Your Details', 'aetherbloom'); ?></h3>
                                    
                                    <div class="form-group">
                                        <label for="full_name"><?php esc_html_e('Full Name', 'aetherbloom'); ?> <span class="required">*</span></label>
                                        <input type="text" id="full_name" name="full_name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="company_name"><?php esc_html_e('Company Name', 'aetherbloom'); ?></label>
                                        <input type="text" id="company_name" name="company_name">
                                    </div>
                                    
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

                                <!-- Service Needs Section -->
                                <div class="form-section">
                                    <h3><?php esc_html_e('Service Needs', 'aetherbloom'); ?></h3>
                                    
                                    <div class="form-group">
                                        <label for="primary_service"><?php esc_html_e('Primary Service', 'aetherbloom'); ?> <span class="required">*</span></label>
                                        <select id="primary_service" name="primary_service" required>
                                            <option value=""><?php esc_html_e('Select one', 'aetherbloom'); ?></option>
                                            <option value="digital_customer_success"><?php esc_html_e('Digital Customer Success (Email/chat support, order management, CRM updates)', 'aetherbloom'); ?></option>
                                            <option value="call_centre_solutions"><?php esc_html_e('Call Centre Solutions (Inbound/outbound calls, sales support, appointment booking)', 'aetherbloom'); ?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label><?php esc_html_e('Add-On Services', 'aetherbloom'); ?> <span class="form-note"><?php esc_html_e('(Optional)', 'aetherbloom'); ?></span></label>
                                        <div class="checkbox-group">
                                            <div class="checkbox-item">
                                                <input type="checkbox" id="hr_support" name="addon_services[]" value="hr_support">
                                                <label for="hr_support"><?php esc_html_e('HR Support (Onboarding, employee records)', 'aetherbloom'); ?></label>
                                            </div>
                                            <div class="checkbox-item">
                                                <input type="checkbox" id="virtual_admin" name="addon_services[]" value="virtual_admin">
                                                <label for="virtual_admin"><?php esc_html_e('Virtual Admin (Diary, inbox & task management)', 'aetherbloom'); ?></label>
                                            </div>
                                            <div class="checkbox-item">
                                                <input type="checkbox" id="bookkeeping" name="addon_services[]" value="bookkeeping">
                                                <label for="bookkeeping"><?php esc_html_e('Bookkeeping (Invoicing, expense tracking)', 'aetherbloom'); ?></label>
                                            </div>
                                            <div class="checkbox-item">
                                                <input type="checkbox" id="data_analysis" name="addon_services[]" value="data_analysis">
                                                <label for="data_analysis"><?php esc_html_e('Data Analysis (Custom reports & insights)', 'aetherbloom'); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- How Can We Help Section -->
                                <div class="form-section">
                                    <h3><?php esc_html_e('How Can We Help?', 'aetherbloom'); ?></h3>
                                    
                                    <div class="form-group">
                                        <label for="help_description"><?php esc_html_e('Tell us more', 'aetherbloom'); ?> <span class="form-note"><?php esc_html_e('(Optional but helpful!)', 'aetherbloom'); ?></span></label>
                                        <textarea id="help_description" name="help_description" rows="4" placeholder="<?php esc_attr_e('Describe your current challenges, team size, or specific goals...', 'aetherbloom'); ?>"></textarea>
                                    </div>
                                </div>

                                <!-- Form Actions -->
                                <div class="form-actions">
                                    <button type="submit" class="submit-btn">
                                        <?php esc_html_e('Submit Form', 'aetherbloom'); ?>
                                    </button>
                                    <div class="form-guarantee">
                                        <?php esc_html_e('We\'ll respond within 48 hours', 'aetherbloom'); ?>
                                    </div>
                                    <p class="form-alternative">
                                        <?php esc_html_e('Prefer to talk?', 'aetherbloom'); ?> 
                                        <a href="#scheduler" class="book-call-link"><?php esc_html_e('Book a quick call', 'aetherbloom'); ?></a>
                                    </p>
                                </div>
                            </form>
                        </div>

                        <!-- Contact Info Sidebar -->
                        <div class="contact-info-wrapper">
                            <!-- Live Chat Widget -->
                            <div class="contact-info-card">
                                <h3><?php esc_html_e('Live Chat Widget', 'aetherbloom'); ?></h3>
                                <a href="#chat" class="chat-widget">
                                    <?php esc_html_e('Chat Now with Our UK Team', 'aetherbloom'); ?>
                                </a>
                                <p><?php esc_html_e('(Mon-Fri, 8 AM – 6 PM GMT)', 'aetherbloom'); ?></p>
                            </div>

                            <!-- Contact Details -->
                            <div class="contact-info-card">
                                <h3><?php esc_html_e('Contact Details', 'aetherbloom'); ?></h3>
                                
                                <div class="contact-item">
                                    <h4><?php esc_html_e('UK Office (Grace):', 'aetherbloom'); ?></h4>
                                    <p>London, UK</p>
                                    <a href="tel:+44XXXXXXXXX">+44 XXXX XXX XXX</a>
                                </div>
                                
                                <div class="contact-item">
                                    <h4><?php esc_html_e('SA Hub (Della):', 'aetherbloom'); ?></h4>
                                    <p>Johannesburg, SA</p>
                                    <a href="tel:+27XXXXXXXX">+27 XX XXX XXXX</a>
                                </div>
                            </div>

                            <!-- Free Resource -->
                            <div class="free-resource-card">
                                <h3><?php esc_html_e('Free Resource', 'aetherbloom'); ?></h3>
                                <div class="resource-content">
                                    <div class="resource-text">
                                        <p><?php esc_html_e('"The UK Leader\'s Guide to South African Talent"', 'aetherbloom'); ?></p>
                                        <small><?php esc_html_e('Email capture + instant download', 'aetherbloom'); ?></small>
                                    </div>
                                    <div class="resource-form">
                                        <input type="email" class="resource-input" placeholder="<?php esc_attr_e('Your email', 'aetherbloom'); ?>">
                                        <button type="button" class="resource-btn"><?php esc_html_e('Download', 'aetherbloom'); ?></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Meeting Scheduler -->
                            <div class="scheduler-card" id="scheduler">
                                <h3><?php esc_html_e('Choose a Time That Works for Your Zone', 'aetherbloom'); ?></h3>
                                <div class="scheduler-options">
                                    <a href="#schedule-discovery" class="scheduler-btn">
                                        <?php esc_html_e('Schedule a 15-Min Discovery Call →', 'aetherbloom'); ?>
                                    </a>
                                    <p class="scheduler-note">
                                        <?php esc_html_e('Get a Same-Day Response – Guaranteed.', 'aetherbloom'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Next Steps Section -->
            <section class="next-steps-section">
                <div class="container">
                    <h2><?php esc_html_e('Next Steps', 'aetherbloom'); ?></h2>
                    <div class="steps-timeline">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Submit Form', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('We\'ll respond within 48 hours', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Discovery Call', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('15-minute consultation to understand your needs', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Custom Proposal', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Tailored solution with transparent pricing', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                        <div class="step-item">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3><?php esc_html_e('Quick Start', 'aetherbloom'); ?></h3>
                                <p><?php esc_html_e('Team operational within 48-72 hours', 'aetherbloom'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_footer(); ?>
        </div>
    </main>
</div>