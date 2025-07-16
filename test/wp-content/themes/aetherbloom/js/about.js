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
    
    let activeFoundationCard = null;

    const activateFoundationCard = (card) => {
        const target = card.getAttribute('data-target');

        // Remove active class from all cards and hide all content panels
        foundationCards.forEach(c => c.classList.remove('active'));
        contentPanels.forEach(panel => panel.classList.remove('active'));

        // Add active class to the hovered card
        card.classList.add('active');

        // Show target content panel
        const targetPanel = document.getElementById(target);
        if (targetPanel) {
            targetPanel.classList.add('active');
        }
        activeFoundationCard = card;
    };

    foundationCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            activateFoundationCard(this);
        });

        // Optional: Add mouseleave to hide content if no card is hovered, or revert to default
        // For now, we'll keep the last hovered item active until another is hovered.
        // If you want content to disappear on mouseleave, we'd need more complex logic
        // to manage the default state or a "no selection" state.
    });

    // Set the first foundation card as active by default on page load
    if (foundationCards.length > 0) {
        activateFoundationCard(foundationCards[0]);
    }
    
    // Values section hover functionality
    const valueItems = document.querySelectorAll('.value-item');
    let lastActiveValueItem = null; // To keep track of the last actively open item

    valueItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // If there was a previously active item and it's not the current one, close it
            if (lastActiveValueItem && lastActiveValueItem !== this) {
                lastActiveValueItem.classList.remove('open');
            }
            // Add 'open' class to the hovered item
            this.classList.add('open');
            // Update the last active item
            lastActiveValueItem = this;
        });
    });

    // Set the first value item as open by default on page load
    if (valueItems.length > 0) {
        valueItems[0].classList.add('open');
        lastActiveValueItem = valueItems[0]; // Initialize lastActiveValueItem
    }

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