// File: /wp-content/themes/aetherbloom/js/services.js

/**
 * Interactive Services Section JavaScript - Fixed for improved card interactions
 * 
 * @package Aetherbloom
 * @version 2.0.0
 */

(function() {
    'use strict';
    
    // Global variables
    let servicesData = window.aetherbloomServicesData || {
        services: [],
        activeService: 0,
        sectionSelector: '.services-section'
    };
    
    let servicesElements = {};
    let mouseTimeout;
    let isHovering = false;
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initServices);
    } else {
        initServices();
    }
    
    function initServices() {
        // Find services section and elements
        const servicesSection = document.querySelector(servicesData.sectionSelector);
        if (!servicesSection) {
            console.warn('Services section not found');
            return;
        }
        
        // Cache DOM elements
        servicesElements = {
            section: servicesSection,
            content: servicesSection.querySelector('.services-content'),
            menuItems: servicesSection.querySelectorAll('.service-menu-item'),
            arrows: servicesSection.querySelectorAll('.service-arrow'),
            cardContent: servicesSection.querySelector('#service-card-content'),
            cardNumber: servicesSection.querySelector('#card-number'),
            cardTitle: servicesSection.querySelector('#card-title'),
            cardSubtitle: servicesSection.querySelector('#card-subtitle'),
            cardDescription: servicesSection.querySelector('#card-description'),
            featuresList: servicesSection.querySelector('#features-list')
        };
        
        // Verify required elements exist
        if (!servicesElements.content || !servicesElements.menuItems.length) {
            console.warn('Required services elements not found');
            return;
        }
        
        // Initialize components
        initServiceMenu();
        initScrollAnimation();
        initCardInteractions();
        
        // Set initial active service
        setActiveService(servicesData.activeService);
        
        console.log('Services section initialized successfully');
    }
    
    // Initialize scroll-based animations
    function initScrollAnimation() {
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '-50px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, observerOptions);
        
        if (servicesElements.content) {
            observer.observe(servicesElements.content);
        }
    }
    
    // Initialize card 3D hover interactions
    function initCardInteractions() {
        if (!servicesElements.cardContent) return;
        
        const card = servicesElements.cardContent;
        
        // Add mouse move handler for 3D effect
        card.addEventListener('mouseenter', handleCardMouseEnter);
        card.addEventListener('mousemove', handleCardMouseMove);
        card.addEventListener('mouseleave', handleCardMouseLeave);
        
        // Add touch support for mobile
        card.addEventListener('touchstart', handleCardTouchStart, { passive: true });
        card.addEventListener('touchend', handleCardTouchEnd, { passive: true });
    }
    
    function handleCardMouseEnter() {
        isHovering = true;
        clearTimeout(mouseTimeout);
    }
    
    function handleCardMouseMove(e) {
        if (!isHovering) return;
        
        const card = servicesElements.cardContent;
        const rect = card.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        
        const mouseX = e.clientX - centerX;
        const mouseY = e.clientY - centerY;
        
        const rotateX = (mouseY / rect.height) * -10;
        const rotateY = (mouseX / rect.width) * 10;
        
        const x = (mouseX / rect.width) * 20;
        const y = (mouseY / rect.height) * 20;
        
        // Apply transform with improved performance
        requestAnimationFrame(() => {
            if (isHovering && servicesElements.cardContent) {
                const transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateX(${x}px) translateY(${y}px) translateZ(0) scale(1.02)`;
                servicesElements.cardContent.style.transform = transform;
                servicesElements.cardContent.style.transition = 'transform 0.1s ease-out';
            }
        });
    }
    
    function handleCardMouseLeave() {
        isHovering = false;
        
        // Reset transform with smooth transition
        mouseTimeout = setTimeout(() => {
            if (servicesElements.cardContent && !isHovering) {
                servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) translateZ(0) scale(1)';
                servicesElements.cardContent.style.transition = 'transform 0.3s ease-out';
            }
        }, 50);
    }
    
    function handleCardTouchStart(e) {
        // Prevent default to avoid conflicts
        e.preventDefault();
        isHovering = true;
    }
    
    function handleCardTouchEnd() {
        isHovering = false;
        if (servicesElements.cardContent) {
            servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) translateZ(0) scale(1)';
            servicesElements.cardContent.style.transition = 'transform 0.3s ease-out';
        }
    }
    
    // Initialize service menu interactions
    function initServiceMenu() {
        servicesElements.menuItems.forEach((item, index) => {
            // Add hover handlers
            item.addEventListener('mouseenter', () => {
                if (window.innerWidth > 768) { // Only on desktop
                    setActiveService(index);
                }
            });
            
            // Add click handlers for all devices
            item.addEventListener('click', (e) => {
                e.preventDefault();
                setActiveService(index);
            });
            
            // Add keyboard support
            item.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    setActiveService(index);
                }
            });
            
            // Make focusable
            item.setAttribute('tabindex', '0');
            item.setAttribute('role', 'button');
            item.setAttribute('aria-label', `View ${servicesData.services[index]?.title || 'service'} details`);
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
        
        // Update card title with safe HTML handling
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
            const featuresHTML = service.features.map(feature => `
                <li class="feature-item">
                    <span class="feature-icon">✓</span>
                    ${escapeHtml(feature)}
                </li>
            `).join('');
            
            servicesElements.featuresList.innerHTML = featuresHTML;
        }
        
        // Add subtle animation to card content
        if (servicesElements.cardContent) {
            servicesElements.cardContent.style.opacity = '0.8';
            servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) translateZ(0) scale(0.98)';
            
            setTimeout(() => {
                if (servicesElements.cardContent) {
                    servicesElements.cardContent.style.opacity = '1';
                    servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) translateZ(0) scale(1)';
                }
            }, 100);
        }
    }
    
    // Update menu item active states
    function updateMenuItemStates() {
        servicesElements.menuItems.forEach((item, index) => {
            const isActive = index === servicesData.activeService;
            
            // Update active class
            if (isActive) {
                item.classList.add('active');
                item.setAttribute('aria-selected', 'true');
            } else {
                item.classList.remove('active');
                item.setAttribute('aria-selected', 'false');
            }
            
            // Update arrow visibility
            const arrow = servicesElements.arrows[index];
            if (arrow) {
                if (isActive) {
                    arrow.classList.add('visible');
                } else {
                    arrow.classList.remove('visible');
                }
            }
        });
    }
    
    // Utility function to escape HTML
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
    
    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Reset card transform on resize
            if (servicesElements.cardContent) {
                servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) translateZ(0) scale(1)';
            }
        }, 250);
    });
    
    // Performance optimization: pause animations when tab is not visible
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            isHovering = false;
            clearTimeout(mouseTimeout);
            if (servicesElements.cardContent) {
                servicesElements.cardContent.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) translateZ(0) scale(1)';
            }
        }
    });
    
    // Expose functions for debugging (remove in production)
    window.aetherbloomServices = {
        setActiveService,
        updateServiceDisplay,
        servicesData
    };
    
})();