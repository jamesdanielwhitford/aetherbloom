<?php
/**
 * Template for Privacy Policy page - Updated styling to match current website design
 *
 * @package Aetherbloom
 * @version 2.0.0
 */

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/privacy-policy.css">



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
    
    <main class="site-main privacy-policy-page" id="main">
        <div class="content-wrapper">
            <!-- Privacy Policy Hero Section -->
            <section class="privacy-hero">
                <div class="privacy-hero-content">
                    <h1 class="privacy-title">Privacy Policy</h1>
                    <p class="privacy-subtitle">Your privacy matters to us</p>
                    <p class="last-updated">Effective Date: 9th May 2025</p>
                </div>
            </section>

            <!-- Privacy Policy Content -->
            <section class="privacy-content-section">
                <div class="privacy-container">
                    <div class="privacy-content-wrapper">
                        <div class="privacy-intro">
                            <p>At Aetherbloom, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and store your personal data when you sign up for our mailing list.</p>
                        </div>
                        
                        <div class="privacy-section" id="information-collected">
                            <h2>1. What Information We Collect</h2>
                            <p>When you subscribe to our mailing list, we collect:</p>
                            <ul>
                                <li>Your email address</li>
                            </ul>
                        </div>
                        
                        <div class="privacy-section" id="information-use">
                            <h2>2. How We Use Your Information</h2>
                            <p>We use your data to:</p>
                            <ul>
                                <li>Send you company updates, newsletters and promotional content</li>
                                <li>Share invitations to events, surveys, and opportunities to engage with Aetherbloom</li>
                                <li>Improve our communication and services based on engagement metrics</li>
                            </ul>
                            <p>We do not sell or rent your data to third parties.</p>
                        </div>
                        
                        <div class="privacy-section" id="your-rights">
                            <h2>3. Your Rights</h2>
                            <p>Under data protection laws (including UK GDPR and South Africa's POPIA (Protection of Personal Information Act), you have the right to:</p>
                            <ul>
                                <li>Access the information we hold about you</li>
                                <li>Request correction or deletion of your data</li>
                                <li>Withdraw your consent at any time by clicking "Unsubscribe" in any of our emails</li>
                            </ul>
                        </div>
                        
                        <div class="privacy-section" id="data-storage">
                            <h2>4. How We Store Your Data</h2>
                            <p>Your data is stored securely in accordance with GDPR compliance standards. We use reputable third-party platforms (e.g. HubSpot) that safeguard your information.</p>
                        </div>
                        
                        <div class="privacy-section" id="cookies-tracking">
                            <h2>5. Cookies & Tracking</h2>
                            <p>We may use cookies or email tracking to improve our content and user experience. You can manage cookie preferences via your browser settings.</p>
                        </div>
                        
                        <div class="privacy-section" id="contact-us">
                            <h2>6. Contact Us</h2>
                            <p>If you have questions about this policy or your data, please contact us at:</p>
                            <div class="contact-info">
                                <p><strong>Email:</strong> <a href="mailto:info@aetherbloom.co.uk">info@aetherbloom.co.uk</a></p>
                                <p><strong>Address:</strong> 28 City Road, London, EC1V 2NX, United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_footer(); ?>
        </div>
    </main>
</div>

