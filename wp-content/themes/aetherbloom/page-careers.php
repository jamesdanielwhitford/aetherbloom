<?php
// File: /wp-content/themes/aetherbloom/page-careers.php

/**
 * Template for Careers page
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
    
    <main class="site-main careers-page" id="main">
        <div class="page-header">
            <div class="container">
                <h1 class="page-title"><?php esc_html_e('Careers', 'aetherbloom'); ?></h1>
                <p class="page-subtitle"><?php esc_html_e('Join Aetherbloom: Where Talent Meets Global Opportunity', 'aetherbloom'); ?></p>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Careers Overview Section -->
            <section class="careers-overview-section">
                <div class="container">
                    <div class="overview-content">
                        <h2><?php esc_html_e('Build Your Future with Aetherbloom', 'aetherbloom'); ?></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Join our mission to empower talent while serving global clients.</p>
                    </div>
                </div>
            </section>

            <!-- Why Work With Us Section -->
            <section class="why-work-section">
                <div class="container">
                    <h2><?php esc_html_e('Why Work With Us?', 'aetherbloom'); ?></h2>
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-training.svg'); ?>" alt="Training">
                            </div>
                            <h3><?php esc_html_e('UK Compliance Training & Career Certifications', 'aetherbloom'); ?></h3>
                            <p>Gain internationally recognized certifications that enhance your career prospects and professional development.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-salary.svg'); ?>" alt="Competitive Salary">
                            </div>
                            <h3><?php esc_html_e('Competitive Salaries + Performance Bonuses', 'aetherbloom'); ?></h3>
                            <p>Fair compensation with performance-based rewards that recognize your contributions and achievements.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-culture.svg'); ?>" alt="Culture">
                            </div>
                            <h3><?php esc_html_e('Inclusive, Growth-Focused Culture', 'aetherbloom'); ?></h3>
                            <p>A supportive environment that celebrates diversity and encourages continuous learning and professional growth.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-global.svg'); ?>" alt="Global Opportunity">
                            </div>
                            <h3><?php esc_html_e('Global Client Exposure', 'aetherbloom'); ?></h3>
                            <p>Work with UK businesses and gain valuable international experience while building your professional network.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-flexible.svg'); ?>" alt="Flexible Work">
                            </div>
                            <h3><?php esc_html_e('Flexible Working Arrangements', 'aetherbloom'); ?></h3>
                            <p>Modern work-life balance with flexible schedules and remote work options to suit your lifestyle.</p>
                        </div>
                        
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-support.svg'); ?>" alt="Support">
                            </div>
                            <h3><?php esc_html_e('Comprehensive Support System', 'aetherbloom'); ?></h3>
                            <p>Dedicated mentorship, ongoing training, and a supportive team environment to help you succeed.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Roles We Hire For Section -->
            <section class="roles-section">
                <div class="container">
                    <h2><?php esc_html_e('Roles We Hire For', 'aetherbloom'); ?></h2>
                    <div class="roles-grid">
                        <div class="role-card">
                            <h3><?php esc_html_e('Customer Support Specialists', 'aetherbloom'); ?></h3>
                            <p class="role-type"><?php esc_html_e('UK Shift Patterns', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Handle customer inquiries across multiple channels while maintaining high service standards.</p>
                            <ul class="role-requirements">
                                <li>Excellent English communication skills</li>
                                <li>Customer service experience preferred</li>
                                <li>Availability for UK business hours</li>
                                <li>Problem-solving mindset</li>
                            </ul>
                        </div>
                        
                        <div class="role-card">
                            <h3><?php esc_html_e('Helpdesk Agents', 'aetherbloom'); ?></h3>
                            <p class="role-type"><?php esc_html_e('Technical Support', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Provide first-line technical support and troubleshooting for various software and systems.</p>
                            <ul class="role-requirements">
                                <li>Basic technical knowledge</li>
                                <li>Strong analytical skills</li>
                                <li>Patience and empathy</li>
                                <li>Willingness to learn new technologies</li>
                            </ul>
                        </div>
                        
                        <div class="role-card">
                            <h3><?php esc_html_e('Data Entry & Back-Office Associates', 'aetherbloom'); ?></h3>
                            <p class="role-type"><?php esc_html_e('Administrative Support', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Handle data processing, administrative tasks, and back-office operations with accuracy and efficiency.</p>
                            <ul class="role-requirements">
                                <li>Strong attention to detail</li>
                                <li>Proficiency in Microsoft Office</li>
                                <li>Data accuracy skills</li>
                                <li>Time management abilities</li>
                            </ul>
                        </div>
                        
                        <div class="role-card">
                            <h3><?php esc_html_e('Virtual Assistants', 'aetherbloom'); ?></h3>
                            <p class="role-type"><?php esc_html_e('Administrative Support', 'aetherbloom'); ?></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Support executives and business owners with various administrative and organizational tasks.</p>
                            <ul class="role-requirements">
                                <li>Excellent organizational skills</li>
                                <li>Multi-tasking abilities</li>
                                <li>Professional communication</li>
                                <li>Discretion and confidentiality</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Employee Testimonial Section -->
            <section class="testimonial-section">
                <div class="container">
                    <h2><?php esc_html_e('What Our Team Says', 'aetherbloom'); ?></h2>
                    <div class="testimonial-content">
                        <div class="testimonial-card">
                            <div class="testimonial-image">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/employee-testimonial.jpg'); ?>" alt="Employee">
                            </div>
                            <div class="testimonial-text">
                                <blockquote>
                                    <p>"Aetherbloom invested in my GDPR certification – now I support UK clients with confidence. The training opportunities here are exceptional, and I feel valued as part of a team that's making a real difference."</p>
                                </blockquote>
                                <cite>
                                    <strong>Sarah Mthembu</strong>
                                    <span>Customer Support Specialist</span>
                                </cite>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Growth & Development Section -->
            <section class="growth-section">
                <div class="container">
                    <h2><?php esc_html_e('Your Growth Journey', 'aetherbloom'); ?></h2>
                    <div class="growth-timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker">1</div>
                            <div class="timeline-content">
                                <h3><?php esc_html_e('Onboarding & Training', 'aetherbloom'); ?></h3>
                                <p>Comprehensive onboarding program with UK compliance training and certification opportunities.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker">2</div>
                            <div class="timeline-content">
                                <h3><?php esc_html_e('Skill Development', 'aetherbloom'); ?></h3>
                                <p>Ongoing training programs, mentorship, and professional development opportunities.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker">3</div>
                            <div class="timeline-content">
                                <h3><?php esc_html_e('Career Advancement', 'aetherbloom'); ?></h3>
                                <p>Clear career progression paths with leadership opportunities and cross-functional experience.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker">4</div>
                            <div class="timeline-content">
                                <h3><?php esc_html_e('Impact & Recognition', 'aetherbloom'); ?></h3>
                                <p>Make meaningful contributions to global business success while being recognized for your achievements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="careers-cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><?php esc_html_e('Ready to Start Your Journey?', 'aetherbloom'); ?></h2>
                        <p><?php esc_html_e('Explore open roles and join our mission to empower talent globally', 'aetherbloom'); ?></p>
                        <a href="#" class="cta-primary"><?php esc_html_e('Explore Open Roles', 'aetherbloom'); ?></a>
                        <p class="cta-note"><?php esc_html_e('Applications will redirect to our Dover careers portal', 'aetherbloom'); ?></p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<?php get_footer(); ?>