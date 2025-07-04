// File: /wp-content/themes/aetherbloom/js/why-aetherbloom.js

(function() {
    'use strict';
    
    // Global variables for why-aetherbloom functionality
    let whyData = {
        isVisible: false,
        hoveredCard: null,
        mousePosition: { x: 0, y: 0, rotateX: 0, rotateY: 0 },
        rafId: null,
        cardsData: []
    };
    
    // DOM elements cache
    let whyElements = {
        section: null,
        textContent: null,
        cardsContainer: null,
        cardsGrid: null,
        cards: []
    };
    
    // Initialize why-aetherbloom functionality
    function initWhyAetherbloom() {
        // Get data from PHP if available
        if (window.aetherbloomWhyData) {
            whyData.cardsData = window.aetherbloomWhyData.cardsData;
        }
        
        // Cache DOM elements
        whyElements.section = document.querySelector('.why-section');
        whyElements.textContent = document.querySelector('.why-section .text-content');
        whyElements.cardsContainer = document.querySelector('.why-section .cards-container');
        whyElements.cardsGrid = document.getElementById('why-cards-grid');
        whyElements.cards = Array.from(document.querySelectorAll('.why-section .card'));
        
        if (!whyElements.section) {
            console.warn('Why Aetherbloom section not found');
            return;
        }
        
        // Initialize intersection observer
        initIntersectionObserver();
        
        // Initialize mouse tracking
        initMouseTracking();
        
        // Initialize card interactions
        initCardInteractions();
    }
    
    // Setup intersection observer for section visibility
    function initIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '-50px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                whyData.isVisible = entry.isIntersecting;
                updateSectionVisibility();
            });
        }, observerOptions);
        
        observer.observe(whyElements.section);
    }
    
    // Update section visibility classes
    function updateSectionVisibility() {
        if (whyElements.textContent) {
            if (whyData.isVisible) {
                whyElements.textContent.classList.add('visible');
            } else {
                whyElements.textContent.classList.remove('visible');
            }
        }
        
        if (whyElements.cardsContainer) {
            if (whyData.isVisible) {
                whyElements.cardsContainer.classList.add('visible');
            } else {
                whyElements.cardsContainer.classList.remove('visible');
            }
        }
    }
    
    // Initialize mouse tracking for 3D card effects
    function initMouseTracking() {
        // Throttled mouse move handler using RAF
        const handleMouseMove = (e) => {
            if (whyData.rafId) return;
            
            whyData.rafId = requestAnimationFrame(() => {
                updateMousePosition(e);
                whyData.rafId = null;
            });
        };
        
        const handleMouseLeave = () => {
            whyData.hoveredCard = null;
            whyData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
            updateCardTransforms();
        };
        
        if (whyElements.section) {
            whyElements.section.addEventListener('mousemove', handleMouseMove);
            whyElements.section.addEventListener('mouseleave', handleMouseLeave);
        }
    }
    
    // Update mouse position and calculate transforms
    function updateMousePosition(e) {
        if (whyData.hoveredCard !== null && whyElements.cards[whyData.hoveredCard]) {
            const card = whyElements.cards[whyData.hoveredCard];
            const cardRect = card.getBoundingClientRect();
            
            // Get mouse position relative to the card center
            const cardCenterX = cardRect.left + cardRect.width / 2;
            const cardCenterY = cardRect.top + cardRect.height / 2;
            
            const deltaX = e.clientX - cardCenterX;
            const deltaY = e.clientY - cardCenterY;
            
            // Reduced intensity for smoother interaction
            const rotateX = (deltaY / cardRect.height) * -6; // Max 6 degrees
            const rotateY = (deltaX / cardRect.width) * 6;   // Max 6 degrees
            const translateX = (deltaX / cardRect.width) * 6; // Max 6px movement
            const translateY = (deltaY / cardRect.height) * 6; // Max 6px movement
            
            whyData.mousePosition = {
                x: Math.max(-6, Math.min(6, translateX)),
                y: Math.max(-6, Math.min(6, translateY)),
                rotateX: Math.max(-6, Math.min(6, rotateX)),
                rotateY: Math.max(-6, Math.min(6, rotateY))
            };
            
            updateCardTransforms();
        }
    }
    
    // Initialize individual card interactions
    function initCardInteractions() {
        whyElements.cards.forEach((card, index) => {
            card.addEventListener('mouseenter', () => handleCardMouseEnter(index));
            card.addEventListener('mouseleave', handleCardMouseLeave);
        });
    }
    
    // Handle card mouse enter
    function handleCardMouseEnter(index) {
        whyData.hoveredCard = index;
        updateCardClasses();
    }
    
    // Handle card mouse leave
    function handleCardMouseLeave() {
        whyData.hoveredCard = null;
        whyData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
        updateCardTransforms();
        updateCardClasses();
    }
    
    // Update card transform styles
    function updateCardTransforms() {
        whyElements.cards.forEach((card, index) => {
            const transform = getCardTransform(index);
            const transition = whyData.hoveredCard === index ? 
                'transform 0.05s ease-out' : 
                'transform 0.2s ease-out';
            
            card.style.transform = transform;
            card.style.transition = transition;
        });
    }
    
    // Calculate transform string for a specific card
    function getCardTransform(index) {
        if (whyData.hoveredCard !== index) {
            return 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
        }
        
        const { x, y, rotateX, rotateY } = whyData.mousePosition;
        return `perspective(1000px) rotateX(${rotateX || 0}deg) rotateY(${rotateY || 0}deg) translateX(${x || 0}px) translateY(${y || 0}px) scale(1.03)`;
    }
    
    // Update card hover classes
    function updateCardClasses() {
        whyElements.cards.forEach((card, index) => {
            if (whyData.hoveredCard === index) {
                card.classList.add('card-hovered');
            } else {
                card.classList.remove('card-hovered');
            }
        });
    }
    
    // Cleanup function
    function cleanup() {
        if (whyData.rafId) {
            cancelAnimationFrame(whyData.rafId);
            whyData.rafId = null;
        }
        
        // Reset all transforms
        whyElements.cards.forEach(card => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
            card.classList.remove('card-hovered');
        });
        
        whyData.hoveredCard = null;
        whyData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
    }
    
    // Handle reduced motion preference
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (prefersReducedMotion) {
            // Disable 3D transforms for accessibility
            whyElements.cards.forEach(card => {
                card.style.transform = 'none';
                card.style.transition = 'none';
            });
            
            // Remove mouse tracking
            if (whyElements.section) {
                whyElements.section.removeEventListener('mousemove', updateMousePosition);
            }
        }
    }
    
    // Handle mobile devices (disable 3D effects for performance)
    function handleMobileOptimization() {
        const isMobile = window.innerWidth <= 768;
        
        if (isMobile) {
            // Disable 3D effects on mobile
            whyElements.cards.forEach(card => {
                card.style.transform = 'none !important';
                card.style.transition = 'all 0.2s ease !important';
            });
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initWhyAetherbloom);
    } else {
        initWhyAetherbloom();
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
    window.aetherbloomWhyAetherbloom = {
        init: initWhyAetherbloom,
        cleanup: cleanup,
        setHoveredCard: function(index) {
            whyData.hoveredCard = index;
            updateCardTransforms();
            updateCardClasses();
        }
    };
    
})();