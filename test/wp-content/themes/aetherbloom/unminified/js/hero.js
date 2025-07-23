// File: /wp-content/themes/aetherbloom/js/hero.js

(function() {
    'use strict';
    
    // Global variables for hero functionality
    let heroData = {
        animatedTexts: ['Transformed.', 'Empowered.', 'in Full Bloom.'],
        currentTextIndex: 0,
        isTransitioning: false,
        isVisible: true,
        animationInterval: null
    };
    
    // DOM elements cache
    let heroElements = {
        section: null,
        animatedText: null,
        heroContent: null
    };
    
    // Initialize hero functionality
    function initHero() {
        // Get data from PHP if available
        if (window.aetherbloomHeroData) {
            heroData.animatedTexts = window.aetherbloomHeroData.animatedTexts.map(text => text.trim());
        }
        
        // Cache DOM elements
        heroElements.section = document.querySelector('.hero-container');
        heroElements.animatedText = document.getElementById('animated-text');
        heroElements.heroContent = document.querySelector('.hero-content');
        
        if (!heroElements.section || !heroElements.animatedText) {
            console.warn('Hero elements not found');
            return;
        }
        
        // Initialize intersection observer for section visibility
        initIntersectionObserver();
        
        // Start text animation cycle
        startTextAnimation();
        
        // Initialize with first text
        renderAnimatedText(heroData.animatedTexts[0]);
    }
    
    // Setup intersection observer for hero section
    function initIntersectionObserver() {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '-10% 0px -10% 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                heroData.isVisible = entry.isIntersecting;
                updateHeroVisibility();
            });
        }, observerOptions);
        
        observer.observe(heroElements.section);
    }
    
    // Update hero section visibility classes
    function updateHeroVisibility() {
        if (heroElements.heroContent) {
            if (heroData.isVisible) {
                heroElements.heroContent.classList.remove('fade-out');
                heroElements.heroContent.classList.add('fade-in');
            } else {
                heroElements.heroContent.classList.remove('fade-in');
                heroElements.heroContent.classList.add('fade-out');
            }
        }
    }
    
    // Start the text animation cycle
    function startTextAnimation() {
        if (heroData.animationInterval) {
            clearInterval(heroData.animationInterval);
        }
        
        heroData.animationInterval = setInterval(() => {
            if (heroData.isTransitioning) return;
            
            heroData.isTransitioning = true;
            
            // Add fade out class
            if (heroElements.animatedText) {
                heroElements.animatedText.classList.remove('fade-in');
                heroElements.animatedText.classList.add('fade-out');
            }
            
            // After fade out animation completes, change text and fade in
            setTimeout(() => {
                heroData.currentTextIndex = (heroData.currentTextIndex + 1) % heroData.animatedTexts.length;
                const newText = heroData.animatedTexts[heroData.currentTextIndex];
                
                renderAnimatedText(newText);
                
                if (heroElements.animatedText) {
                    heroElements.animatedText.classList.remove('fade-out');
                    heroElements.animatedText.classList.add('fade-in');
                }
                
                heroData.isTransitioning = false;
            }, 800); // Wait for fade out animation to complete
        }, 4000); // Change text every 4 seconds
    }
    
    // Render animated text with individual letter spans
    function renderAnimatedText(text) {
        if (!heroElements.animatedText || !text) return;
        
        const letters = text.split('');
        const totalLetters = letters.length;
        
        // Clear existing content
        heroElements.animatedText.innerHTML = '';
        
        // Create letter spans
        letters.forEach((char, index) => {
            const letterSpan = document.createElement('span');
            letterSpan.className = 'letter';
            letterSpan.textContent = char === ' ' ? '\u00A0' : char; // Non-breaking space for spaces
            
            // Set CSS custom properties for animation timing
            letterSpan.style.setProperty('--letter-index', index);
            letterSpan.style.setProperty('--total-letters', totalLetters);
            letterSpan.style.setProperty('--reverse-index', totalLetters - 1 - index);
            
            // Set animation delay based on transition state
            const delay = heroData.isTransitioning 
                ? `${index * 50}ms`  // Fade out from first letter
                : `${index * 50}ms`; // Fade in from first letter
            
            letterSpan.style.animationDelay = delay;
            
            heroElements.animatedText.appendChild(letterSpan);
        });
    }
    
    // Cleanup function
    function cleanup() {
        if (heroData.animationInterval) {
            clearInterval(heroData.animationInterval);
            heroData.animationInterval = null;
        }
    }
    
    // Handle visibility change (for performance)
    function handleVisibilityChange() {
        if (document.hidden) {
            cleanup();
        } else {
            startTextAnimation();
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHero);
    } else {
        initHero();
    }
    
    // Handle page visibility changes
    document.addEventListener('visibilitychange', handleVisibilityChange);
    
    // Cleanup on page unload
    window.addEventListener('beforeunload', cleanup);
    
    // Expose functions for external access if needed
    window.aetherbloomHero = {
        init: initHero,
        cleanup: cleanup,
        setTexts: function(texts) {
            if (Array.isArray(texts)) {
                heroData.animatedTexts = texts;
                heroData.currentTextIndex = 0;
                renderAnimatedText(texts[0]);
            }
        }
    };
    
})();