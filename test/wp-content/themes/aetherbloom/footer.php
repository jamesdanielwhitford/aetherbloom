<?php
/**
 * Footer template
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            <div class="footer-main">
                <!-- Brand Section -->
                <div class="brand-section">
                    <div class="brand-header">
                        <div class="logo-container">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-footer.webp" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="brand-icon">
                                <span class="logo-text"><?php bloginfo('name'); ?></span>
                            </a>
                        </div>
                        <p class="brand-description"><?php esc_html_e('Empowering businesses with exceptional customer support and innovative digital solutions.', 'aetherbloom'); ?></p>
                    </div>
                    
                    <div class="footer-contact-email">
                        <a href="mailto:hello@aetherbloom.co.uk" class="footer-contact-link">hello@aetherbloom.co.uk</a>
                    </div>
                    
                    <div class="footer-social-links">
                        <a href="https://www.facebook.com/people/aetherbloom/61573177293499" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Follow us on Facebook', 'aetherbloom'); ?>">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/aetherbloom.group/" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Follow us on Instagram', 'aetherbloom'); ?>">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/aetherbloom/" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Follow us on LinkedIn', 'aetherbloom'); ?>">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Services Column -->
                <div class="link-column">
                    <h3 class="column-title"><?php esc_html_e('Services', 'aetherbloom'); ?></h3>
                    <ul class="link-list">
                        <?php
                        $services_items = array(
                            array('name' => __('Customer Support', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('services'))),
                            array('name' => __('Digital Solutions', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('services'))),
                            array('name' => __('Business Process', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('services'))),
                            array('name' => __('Analytics', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('services')))
                        );
                        
                        foreach ($services_items as $item) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url($item['url']); ?>" class="footer-link">
                                    <?php echo esc_html($item['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Company Column -->
                <div class="link-column">
                    <h3 class="column-title"><?php esc_html_e('Company', 'aetherbloom'); ?></h3>
                    <ul class="link-list">
                        <?php
                        $company_items = array(
                            array('name' => __('About Us', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('about'))),
                            array('name' => __('Our Impact', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('impact'))),
                            array('name' => __('Careers', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('careers'))),
                            array('name' => __('Contact', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('contact')))
                        );
                        
                        foreach ($company_items as $item) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url($item['url']); ?>" class="footer-link">
                                    <?php echo esc_html($item['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Legal Column -->
                <div class="link-column">
                    <h3 class="column-title"><?php esc_html_e('Legal', 'aetherbloom'); ?></h3>
                    <ul class="link-list">
                        <?php
                        $legal_items = array(
                            array('name' => __('Privacy Policy', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('privacy-policy'))),
                            array('name' => __('Terms of Service', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('privacy-policy'))),
                            array('name' => __('Cookie Policy', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('privacy-policy'))),
                            array('name' => __('GDPR Compliance', 'aetherbloom'), 'url' => get_permalink(get_page_by_path('privacy-policy')))
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
                <div class="footer-contact-section">
                    <h3 class="column-title"><?php esc_html_e('Contact', 'aetherbloom'); ?></h3>
                    <div class="footer-contact-info">
                        <div class="footer-contact-item">
                            <div class="address-group">
                                <strong><?php esc_html_e('UK Office:', 'aetherbloom'); ?></strong>
                                <div class="address-line">London, UK</div>
                                <a href="tel:+442080507881" class="address-line footer-contact-link">+44 208 0507 881</a>
                            </div>
                        </div>
                        <div class="footer-contact-item">
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
                            <button type="button" class="newsletter-button" id="open-newsletter-modal"><?php esc_html_e('Subscribe', 'aetherbloom'); ?></button>
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


<!-- Newsletter Modal -->
<div id="newsletter-modal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <script src="https://js-eu1.hsforms.net/forms/embed/145903429.js" defer></script>
        <div class="hs-form-frame" data-region="eu1" data-form-id="d61f73e9-f82c-444a-a687-51351f7014a9" data-portal-id="145903429"></div>
    </div>
</div>

<?php wp_footer(); ?>


</body>
</html>