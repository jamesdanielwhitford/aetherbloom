<?php
// File: /wp-content/themes/aetherbloom/header.php

/**
 * The header for our theme - Updated for separate pages with careers link
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
<script>
// Immediately add loaded class when DOM is ready - moved here to run before navbar renders
document.addEventListener('DOMContentLoaded', function() {
  document.documentElement.classList.add('loaded');
});
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="cookie-consent-banner" class="cookie-consent-banner" role="dialog" aria-labelledby="cookie-consent-title" aria-describedby="cookie-consent-description" aria-hidden="true">
    <div class="cookie-consent-content">
        <p id="cookie-consent-description" class="cookie-consent-text">
            <?php esc_html_e('We use cookies to improve your experience and for marketing purposes. For more details, please see our', 'aetherbloom'); ?>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacy-policy'))); ?>"><?php esc_html_e('privacy policy', 'aetherbloom'); ?></a>.
        </p>
        <div class="cookie-consent-buttons">
            <button id="cookie-consent-decline" class="cookie-consent-button decline"><?php esc_html_e('Decline', 'aetherbloom'); ?></button>
            <button id="cookie-consent-accept" class="cookie-consent-button accept"><?php esc_html_e('Accept', 'aetherbloom'); ?></button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const banner = document.getElementById('cookie-consent-banner');
    const acceptBtn = document.getElementById('cookie-consent-accept');
    const declineBtn = document.getElementById('cookie-consent-decline');
    const consentKey = 'aetherbloom_cookie_consent';
    const cookieVersion = '1.0';

    function showBanner() {
        banner.setAttribute('aria-hidden', 'false');
        banner.classList.add('show');
        acceptBtn.focus();
    }

    function hideBanner() {
        banner.classList.remove('show');
        banner.setAttribute('aria-hidden', 'true');
    }

    function loadHubSpot() {
        var hs = document.createElement('script');
        hs.type = 'text/javascript';
        hs.id = 'hs-script-loader';
        hs.async = true;
        hs.defer = true;
        hs.src = '//js-eu1.hs-scripts.com/145903429.js';
        document.head.appendChild(hs);
    }

    function checkConsent() {
        const consent = localStorage.getItem(consentKey);
        if (!consent) {
            showBanner();
            return;
        }

        try {
            const { version, status, timestamp } = JSON.parse(consent);
            if (version !== cookieVersion) {
                localStorage.removeItem(consentKey);
                showBanner();
                return;
            }

            if (status === 'accepted') {
                loadHubSpot();
            }
        } catch (e) {
            localStorage.removeItem(consentKey);
            showBanner();
        }
    }

    acceptBtn.addEventListener('click', () => {
        const consent = {
            version: cookieVersion,
            status: 'accepted',
            timestamp: new Date().toISOString()
        };
        localStorage.setItem(consentKey, JSON.stringify(consent));
        hideBanner();
        loadHubSpot();
    });

    declineBtn.addEventListener('click', () => {
        const consent = {
            version: cookieVersion,
            status: 'declined',
            timestamp: new Date().toISOString()
        };
        localStorage.setItem(consentKey, JSON.stringify(consent));
        hideBanner();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && banner.classList.contains('show')) {
            hideBanner();
        }
    });

    checkConsent();
});
</script>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'aetherbloom'); ?></a>
    
    <header id="masthead" class="site-header">
        <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e('Primary navigation', 'aetherbloom'); ?>">
            <div class="nav-container">
                <div class="nav-top-bar">
                    <!-- Brand/Logo -->
                    <div class="brand">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" rel="home">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo-symbol">
                                <span class="brand-name"><?php bloginfo('name'); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e('Toggle navigation', 'aetherbloom'); ?>">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <!-- Navigation Links and Actions (wrapped for mobile) -->
                <div class="nav-menu-content">
                    <div class="nav-links">
                        <?php
                        // Check if menu exists, otherwise show fallback
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'container'      => false,
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'link_before'    => '',
                                'link_after'     => '',
                            ));
                        } else {
                            ?>
                            <a href="<?php echo esc_url(home_url('/about')); ?>" class="nav-link">About</a>
                            <a href="<?php echo esc_url(home_url('/services')); ?>" class="nav-link">Services</a>
                            <a href="<?php echo esc_url(home_url('/impact')); ?>" class="nav-link">Impact</a>
                            <a href="<?php echo esc_url(home_url('/careers')); ?>" class="nav-link">Careers</a>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-link">Contact</a>
                            <?php
                        }
                        ?>
                    </div>

                    <!-- Action Buttons -->
                    <div class="nav-actions">
                        <a href="<?php echo esc_url(home_url('/#pricing')); ?>" class="pricing-btn">
                            <?php esc_html_e('Pricing', 'aetherbloom'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="get-started-btn">
                            <?php esc_html_e('Get Started', 'aetherbloom'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- #masthead -->