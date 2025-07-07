<?php
// File: /wp-content/themes/aetherbloom/footer.php

/**
 * The template for displaying the footer
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            <div class="footer-main">
                <!-- Brand Section -->
                <div class="brand-section">
                    <div class="brand-header">
                        <div class="logo-container">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-symbol">
                                <span class="logo-text"><?php bloginfo('name'); ?></span>
                            </a>
                        </div>
                        <p class="brand-description">
                            UK expertise meets global talent for exceptional results.
                        </p>
                    </div>
                    <div class="contact-email">
                        <a href="mailto:info@aetherbloom.co.za" class="contact-link">
                            info@aetherbloom.co.za
                        </a>
                    </div>
                    <div class="social-links">
                        <?php
                        $social_links = array(
                            array('name' => 'LinkedIn', 'href' => '#', 'platform' => 'linkedin'),
                            array('name' => 'Twitter', 'href' => '#', 'platform' => 'twitter'),
                            array('name' => 'Facebook', 'href' => '#', 'platform' => 'facebook')
                        );
                        
                        foreach ($social_links as $social) :
                            if (!empty($social['href']) && $social['href'] !== '#') :
                        ?>
                            <a href="<?php echo esc_url($social['href']); ?>" class="social-link" aria-label="<?php echo esc_attr($social['name']); ?>" target="_blank" rel="noopener noreferrer">
                                <?php if ($social['platform'] === 'linkedin') : ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                <?php elseif ($social['platform'] === 'twitter') : ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                <?php elseif ($social['platform'] === 'facebook') : ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                <?php endif; ?>
                            </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="link-column">
                    <h3 class="column-title"><?php esc_html_e('Navigation', 'aetherbloom'); ?></h3>
                    <ul class="link-list">
                        <?php
                        $nav_items = array(
                            array('name' => __('About Us', 'aetherbloom'), 'url' => home_url('/about')),
                            array('name' => __('Services', 'aetherbloom'), 'url' => home_url('/services')),
                            array('name' => __('Impact', 'aetherbloom'), 'url' => home_url('/impact')),
                            array('name' => __('Careers', 'aetherbloom'), 'url' => 'https://app.dover.com/jobs/aetherbloom', 'external' => true),
                            array('name' => __('Pricing', 'aetherbloom'), 'url' => home_url('/#pricing'))
                        );
                        
                        foreach ($nav_items as $item) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url($item['url']); ?>" class="footer-link"<?php echo isset($item['external']) && $item['external'] ? ' target="_blank"' : ''; ?>>
                                    <?php echo esc_html($item['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Services Links -->
                <div class="link-column">
                    <h3 class="column-title"><?php esc_html_e('Services', 'aetherbloom'); ?></h3>
                    <ul class="link-list">
                        <?php
                        $service_items = array(
                            array('name' => __('Customer Support', 'aetherbloom'), 'url' => home_url('/services#customer-support')),
                            array('name' => __('Back Office Operations', 'aetherbloom'), 'url' => home_url('/services#back-office')),
                            array('name' => __('Technical Support', 'aetherbloom'), 'url' => home_url('/services#technical-support')),
                            array('name' => __('Data Processing', 'aetherbloom'), 'url' => home_url('/services#data-processing'))
                        );
                        
                        foreach ($service_items as $item) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url($item['url']); ?>" class="footer-link">
                                    <?php echo esc_html($item['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Legal Links -->
                <div class="link-column">
                    <h3 class="column-title"><?php esc_html_e('Legal', 'aetherbloom'); ?></h3>
                    <ul class="link-list">
                        <?php
                        $legal_items = array(
                            array('name' => __('Privacy Policy', 'aetherbloom'), 'url' => get_privacy_policy_url() ? get_privacy_policy_url() : '#'),
                            array('name' => __('Terms of Service', 'aetherbloom'), 'url' => '#'),
                            array('name' => __('Cookie Policy', 'aetherbloom'), 'url' => '#'),
                            array('name' => __('GDPR Compliance', 'aetherbloom'), 'url' => '#')
                        );
                        
                        foreach ($legal_items as $item) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url($item['url']); ?>" class="footer-link">
                                    <?php echo esc_html($item['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="contact-section">
                    <h3 class="column-title"><?php esc_html_e('Contact', 'aetherbloom'); ?></h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="address-group">
                                <strong><?php esc_html_e('UK Office:', 'aetherbloom'); ?></strong>
                                <div class="address-line">London, UK</div>
                                <div class="address-line">+44 XXXX XXX XXX</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="address-group">
                                <strong><?php esc_html_e('SA Hub:', 'aetherbloom'); ?></strong>
                                <div class="address-line">Johannesburg, SA</div>
                                <div class="address-line">+27 XX XXX XXXX</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="bottom-content">
                    <div class="copyright">
                        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'aetherbloom'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>