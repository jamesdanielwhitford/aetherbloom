// File: /wp-content/themes/aetherbloom/js/services.js

(function() {
    'use strict';
    
    // Global variables for services functionality
    let servicesData = {
        services: [],
        activeService: 0,
        isVisible: false,
        mousePosition: { x: 0, y: 0, rotateX: 0, rotateY: 0 },
        isHovering: false
    };
    
    // DOM elements cache
    let servicesElements = {
        section: null,
        content: null,
        menu: null,
        menuItems: [],
        card: null,
        cardContent: null,
        cardNumber: null,
        cardTitle: null,
        cardSubtitle: null,
        cardDescription: null,
        featuresList: null
    };
    
    // Initialize services functionality
    function initServices() {
        // Get data from PHP if available
        if (window.aetherbloomServicesData) {
            servicesData.services = window.aetherbloomServicesData.services;
            servicesData.activeService = window.aetherbloomServicesData.activeService;
        }
        
        // Cache DOM elements
        cacheElements();
        
        if (!servicesElements.section) {
            console.warn('Services section not found');
            return;
        }
        
        // Initialize intersection observer
        initIntersectionObserver();
        
        // Initialize mouse tracking for card
        initMouseTracking();
        
        // Initialize service menu interactions
        initServiceMenu();
        
        // Update initial service display
        updateServiceDisplay();
    }
    
    // Cache all DOM elements
    function cacheElements() {
        servicesElements.section = document.querySelector('.services-section');
        servicesElements.content = document.getElementById('services-content');
        servicesElements.menu = document.getElementById('services-menu');
        servicesElements.menuItems = Array.from(document.querySelectorAll('.service-menu-item'));
        servicesElements.card = document.querySelector('.service-card');
        servicesElements.cardContent = document.getElementById('service-card-content');
        servicesElements.cardNumber = document.getElementById('card-number');
        servicesElements.cardTitle = document.getElementById('card-title');
        servicesElements.cardSubtitle = document.getElementById('card-subtitle');
        servicesElements.cardDescription = document.getElementById('card-description');
        servicesElements.featuresList = document.getElementById('features-list');
    }
    
    // Setup intersection observer for section visibility
    function initIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '-50px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                servicesData.isVisible = entry.isIntersecting;
                updateSectionVisibility();
            });
        }, observerOptions);
        
        observer.observe(servicesElements.section);
    }
    
    // Update section visibility classes
    function updateSectionVisibility() {
        if (servicesElements.content) {
            if (servicesData.isVisible) {
                servicesElements.content.classList.add('visible');
            } else {
                servicesElements.content.classList.remove('visible');
            }
        }
    }
    
    // Initialize mouse tracking for card 3D effects
    function initMouseTracking() {
        const handleMouseMove = (e) => {
            if (servicesElements.cardContent && servicesElements.section) {
                const section = servicesElements.section;
                const card = servicesElements.cardContent;
                const sectionRect = section.getBoundingClientRect();
                const cardRect = card.getBoundingClientRect();
                
                // Get mouse position relative to the card center
                const cardCenterX = cardRect.left + cardRect.width / 2;
                const cardCenterY = cardRect.top + cardRect.height / 2;
                
                const deltaX = e.clientX - cardCenterX;
                const deltaY = e.clientY - cardCenterY;
                
                // Normalize the values based on card size
                const rotateX = (deltaY / cardRect.height) * -10; // Max 10 degrees
                const rotateY = (deltaX / cardRect.width) * 10;   // Max 10 degrees
                const translateX = (deltaX / cardRect.width) * 10; // Max 10px movement
                const translateY = (deltaY / cardRect.height) * 10; // Max 10px movement
                
                servicesData.mousePosition = {
                    x: translateX,
                    y: translateY,
                    rotateX: Math.max(-10, Math.min(10, rotateX)),
                    rotateY: Math.max(-10, Math.min(10, rotateY))
                };
                
                updateCardTransform();
            }
        };
        
        const handleMouseEnter = () => {
            servicesData.isHovering = true;
        };
        
        const handleMouseLeave = () => {
            servicesData.isHovering = false;
            servicesData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
            updateCardTransform();
        };
        
        if (servicesElements.section) {
            servicesElements.section.addEventListener('mousemove', handleMouseMove);
            servicesElements.section.addEventListener('mouseenter', handleMouseEnter);
            servicesElements.section.addEventListener('mouseleave', handleMouseLeave);
        }
    }
    
    // Initialize service menu interactions
    function initServiceMenu() {
        servicesElements.menuItems.forEach((item, index) => {
            item.addEventListener('mouseenter', () => setActiveService(index));
        });
    }
    
    // Set active service and update display
    function setActiveService(index) {
        if (index >= 0 && index < servicesData.services.length) {
            servicesData.activeService = index;
            updateServiceDisplay();
            updateMenuStates();
        }
    }
    
    // Update service menu visual states
    function updateMenuStates() {
        servicesElements.menuItems.forEach((item, index) => {
            const arrow = item.querySelector('.service-arrow');
            
            if (index === servicesData.activeService) {
                item.classList.add('active');
                if (arrow) arrow.classList.add('visible');
            } else {
                item.classList.remove('active');
                if (arrow) arrow.classList.remove('visible');
            }
        });
    }
    
    // Update service card display with current service data
    function updateServiceDisplay() {
        const currentService = servicesData.services[servicesData.activeService];
        if (!currentService) return;
        
        // Update card number
        if (servicesElements.cardNumber) {
            servicesElements.cardNumber.textContent = String(servicesData.activeService + 1).padStart(2, '0');
        }
        
        // Update card title
        if (servicesElements.cardTitle) {
            servicesElements.cardTitle.textContent = currentService.title;
        }
        
        // Update card subtitle
        if (servicesElements.cardSubtitle) {
            servicesElements.cardSubtitle.textContent = currentService.subtitle;
        }
        
        // Update card description
        if (servicesElements.cardDescription) {
            servicesElements.cardDescription.textContent = currentService.description;
        }
        
        // Update features list
        if (servicesElements.featuresList && currentService.features) {
            servicesElements.featuresList.innerHTML = '';
            currentService.features.forEach(feature => {
                const li = document.createElement('li');
                li.className = 'feature-item';
                li.innerHTML = `<span class="feature-icon">✓</span>${feature}`;
                servicesElements.featuresList.appendChild(li);
            });
        }
    }
    
    // Update card transform based on mouse position
    function updateCardTransform() {
        if (!servicesElements.cardContent) return;
        
        const transform = getCardTransform();
        const transition = servicesData.isHovering ? 
            'transform 0.1s ease-out' : 
            'transform 0.3s ease-out';
        
        servicesElements.cardContent.style.transform = transform;
        servicesElements.cardContent.style.transition = transition;
    }
    
    // Calculate transform string for the card
    function getCardTransform() {
        if (!servicesData.isHovering) {
            return 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
        }
        
        const { x, y, rotateX, rotateY } = servicesData.mousePosition;
        return `perspective(1000px) rotateX(${rotateX || 0}deg) rotateY(${rotateY || 0}deg) translateX(${x || 0}px) translateY(${y || 0}px) scale(1.02)`;
    }
    
    // Cleanup function
    function cleanup() {
        // Reset card transform
        if (servicesElements.cardContent) {
            servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
        }
        
        servicesData.isHovering = false;
        servicesData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
    }
    
    // Handle reduced motion preference
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (prefersReducedMotion && servicesElements.cardContent) {
            servicesElements.cardContent.style.transform = 'none';
            servicesElements.cardContent.style.transition = 'none';
        }
    }
    
    // Handle mobile devices (disable 3D effects for performance)
    function handleMobileOptimization() {
        const isMobile = window.innerWidth <= 768;
        
        if (isMobile && servicesElements.cardContent) {
            servicesElements.cardContent.style.transform = 'none !important';
            servicesElements.cardContent.style.transition = 'all 0.3s ease !important';
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initServices);
    } else {
        initServices();
    }
    
    // Handle resize events
    window.addEventListener('resize', handleMobileOptimization);
    
    // Handle reduced motion changes
    const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    reducedMotionQuery.addListener(handleReducedMotion);
    handleReducedMotion(); // Initial check
    
    // Initial mobile check
    handleMobileOptimization();
    
    // Cleanup on page unload
    window.addEventListener('beforeunload', cleanup);
    
    // Expose functions for external access if needed
    window.aetherbloomServices = {
        init: initServices,
        cleanup: cleanup,
        setActiveService: setActiveService,
        getActiveService: () => servicesData.activeService
    };
    
})();