// File: /wp-content/themes/aetherbloom/js/main.js

/**
 * Aetherbloom Theme Main JavaScript
 * 
 * @package Aetherbloom
 * @version 1.0.0
 */

(function() {
    'use strict';

    // Global variables
    let videoOpacity = 1;
    let mainElement = null;
    let videoContainer = null;

    /**
     * Initialize the theme
     */
    function initTheme() {
        // Cache DOM elements
        mainElement = document.getElementById('main');
        videoContainer = document.getElementById('fixed-video-container');

        // Initialize scroll handlers
        initScrollHandlers();
        
        // Initialize smooth scrolling
        initSmoothScrolling();
        
        // Initialize intersection observers
        initIntersectionObservers();
        
        // Initialize form handlers
        initFormHandlers();
        
        // Initialize video handling
        initVideoHandling();

        console.log('Aetherbloom theme initialized');
    }

    /**
     * Handle scroll-based video opacity
     */
    function initScrollHandlers() {
        if (!mainElement || !videoContainer) return;

        function handleScroll() {
            const scrollPosition = mainElement.scrollTop;
            const windowHeight = window.innerHeight;
            
            // Start fading at 40% of viewport height, complete fade by 90%
            const fadeStartPoint = windowHeight * 0.4;
            const fadeEndPoint = windowHeight * 0.9;
            const fadeRange = fadeEndPoint - fadeStartPoint;
            
            let newOpacity;
            
            if (scrollPosition <= fadeStartPoint) {
                newOpacity = 1;
            } else if (scrollPosition >= fadeEndPoint) {
                newOpacity = 0;
            } else {
                // Smooth fade between start and end points with easing
                const fadeProgress = (scrollPosition - fadeStartPoint) / fadeRange;
                // Apply easing function for smoother transition
                const easedProgress = fadeProgress * fadeProgress;
                newOpacity = 1 - easedProgress;
            }

            // Only update if opacity changed significantly
            if (Math.abs(newOpacity - videoOpacity) > 0.01) {
                videoOpacity = Math.max(0, Math.min(1, newOpacity));
                videoContainer.style.opacity = videoOpacity;
                videoContainer.style.visibility = videoOpacity > 0 ? 'visible' : 'hidden';
            }
        }

        // Throttle scroll events for better performance
        let scrollTimeout;
        function throttledScroll() {
            if (!scrollTimeout) {
                scrollTimeout = requestAnimationFrame(() => {
                    handleScroll();
                    scrollTimeout = null;
                });
            }
        }

        mainElement.addEventListener('scroll', throttledScroll);
    }

    /**
     * Initialize smooth scrolling for anchor links
     */
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just "#"
                if (href === '#') return;
                
                const targetElement = document.querySelector(href);
                
                if (targetElement) {
                    e.preventDefault();
                    
                    // Determine which container to scroll
                    const scrollContainer = href === '#hero' ? mainElement : 
                                          document.querySelector('.content-wrapper');
                    
                    if (scrollContainer) {
                        const targetPosition = href === '#hero' ? 0 : 
                                             targetElement.offsetTop - scrollContainer.offsetTop;
                        
                        scrollContainer.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    }

    /**
     * Initialize intersection observers for animations
     */
    function initIntersectionObservers() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '-50px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const element = entry.target;
                
                if (entry.isIntersecting) {
                    element.classList.add('visible');
                    element.classList.remove('fade-out');
                    element.classList.add('fade-in');
                } else {
                    element.classList.remove('visible');
                    element.classList.add('fade-out');
                    element.classList.remove('fade-in');
                }
            });
        }, observerOptions);

        // Observe sections with animations
        const animatedSections = document.querySelectorAll('.section-content, .hero-content, .why-content, .services-content, .calculator-wrapper, .cta-wrapper');
        animatedSections.forEach(section => {
            observer.observe(section);
        });
    }

    /**
     * Initialize form handlers
     */
    function initFormHandlers() {
        // Contact form handler
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', handleContactForm);
        }

        // Newsletter form handler
        const newsletterForm = document.getElementById('newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', handleNewsletterForm);
        }
    }

    /**
     * Handle contact form submission
     */
    function handleContactForm(e) {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        formData.append('action', 'aetherbloom_contact_form');
        
        // Show loading state
        const submitButton = e.target.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.textContent = 'Sending...';
        submitButton.disabled = true;

        fetch(aetherbloom_ajax.ajax_url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification(data.data, 'success');
                e.target.reset();
            } else {
                showNotification(data.data, 'error');
            }
        })
        .catch(error => {
            showNotification('An error occurred. Please try again.', 'error');
        })
        .finally(() => {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        });
    }

    /**
     * Handle newsletter form submission
     */
    function handleNewsletterForm(e) {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        formData.append('action', 'aetherbloom_newsletter');
        
        // Show loading state
        const submitButton = e.target.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.textContent = 'Subscribing...';
        submitButton.disabled = true;

        fetch(aetherbloom_ajax.ajax_url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification('Thank you for subscribing!', 'success');
                e.target.reset();
            } else {
                showNotification(data.data || 'Subscription failed. Please try again.', 'error');
            }
        })
        .catch(error => {
            showNotification('An error occurred. Please try again.', 'error');
        })
        .finally(() => {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        });
    }

    /**
     * Show notification to user
     */
    function showNotification(message, type) {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => notification.remove());

        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification notification--${type}`;
        notification.innerHTML = `
            <div class="notification__content">
                <span class="notification__message">${message}</span>
                <button class="notification__close" aria-label="Close notification">&times;</button>
            </div>
        `;

        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10000;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            color: white;
            font-family: var(--font-body);
            font-size: 0.9rem;
            max-width: 400px;
            backdrop-filter: blur(10px);
            animation: slideInRight 0.3s ease-out;
            ${type === 'success' ? 'background: rgba(76, 175, 80, 0.9);' : 'background: rgba(244, 67, 54, 0.9);'}
        `;

        // Add animation styles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            .notification__content {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1rem;
            }
            
            .notification__close {
                background: none;
                border: none;
                color: white;
                font-size: 1.2rem;
                cursor: pointer;
                padding: 0;
                line-height: 1;
            }
        `;
        document.head.appendChild(style);

        document.body.appendChild(notification);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 5000);

        // Close button handler
        const closeButton = notification.querySelector('.notification__close');
        closeButton.addEventListener('click', () => {
            notification.remove();
        });
    }

    /**
     * Initialize video handling
     */
    function initVideoHandling() {
        const video = document.querySelector('.fixed-video');
        if (video) {
            // Ensure video plays on load
            video.addEventListener('loadeddata', () => {
                if (video.paused) {
                    video.play().catch(e => {
                        console.log('Video autoplay prevented:', e);
                    });
                }
            });

            // Handle video errors
            video.addEventListener('error', (e) => {
                console.error('Video error:', e);
                // Hide video container if video fails to load
                if (videoContainer) {
                    videoContainer.style.display = 'none';
                }
            });
        }
    }

    /**
     * Utility function to debounce function calls
     */
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    /**
     * Utility function to throttle function calls
     */
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    /**
     * Handle window resize
     */
    function handleResize() {
        // Recalculate any size-dependent elements
        if (mainElement && videoContainer) {
            // Force recalculation of scroll position
            const scrollEvent = new Event('scroll');
            mainElement.dispatchEvent(scrollEvent);
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTheme);
    } else {
        initTheme();
    }

    // Handle window resize
    window.addEventListener('resize', debounce(handleResize, 250));

    // Handle reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.documentElement.classList.add('reduced-motion');
    }

    // Expose some functions globally for other scripts
    window.AetherbloomTheme = {
        showNotification: showNotification,
        debounce: debounce,
        throttle: throttle
    };

})();