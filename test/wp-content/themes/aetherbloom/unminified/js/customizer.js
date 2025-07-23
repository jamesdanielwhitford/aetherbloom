// File: /wp-content/themes/aetherbloom/js/customizer.js

/**
 * Aetherbloom Theme Customizer JS
 * Handles live preview updates in the WordPress customizer
 *
 * @package Aetherbloom
 * @version 1.0.0
 */

(function($) {
    'use strict';

    // Site title and description
    wp.customize('blogname', function(value) {
        value.bind(function(to) {
            $('.site-title a').text(to);
            $('.brand-name').text(to);
        });
    });

    wp.customize('blogdescription', function(value) {
        value.bind(function(to) {
            $('.site-description').text(to);
        });
    });

    // Header text color
    wp.customize('header_textcolor', function(value) {
        value.bind(function(to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title a, .site-description').css({
                    'color': to
                });
            }
        });
    });

    // Primary color
    wp.customize('aetherbloom_primary_color', function(value) {
        value.bind(function(to) {
            // Update CSS custom property
            $('body').get(0).style.setProperty('--primary-color', to);
            
            // Update specific elements
            $('.get-started-btn, .cta-primary, .submit-btn').css('background-color', to);
            $('.nav-link:hover, .contact-link, .book-call-link').css('color', to);
        });
    });

    // Secondary color
    wp.customize('aetherbloom_secondary_color', function(value) {
        value.bind(function(to) {
            // Update CSS custom property
            $('body').get(0).style.setProperty('--secondary-color', to);
            
            // Update specific elements
            $('.pricing-btn, .scheduler-btn').css('background-color', to);
            $('.form-guarantee, .contact-hours').css('color', to);
        });
    });

    // Contact information updates
    wp.customize('aetherbloom_uk_phone', function(value) {
        value.bind(function(to) {
            $('.uk-phone').text(to);
            $('.uk-phone-link').attr('href', 'tel:' + to.replace(/\s/g, ''));
        });
    });

    wp.customize('aetherbloom_sa_phone', function(value) {
        value.bind(function(to) {
            $('.sa-phone').text(to);
            $('.sa-phone-link').attr('href', 'tel:' + to.replace(/\s/g, ''));
        });
    });

    wp.customize('aetherbloom_email', function(value) {
        value.bind(function(to) {
            $('.contact-email').text(to);
            $('.contact-email-link').attr('href', 'mailto:' + to);
        });
    });

})(jQuery);