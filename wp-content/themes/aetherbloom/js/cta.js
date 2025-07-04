// File: /wp-content/themes/aetherbloom/js/cta.js

(function() {
    'use strict';
    
    // Global variables for CTA functionality
    let ctaData = {
        isVisible: false,
        isHovering: false,
        mousePosition: { x: 0, y: 0, rotateX: 0, rotateY: 0 },
        formData: {
            name: '',
            email: '',
            company: '',
            message: ''
        },
        isSubmitting: false,
        ajaxUrl: '',
        nonce: ''
    };
    
    // DOM elements cache
    let ctaElements = {
        section: null,
        wrapper: null,
        form: null,
        formInputs: {
            name: null,
            email: null,
            company: null,
            message: null
        },
        submitButton: null,
        formMessages: null,
        formSuccess: null,
        formError: null
    };
    
    // Initialize CTA functionality
    function initCTA() {
        // Get data from PHP if available
        if (window.aetherbloomCTAData) {
            ctaData.ajaxUrl = window.aetherbloomCTAData.ajaxUrl;
            ctaData.nonce = window.aetherbloomCTAData.nonce;
        }
        
        // Cache DOM elements
        cacheElements();
        
        if (!ctaElements.section) {
            console.warn('CTA section not found');
            return;
        }
        
        // Initialize intersection observer
        initIntersectionObserver();
        
        // Initialize mouse tracking for form card
        initMouseTracking();
        
        // Initialize form handling
        initFormHandling();
    }
    
    // Cache all DOM elements
    function cacheElements() {
        ctaElements.section = document.querySelector('.cta-section');
        ctaElements.wrapper = document.getElementById('cta-wrapper');
        ctaElements.form = document.getElementById('contact-form');
        
        // Form inputs
        ctaElements.formInputs.name = document.getElementById('contact-name');
        ctaElements.formInputs.email = document.getElementById('contact-email');
        ctaElements.formInputs.company = document.getElementById('contact-company');
        ctaElements.formInputs.message = document.getElementById('contact-message');
        
        ctaElements.submitButton = document.getElementById('contact-submit');
        ctaElements.formMessages = document.getElementById('form-messages');
        ctaElements.formSuccess = document.getElementById('form-success');
        ctaElements.formError = document.getElementById('form-error');
    }
    
    // Setup intersection observer for section visibility
    function initIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '-50px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                ctaData.isVisible = entry.isIntersecting;
                updateSectionVisibility();
            });
        }, observerOptions);
        
        observer.observe(ctaElements.section);
    }
    
    // Update section visibility classes
    function updateSectionVisibility() {
        if (ctaElements.wrapper) {
            if (ctaData.isVisible) {
                ctaElements.wrapper.classList.add('visible');
            } else {
                ctaElements.wrapper.classList.remove('visible');
            }
        }
    }
    
    // Initialize mouse tracking for form card 3D effects
    function initMouseTracking() {
        const handleMouseMove = (e) => {
            if (ctaElements.form && ctaElements.section) {
                const section = ctaElements.section;
                const card = ctaElements.form;
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
                
                ctaData.mousePosition = {
                    x: translateX,
                    y: translateY,
                    rotateX: Math.max(-10, Math.min(10, rotateX)),
                    rotateY: Math.max(-10, Math.min(10, rotateY))
                };
                
                updateCardTransform();
            }
        };
        
        const handleMouseEnter = () => {
            ctaData.isHovering = true;
        };
        
        const handleMouseLeave = () => {
            ctaData.isHovering = false;
            ctaData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
            updateCardTransform();
        };
        
        if (ctaElements.section) {
            ctaElements.section.addEventListener('mousemove', handleMouseMove);
            ctaElements.section.addEventListener('mouseenter', handleMouseEnter);
            ctaElements.section.addEventListener('mouseleave', handleMouseLeave);
        }
    }
    
    // Update form card transform based on mouse position
    function updateCardTransform() {
        if (!ctaElements.form) return;
        
        const transform = getCardTransform();
        const transition = ctaData.isHovering ? 
            'transform 0.1s ease-out' : 
            'transform 0.3s ease-out';
        
        ctaElements.form.style.transform = transform;
        ctaElements.form.style.transition = transition;
    }
    
    // Calculate transform string for the form card
    function getCardTransform() {
        if (!ctaData.isHovering) {
            return 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
        }
        
        const { x, y, rotateX, rotateY } = ctaData.mousePosition;
        return `perspective(1000px) rotateX(${rotateX || 0}deg) rotateY(${rotateY || 0}deg) translateX(${x || 0}px) translateY(${y || 0}px) scale(1.02)`;
    }
    
    // Initialize form handling
    function initFormHandling() {
        if (!ctaElements.form) return;
        
        // Add input event listeners for form data tracking
        Object.keys(ctaElements.formInputs).forEach(key => {
            const input = ctaElements.formInputs[key];
            if (input) {
                input.addEventListener('input', (e) => {
                    ctaData.formData[key] = e.target.value;
                });
            }
        });
        
        // Add form submit handler
        ctaElements.form.addEventListener('submit', handleFormSubmit);
    }
    
    // Handle form submission
    function handleFormSubmit(e) {
        e.preventDefault();
        
        if (ctaData.isSubmitting) return;
        
        // Validate form
        if (!validateForm()) {
            showFormError('Please fill in all required fields.');
            return;
        }
        
        // Start submission
        ctaData.isSubmitting = true;
        updateSubmitButton(true);
        hideFormMessages();
        
        // Prepare form data
        const formData = new FormData(ctaElements.form);
        
        // Send AJAX request
        fetch(ctaData.ajaxUrl, {
            method: 'POST',
            body: formData,
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showFormSuccess();
                resetForm();
            } else {
                showFormError(data.data || 'An error occurred. Please try again.');
            }
        })
        .catch(error => {
            console.error('Form submission error:', error);
            showFormError('Network error. Please check your connection and try again.');
        })
        .finally(() => {
            ctaData.isSubmitting = false;
            updateSubmitButton(false);
        });
    }
    
    // Validate form fields
    function validateForm() {
        const requiredFields = ['name', 'email', 'company', 'message'];
        
        for (let field of requiredFields) {
            const input = ctaElements.formInputs[field];
            if (!input || !input.value.trim()) {
                return false;
            }
        }
        
        // Basic email validation
        const emailInput = ctaElements.formInputs.email;
        if (emailInput) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value.trim())) {
                return false;
            }
        }
        
        return true;
    }
    
    // Update submit button state
    function updateSubmitButton(isSubmitting) {
        if (!ctaElements.submitButton) return;
        
        const buttonText = ctaElements.submitButton.querySelector('.button-text');
        
        if (isSubmitting) {
            ctaElements.submitButton.disabled = true;
            ctaElements.submitButton.classList.add('submitting');
            if (buttonText) {
                buttonText.textContent = 'Sending...';
            }
        } else {
            ctaElements.submitButton.disabled = false;
            ctaElements.submitButton.classList.remove('submitting');
            if (buttonText) {
                buttonText.textContent = 'Claim Your Free Session';
            }
        }
    }
    
    // Show form success message
    function showFormSuccess() {
        if (ctaElements.formMessages && ctaElements.formSuccess) {
            ctaElements.formMessages.style.display = 'block';
            ctaElements.formSuccess.style.display = 'block';
            ctaElements.formError.style.display = 'none';
        }
    }
    
    // Show form error message
    function showFormError(message) {
        if (ctaElements.formMessages && ctaElements.formError) {
            ctaElements.formMessages.style.display = 'block';
            ctaElements.formError.style.display = 'block';
            ctaElements.formSuccess.style.display = 'none';
            ctaElements.formError.textContent = message;
        }
    }
    
    // Hide form messages
    function hideFormMessages() {
        if (ctaElements.formMessages) {
            ctaElements.formMessages.style.display = 'none';
        }
    }
    
    // Reset form
    function resetForm() {
        if (ctaElements.form) {
            ctaElements.form.reset();
        }
        
        // Clear form data
        Object.keys(ctaData.formData).forEach(key => {
            ctaData.formData[key] = '';
        });
    }
    
    // Cleanup function
    function cleanup() {
        // Reset form transform
        if (ctaElements.form) {
            ctaElements.form.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1)';
        }
        
        ctaData.isHovering = false;
        ctaData.mousePosition = { x: 0, y: 0, rotateX: 0, rotateY: 0 };
    }
    
    // Handle reduced motion preference
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (prefersReducedMotion && ctaElements.form) {
            ctaElements.form.style.transform = 'none';
            ctaElements.form.style.transition = 'none';
        }
    }
    
    // Handle mobile devices (disable 3D effects for performance)
    function handleMobileOptimization() {
        const isMobile = window.innerWidth <= 768;
        
        if (isMobile && ctaElements.form) {
            ctaElements.form.style.transform = 'none !important';
            ctaElements.form.style.transition = 'all 0.3s ease !important';
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCTA);
    } else {
        initCTA();
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
    window.aetherbloomCTA = {
        init: initCTA,
        cleanup: cleanup,
        submitForm: () => handleFormSubmit({ preventDefault: () => {} }),
        resetForm: resetForm
    };
    
})();