// File: /wp-content/themes/aetherbloom/js/navbar.js

/**
 * Navbar Component JavaScript - Updated for page navigation
 * Handles navigation functionality, smooth scrolling (home page only), and mobile menu
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
        setupNavigation(navLinks);
        setupScrollEffects(navbar);
        setupMobileMenu(mobileMenuToggle, navLinksContainer);
        setupKeyboardNavigation(navLinks);
        setupActiveStates(navLinks);
    }

    /**
     * Setup navigation - handles both page navigation and smooth scrolling
     */
    function setupNavigation(navLinks) {
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only handle anchor links and only on the home page
                if (href && href.startsWith('#') && isHomePage()) {
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
                } else if (href && href.startsWith('#') && !isHomePage()) {
                    // If we're on a different page and trying to access a home page section
                    // redirect to home page with the anchor
                    e.preventDefault();
                    window.location.href = getHomeUrl() + href;
                }
                // For regular page links, let the browser handle navigation normally
            });
        });
    }

    /**
     * Check if we're on the home page
     */
    function isHomePage() {
        return document.body.classList.contains('home') || 
               document.body.classList.contains('front-page') ||
               window.location.pathname === '/' ||
               window.location.pathname === '/index.php';
    }

    /**
     * Get the home URL
     */
    function getHomeUrl() {
        const currentUrl = window.location.origin;
        const pathArray = window.location.pathname.split('/');
        
        // If WordPress is in a subdirectory, include it
        if (pathArray.length > 2 && pathArray[1] !== '') {
            return currentUrl + '/' + pathArray[1];
        }
        
        return currentUrl;
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

        // Throttle scroll events
        window.addEventListener('scroll', requestTick, { passive: true });
        
        // Initial call
        updateNavbar();
    }

    /**
     * Setup mobile menu functionality
     */
    function setupMobileMenu(mobileMenuToggle, navLinksContainer) {
        if (!mobileMenuToggle || !navLinksContainer) {
            return;
        }

        let isMenuOpen = false;

        mobileMenuToggle.addEventListener('click', function() {
            toggleMobileMenu();
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (isMenuOpen && !navLinksContainer.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                closeMobileMenu();
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isMenuOpen) {
                closeMobileMenu();
            }
        });

        function toggleMobileMenu(forceState = null) {
            if (forceState !== null) {
                isMenuOpen = forceState;
            } else {
                isMenuOpen = !isMenuOpen;
            }

            mobileMenuToggle.classList.toggle('active', isMenuOpen);
            navLinksContainer.classList.toggle('mobile-open', isMenuOpen);
            document.body.classList.toggle('mobile-menu-open', isMenuOpen);
            
            // Update ARIA attributes
            mobileMenuToggle.setAttribute('aria-expanded', isMenuOpen);
            navLinksContainer.setAttribute('aria-hidden', !isMenuOpen);
            
            // Focus management
            if (isMenuOpen) {
                const firstLink = navLinksContainer.querySelector('.nav-link');
                if (firstLink) {
                    firstLink.focus();
                }
            } else {
                mobileMenuToggle.focus();
            }
        }

        window.toggleMobileMenu = toggleMobileMenu;
        window.closeMobileMenu = () => toggleMobileMenu(false);
    }

    /**
     * Close mobile menu
     */
    function closeMobileMenu() {
        if (window.closeMobileMenu) {
            window.closeMobileMenu();
        }
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
     * Setup active states based on current page or scroll position
     */
    function setupActiveStates(navLinks) {
        // Set active state based on current page
        setActivePageState(navLinks);
        
        // Only setup scroll-based active states on home page
        if (isHomePage()) {
            setupScrollActiveStates(navLinks);
        }
    }

    /**
     * Set active state based on current page
     */
    function setActivePageState(navLinks) {
        const currentPath = window.location.pathname;
        const currentPage = getCurrentPageSlug(currentPath);
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            
            const href = link.getAttribute('href');
            if (href) {
                // Check for exact page match
                if (href.includes('/' + currentPage) || 
                    (currentPage === 'home' && (href === '/' || href.includes('/#')))) {
                    link.classList.add('active');
                }
            }
        });
    }

    /**
     * Get current page slug from path
     */
    function getCurrentPageSlug(path) {
        if (path === '/' || path === '' || path === '/index.php') {
            return 'home';
        }
        
        const segments = path.split('/').filter(segment => segment.length > 0);
        return segments[segments.length - 1] || 'home';
    }

    /**
     * Setup scroll-based active states (home page only)
     */
    function setupScrollActiveStates(navLinks) {
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

        // Only setup scroll listening on home page
        window.addEventListener('scroll', requestTick, { passive: true });
        
        // Initial call
        updateActiveStates();
    }

    /**
     * Utility function to check if element is in viewport
     */
    function isElementInViewport(element, offset = 0) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= offset &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    /**
     * Smooth scroll polyfill for older browsers
     */
    function smoothScrollPolyfill() {
        if (!('scrollBehavior' in document.documentElement.style)) {
            // Load polyfill if needed
            console.log('Smooth scroll not supported, consider adding polyfill');
        }
    }

    // Initialize polyfill check
    smoothScrollPolyfill();

})();