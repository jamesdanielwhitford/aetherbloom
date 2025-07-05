// File: /wp-content/themes/aetherbloom/js/navbar.js

/**
 * Navbar Component JavaScript
 * Handles navigation functionality, smooth scrolling, and mobile menu
 * 
 * @package Aetherbloom
 * @version 1.0.0
 */

(function() {
    'use strict';

    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        initNavbar();
    });

    function initNavbar() {
        const navbar = document.querySelector('.navbar');
        const navLinks = document.querySelectorAll('.nav-link, .pricing-btn, .get-started-btn');
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const navLinksContainer = document.querySelector('.nav-links');

        if (!navbar) {
            console.warn('Navbar element not found');
            return;
        }

        // Initialize all navbar functionality
        setupSmoothScrolling(navLinks);
        setupScrollEffects(navbar);
        setupMobileMenu(mobileMenuToggle, navLinksContainer);
        setupKeyboardNavigation(navLinks);
        setupActiveStates(navLinks);
    }

    /**
     * Setup smooth scrolling for navigation links
     */
    function setupSmoothScrolling(navLinks) {
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only handle anchor links
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        smoothScrollTo(targetElement);
                        
                        // Update URL without triggering scroll
                        if (history.pushState) {
                            history.pushState(null, null, href);
                        }
                        
                        // Close mobile menu if open
                        closeMobileMenu();
                    }
                }
            });
        });
    }

    /**
     * Smooth scroll to target element
     */
    function smoothScrollTo(element) {
        const headerOffset = 100; // Account for fixed navbar
        const elementPosition = element.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }

    /**
     * Setup navbar scroll effects
     */
    function setupScrollEffects(navbar) {
        let lastScrollY = window.scrollY;
        let ticking = false;

        function updateNavbar() {
            const currentScrollY = window.scrollY;
            
            // Add/remove scrolled class for styling
            if (currentScrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Optional: Hide/show navbar on scroll direction
            // if (currentScrollY > lastScrollY && currentScrollY > 200) {
            //     navbar.classList.add('hidden');
            // } else {
            //     navbar.classList.remove('hidden');
            // }

            lastScrollY = currentScrollY;
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateNavbar);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });
    }

    /**
     * Setup mobile menu functionality
     */
    function setupMobileMenu(toggle, navContainer) {
        if (!toggle || !navContainer) return;

        let isMenuOpen = false;

        toggle.addEventListener('click', function() {
            isMenuOpen = !isMenuOpen;
            toggleMobileMenu(isMenuOpen);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (isMenuOpen && !toggle.contains(e.target) && !navContainer.contains(e.target)) {
                isMenuOpen = false;
                toggleMobileMenu(false);
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isMenuOpen) {
                isMenuOpen = false;
                toggleMobileMenu(false);
            }
        });
    }

    /**
     * Toggle mobile menu state
     */
    function toggleMobileMenu(isOpen) {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const navContainer = document.querySelector('.nav-links');
        
        if (toggle) {
            toggle.classList.toggle('active', isOpen);
            toggle.setAttribute('aria-expanded', isOpen);
        }
        
        if (navContainer) {
            navContainer.classList.toggle('mobile-open', isOpen);
        }
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = isOpen ? 'hidden' : '';
    }

    /**
     * Close mobile menu
     */
    function closeMobileMenu() {
        toggleMobileMenu(false);
    }

    /**
     * Setup keyboard navigation
     */
    function setupKeyboardNavigation(navLinks) {
        navLinks.forEach((link, index) => {
            link.addEventListener('keydown', function(e) {
                switch(e.key) {
                    case 'ArrowRight':
                        e.preventDefault();
                        const nextIndex = (index + 1) % navLinks.length;
                        navLinks[nextIndex].focus();
                        break;
                        
                    case 'ArrowLeft':
                        e.preventDefault();
                        const prevIndex = (index - 1 + navLinks.length) % navLinks.length;
                        navLinks[prevIndex].focus();
                        break;
                        
                    case 'Home':
                        e.preventDefault();
                        navLinks[0].focus();
                        break;
                        
                    case 'End':
                        e.preventDefault();
                        navLinks[navLinks.length - 1].focus();
                        break;
                }
            });
        });
    }

    /**
     * Setup active states based on scroll position
     */
    function setupActiveStates(navLinks) {
        let ticking = false;

        function updateActiveStates() {
            const sections = document.querySelectorAll('section[id]');
            const scrollPos = window.scrollY + 150; // Offset for navbar

            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top + window.scrollY;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    // Remove active class from all links
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                    });

                    // Add active class to corresponding link
                    const activeLink = document.querySelector(`a[href="#${sectionId}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            });

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateActiveStates);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });
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
        }
    }

    /**
     * Handle reduced motion preference
     */
    function respectReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        
        if (prefersReducedMotion.matches) {
            // Override smooth scrolling for reduced motion
            window.smoothScrollTo = function(element) {
                const headerOffset = 100;
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo(0, offsetPosition);
            };
        }
    }

    // Initialize reduced motion handling
    respectReducedMotion();

})();