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
        
        // Optional: Handle hover effects for desktop
        card.addEventListener('mouseenter', function() {
            if (window.innerWidth > 768) {
                const target = this.getAttribute('data-target');
                
                // Don't change if this card is already active
                if (this.classList.contains('active')) {
                    return;
                }
                
                // Add hover preview effect
                this.style.transform = 'translateY(-5px)';
                this.style.background = 'rgba(255, 255, 255, 0.12)';
                this.style.borderColor = 'rgba(255, 147, 64, 0.3)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (window.innerWidth > 768) {
                // Remove hover effects if not active
                if (!this.classList.contains('active')) {
                    this.style.transform = '';
                    this.style.background = '';
                    this.style.borderColor = '';
                }
            }
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