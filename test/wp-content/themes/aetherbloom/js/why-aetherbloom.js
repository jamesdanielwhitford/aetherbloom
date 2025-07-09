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
        
        // Cache DOM elements with updated class names
        whyElements.section = document.querySelector('.why-section');
        whyElements.textContent = document.querySelector('.why-section .why-text-content');
        whyElements.cardsContainer = document.querySelector('.why-section .why-cards-container');
        whyElements.cardsGrid = document.getElementById('why-cards-grid');
        whyElements.cards = Array.from(document.querySelectorAll('.why-section .why-card'));
        
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
            const rotateX = (deltaY / cardRect.height) * -6;
            const rotateY = (deltaX / cardRect.width) * 6;
            const translateX = (deltaX / cardRect.width) * 6;
            const translateY = (deltaY / cardRect.height) * 6;
            
            whyData.mousePosition = {
                x: Math.max(-6, Math.min(6, translateX)),
                y: Math.max(-6, Math.min(6, translateY)),
                rotateX: Math.max(-6, Math.min(6, rotateX)),
                rotateY: Math.max(-6, Math.min(6, rotateY))
            };
            
            updateCardTransforms();
        }
    }
    
    // Initialize card interactions
    function initCardInteractions() {
        whyElements.cards.forEach((card, index) => {
            card.addEventListener('mouseenter', () => {
                whyData.hoveredCard = index;
                updateCardClasses();
            });
            
            card.addEventListener('mouseleave', () => {
                whyData.hoveredCard = null;
                whyData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
                updateCardTransforms();
                updateCardClasses();
            });
        });
    }
    
    // Update card transforms based on mouse position
    function updateCardTransforms() {
        whyElements.cards.forEach((card, index) => {
            if (index === whyData.hoveredCard) {
                const { x, y, rotateX, rotateY } = whyData.mousePosition;
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateX(${x}px) translateY(${y}px) scale(1.02)`;
            } else {
                card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)`;
            }
        });
    }
    
    // Update card hover classes
    function updateCardClasses() {
        whyElements.cards.forEach((card, index) => {
            if (index === whyData.hoveredCard) {
                card.classList.add('why-card-hovered');
            } else {
                card.classList.remove('why-card-hovered');
            }
        });
    }
    
    // Cleanup function
    function cleanup() {
        if (whyData.rafId) {
            cancelAnimationFrame(whyData.rafId);
            whyData.rafId = null;
        }
        
        // Remove event listeners
        if (whyElements.section) {
            whyElements.section.removeEventListener('mousemove', () => {});
            whyElements.section.removeEventListener('mouseleave', () => {});
        }
        
        whyElements.cards.forEach(card => {
            card.removeEventListener('mouseenter', () => {});
            card.removeEventListener('mouseleave', () => {});
        });
    }
    
    // Handle reduced motion preference
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (prefersReducedMotion) {
            // Disable all transforms and transitions
            whyElements.cards.forEach(card => {
                card.style.transform = 'none !important';
                card.style.transition = 'none !important';
            });
            
            if (whyElements.textContent) {
                whyElements.textContent.style.opacity = '1';
                whyElements.textContent.style.transform = 'translateY(0)';
            }
            
            if (whyElements.cardsContainer) {
                whyElements.cardsContainer.style.opacity = '1';
                whyElements.cardsContainer.style.transform = 'translateY(0)';
            }
        }
    }
    
    // Handle mobile optimization
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