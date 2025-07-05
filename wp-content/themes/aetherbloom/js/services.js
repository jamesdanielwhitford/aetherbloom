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
                
                // Normalize the values based on card size - reduced intensity for smoother effect
                const rotateX = (deltaY / cardRect.height) * -8; // Max 8 degrees
                const rotateY = (deltaX / cardRect.width) * 8;   // Max 8 degrees
                const translateX = (deltaX / cardRect.width) * 8; // Max 8px movement
                const translateY = (deltaY / cardRect.height) * 8; // Max 8px movement
                
                servicesData.mousePosition = {
                    x: Math.max(-8, Math.min(8, translateX)),
                    y: Math.max(-8, Math.min(8, translateY)),
                    rotateX: Math.max(-8, Math.min(8, rotateX)),
                    rotateY: Math.max(-8, Math.min(8, rotateY))
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
    
    // Update card transform based on mouse position
    function updateCardTransform() {
        if (servicesElements.cardContent) {
            const { x, y, rotateX, rotateY } = servicesData.mousePosition;
            
            if (servicesData.isHovering) {
                const transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateX(${x}px) translateY(${y}px) scale(1.02)`;
                servicesElements.cardContent.style.transform = transform;
                servicesElements.cardContent.style.transition = 'transform 0.1s ease-out';
            } else {
                servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
                servicesElements.cardContent.style.transition = 'transform 0.3s ease-out';
            }
        }
    }
    
    // Initialize service menu interactions
    function initServiceMenu() {
        servicesElements.menuItems.forEach((item, index) => {
            item.addEventListener('mouseenter', () => {
                setActiveService(index);
            });
            
            item.addEventListener('click', () => {
                setActiveService(index);
            });
        });
    }
    
    // Set active service and update display
    function setActiveService(index) {
        if (index >= 0 && index < servicesData.services.length) {
            servicesData.activeService = index;
            updateServiceDisplay();
            updateMenuItemStates();
        }
    }
    
    // Update service card content
    function updateServiceDisplay() {
        if (!servicesData.services[servicesData.activeService]) {
            return;
        }
        
        const service = servicesData.services[servicesData.activeService];
        
        // Update card number (pad with zero)
        if (servicesElements.cardNumber) {
            servicesElements.cardNumber.textContent = String(servicesData.activeService + 1).padStart(2, '0');
        }
        
        // Update card title
        if (servicesElements.cardTitle) {
            servicesElements.cardTitle.textContent = service.title;
        }
        
        // Update card subtitle
        if (servicesElements.cardSubtitle) {
            servicesElements.cardSubtitle.textContent = service.subtitle;
        }
        
        // Update card description
        if (servicesElements.cardDescription) {
            servicesElements.cardDescription.textContent = service.description;
        }
        
        // Update features list
        if (servicesElements.featuresList && service.features) {
            servicesElements.featuresList.innerHTML = '';
            
            service.features.forEach(feature => {
                const li = document.createElement('li');
                li.className = 'feature-item';
                li.innerHTML = `
                    <span class="feature-icon">✓</span>
                    ${feature}
                `;
                servicesElements.featuresList.appendChild(li);
            });
        }
    }
    
    // Update menu item active states
    function updateMenuItemStates() {
        servicesElements.menuItems.forEach((item, index) => {
            const arrow = item.querySelector('.service-arrow');
            
            if (index === servicesData.activeService) {
                item.classList.add('active');
                if (arrow) {
                    arrow.classList.add('visible');
                }
            } else {
                item.classList.remove('active');
                if (arrow) {
                    arrow.classList.remove('visible');
                }
            }
        });
    }
    
    // Handle mobile optimization
    function handleMobileOptimization() {
        const isMobile = window.innerWidth <= 768;
        
        if (isMobile && servicesElements.cardContent) {
            // Disable 3D effects on mobile
            servicesElements.cardContent.style.transform = 'none !important';
            servicesElements.cardContent.style.transition = 'all 0.3s ease !important';
        }
    }
    
    // Handle reduced motion preferences
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (prefersReducedMotion) {
            // Disable transforms and transitions
            if (servicesElements.cardContent) {
                servicesElements.cardContent.style.transform = 'none !important';
                servicesElements.cardContent.style.transition = 'none !important';
            }
            
            if (servicesElements.content) {
                servicesElements.content.style.opacity = '1';
                servicesElements.content.style.transform = 'translateY(0)';
            }
        }
    }
    
    // Cleanup function
    function cleanup() {
        if (servicesElements.section) {
            servicesElements.section.removeEventListener('mousemove', () => {});
            servicesElements.section.removeEventListener('mouseenter', () => {});
            servicesElements.section.removeEventListener('mouseleave', () => {});
        }
        
        servicesElements.menuItems.forEach(item => {
            item.removeEventListener('mouseenter', () => {});
            item.removeEventListener('click', () => {});
        });
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
        setActiveService: setActiveService,
        cleanup: cleanup
    };
    
})();