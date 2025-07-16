// File: /wp-content/themes/aetherbloom/js/about.js

/**
 * About Page JavaScript - Interactive functionality for mission, vision, values section
 * 
 * @package Aetherbloom
 * @version 2.1.0
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Foundation cards functionality (Mission, Vision, Values)
    const foundationCards = document.querySelectorAll('.foundation-card');
    const contentPanels = document.querySelectorAll('.content-panel');
    
    foundationCards.forEach(card => {
        card.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            
            // Remove active class from all cards
            foundationCards.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked card
            this.classList.add('active');
            
            // Hide all content panels
            contentPanels.forEach(panel => {
                panel.classList.remove('active');
            });
            
            // Show target content panel
            const targetPanel = document.getElementById(target);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });
    
    // Values section hover functionality
    const valueItems = document.querySelectorAll('.value-item');
    let lastOpenValueItem = null; // To keep track of the last opened item

    valueItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Close the previously open item, if any
            if (lastOpenValueItem && lastOpenValueItem !== this) {
                lastOpenValueItem.classList.remove('open');
            }
            // Open the current item
            this.classList.add('open');
            lastOpenValueItem = this; // Update the last opened item
        });
    });

    // Smooth scrolling for internal links
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.founder-profile, .ally-card, .foundation-card');
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
    
    // Handle window resize for responsive behavior
    window.addEventListener('resize', function() {
        // Reset hover effects on mobile
        if (window.innerWidth <= 768) {
            foundationCards.forEach(card => {
                if (!card.classList.contains('active')) {
                    card.style.transform = '';
                    card.style.background = '';
                    card.style.borderColor = '';
                }
            });
        }
    });
    
});