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
                        <a href="mailto:hello@aetherbloom.co.uk" class="contact-link">
                            hello@aetherbloom.co.uk
                        </a>
                    </div>
                    <div class="footer-social-links">
                        <?php
                        $social_links = array(
                            array('name' => 'LinkedIn', 'href' => 'https://www.linkedin.com/company/aetherbloom', 'platform' => 'linkedin'),
                            array('name' => 'Facebook', 'href' => 'https://web.facebook.com/people/Aetherbloom/61573177293499/', 'platform' => 'facebook'),
                            array('name' => 'Instagram', 'href' => 'https://www.instagram.com/aetherbloom.group/', 'platform' => 'instagram')
                        );
                        
                        foreach ($social_links as $social) :
                            if (!empty($social['href']) && $social['href'] !== '#') :
                        ?>
                            <a href="<?php echo esc_url($social['href']); ?>" class="footer-social-link" aria-label="<?php echo esc_attr($social['name']); ?>" target="_blank" rel="noopener noreferrer">
                                <?php if ($social['platform'] === 'linkedin') : ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                <?php elseif ($social['platform'] === 'facebook') : ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                <?php elseif ($social['platform'] === 'instagram') : ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/>
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
                                <div class="address-line">+44 208 0507 881</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="address-group">
                                <strong><?php esc_html_e('SA Hub:', 'aetherbloom'); ?></strong>
                                <div class="address-line">Johannesburg, SA</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Section -->
                <div class="newsletter-section">
                    <div class="newsletter">
                        <h3 class="newsletter-title"><?php esc_html_e('Stay Updated', 'aetherbloom'); ?></h3>
                        <p class="newsletter-description"><?php esc_html_e('Join our newsletter to get the latest updates.', 'aetherbloom'); ?></p>
                        <form class="newsletter-form" action="#" method="post">
                            <input type="email" name="email" class="newsletter-input" placeholder="Your email address" required>
                            <button type="submit" class="newsletter-button"><?php esc_html_e('Subscribe', 'aetherbloom'); ?></button>
                        </form>
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