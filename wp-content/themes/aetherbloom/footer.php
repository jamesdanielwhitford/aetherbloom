<?php
// File: /wp-content/themes/aetherbloom/footer.php

/**
 * The template for displaying the footer
 *
 * @package Aetherbloom
 * @version 1.0.0
 */
?>

<footer id="colophon" class="site-footer">
    <div class="footer-container">
        
        <!-- Main Footer Content -->
        <div class="footer-main">
            
            <!-- Brand Section -->
            <div class="brand-section">
                <div class="brand-header">
                    <div class="logo-container">
                        <div class="logo">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            
                            if (has_custom_logo()) : ?>
                                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-symbol">
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-symbol">
                            <?php endif; ?>
                            <span class="logo-text"><?php bloginfo('name'); ?></span>
                        </div>
                    </div>
                    <p class="brand-description">
                        <?php 
                        $footer_description = get_theme_mod('footer_description', 'Transforming businesses through expertly managed BPO solutions. UK expertise meets global talent for exceptional results.');
                        echo esc_html($footer_description);
                        ?>
                    </p>
                </div>
                <div class="contact-email">
                    <?php 
                    $contact_email = get_theme_mod('contact_email', 'info@aetherbloom.co.za');
                    ?>
                    <a href="mailto:<?php echo esc_attr($contact_email); ?>" class="contact-link">
                        <?php echo esc_html($contact_email); ?>
                    </a>
                </div>
                <div class="social-links">
                    <?php
                    $social_links = array(
                        'linkedin' => get_theme_mod('social_linkedin', '#'),
                        'facebook' => get_theme_mod('social_facebook', '#'),
                    );
                    
                    foreach ($social_links as $platform => $url) :
                        if ($url && $url !== '#') :
                    ?>
                        <a href="<?php echo esc_url($url); ?>" class="social-link" aria-label="<?php echo esc_attr(ucfirst($platform)); ?>" target="_blank" rel="noopener noreferrer">
                            <?php if ($platform === 'linkedin') : ?>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            <?php elseif ($platform === 'facebook') : ?>
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
                        array('name' => __('About Us', 'aetherbloom'), 'url' => '#why-aetherbloom'),
                        array('name' => __('Services', 'aetherbloom'), 'url' => '#services'),
                        array('name' => __('Impact', 'aetherbloom'), 'url' => '#impact'),
                        array('name' => __('Pricing', 'aetherbloom'), 'url' => '#pricing')
                    );
                    
                    foreach ($nav_items as $item) :
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item['url']); ?>" class="footer-link">
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
                        array('name' => __('Customer Support', 'aetherbloom'), 'url' => '#services'),
                        array('name' => __('Back Office Operations', 'aetherbloom'), 'url' => '#services'),
                        array('name' => __('Technical Support', 'aetherbloom'), 'url' => '#services'),
                        array('name' => __('Data Processing', 'aetherbloom'), 'url' => '#services')
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
                        array('name' => __('Privacy Policy', 'aetherbloom'), 'url' => get_privacy_policy_url() ?: '#'),
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

            <!-- Contact Section -->
            <div class="contact-section">
                <h3 class="column-title"><?php esc_html_e('Contact', 'aetherbloom'); ?></h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <?php 
                        $contact_phone = get_theme_mod('contact_phone', '+44 20 7123 4567');
                        ?>
                        <a href="tel:<?php echo esc_attr(str_replace(' ', '', $contact_phone)); ?>" class="contact-link">
                            <?php echo esc_html($contact_phone); ?>
                        </a>
                    </div>
                    <div class="contact-item">
                        <div class="address-group">
                            <?php 
                            $address_uk = get_theme_mod('address_uk', 'London, United Kingdom');
                            $address_za = get_theme_mod('address_za', 'Johannesburg, South Africa');
                            ?>
                            <span class="address-line"><?php echo esc_html($address_uk); ?></span>
                            <span class="address-line"><?php echo esc_html($address_za); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Signup -->
            <div class="newsletter-section">
                <div class="newsletter">
                    <h4 class="newsletter-title"><?php esc_html_e('Stay Updated', 'aetherbloom'); ?></h4>
                    <p class="newsletter-description">
                        <?php esc_html_e('Get insights on BPO trends and cost optimization strategies.', 'aetherbloom'); ?>
                    </p>
                    <form class="newsletter-form" action="#" method="post" id="newsletter-form">
                        <?php wp_nonce_field('aetherbloom_newsletter', 'newsletter_nonce'); ?>
                        <input
                            type="email"
                            name="newsletter_email"
                            placeholder="<?php esc_attr_e('Enter your email', 'aetherbloom'); ?>"
                            class="newsletter-input"
                            required
                        />
                        <button type="submit" class="newsletter-button">
                            <?php esc_html_e('Subscribe', 'aetherbloom'); ?>
                        </button>
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