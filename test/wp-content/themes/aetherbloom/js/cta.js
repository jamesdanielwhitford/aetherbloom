// File: /wp-content/themes/aetherbloom/js/cta.js

(function() {
    'use strict';
    
    // Global variables for CTA functionality
    let ctaData = {
        isVisible: false,
        isHovering: false,
        mousePosition: { x: 0, y: 0, rotateX: 0, rotateY: 0 },
        formData: {
            company: '',
            firstname: '',
            lastname: '',
            email: '',
            phone: '',
            primary_service: '',
            addon_services: []
        },
        isSubmitting: false,
        ajaxUrl: '',
        nonce: '',
        currentStep: 1,
        totalSteps: 3
    };
    
    // DOM elements cache
    let ctaElements = {
        section: null,
        wrapper: null,
        form: null,
        steps: [],
        stepIndicators: [],
        stepConnectors: [],
        formInputs: {
            company: null,
            firstname: null,
            lastname: null,
            email: null,
            phone: null,
            primary_service: null,
            addon_services: []
        },
        navigationButtons: {
            previous: null,
            next: null,
            submit: null
        },
        formMessages: null,
        formSuccess: null,
        formError: null,
        formLoading: null
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
        
        // Initialize multi-step form handling
        initMultiStepForm();
        
        // Initialize form validation
        initFormValidation();
    }
    
    // Cache all DOM elements
    function cacheElements() {
        ctaElements.section = document.querySelector('.cta-section');
        ctaElements.wrapper = document.getElementById('cta-wrapper');
        ctaElements.form = document.getElementById('contact-form');
        
        // Form steps
        ctaElements.steps = document.querySelectorAll('.form-step');
        ctaElements.stepIndicators = document.querySelectorAll('.step-indicator');
        ctaElements.stepConnectors = document.querySelectorAll('.step-connector');
        
        // Form inputs
        ctaElements.formInputs.company = document.getElementById('company-name');
        ctaElements.formInputs.firstname = document.getElementById('first-name');
        ctaElements.formInputs.lastname = document.getElementById('last-name');
        ctaElements.formInputs.email = document.getElementById('contact-email');
        ctaElements.formInputs.phone = document.getElementById('phone-number');
        ctaElements.formInputs.primary_service = document.getElementById('primary-service');
        ctaElements.formInputs.addon_services = document.querySelectorAll('input[name="addon_services"]');
        
        // Navigation buttons (will be found dynamically per step)
        ctaElements.navigationButtons.submit = document.getElementById('contact-submit');
        
        // Message elements
        ctaElements.formMessages = document.getElementById('form-messages');
        ctaElements.formSuccess = document.getElementById('form-success');
        ctaElements.formError = document.getElementById('form-error');
        ctaElements.formLoading = document.getElementById('form-loading');
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
                const rotateX = (deltaY / cardRect.height) * -10;
                const rotateY = (deltaX / cardRect.width) * 10;
                const translateX = (deltaX / cardRect.width) * 10;
                const translateY = (deltaY / cardRect.height) * 10;
                
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
    
    // Initialize multi-step form functionality
    function initMultiStepForm() {
        if (!ctaElements.form) return;
        
        // Show first step
        showStep(1);
        
        // Add navigation event listeners for each step
        // Step 1 -> 2
        const btnNext1 = document.getElementById('btn-next-1');
        if (btnNext1) {
            btnNext1.addEventListener('click', (e) => {
                e.preventDefault();
                nextStep();
            });
        }
        
        // Step 2 navigation
        const btnPrevious2 = document.getElementById('btn-previous-2');
        const btnNext2 = document.getElementById('btn-next-2');
        
        if (btnPrevious2) {
            btnPrevious2.addEventListener('click', (e) => {
                e.preventDefault();
                previousStep();
            });
        }
        
        if (btnNext2) {
            btnNext2.addEventListener('click', (e) => {
                e.preventDefault();
                nextStep();
            });
        }
        
        // Step 3 navigation
        const btnPrevious3 = document.getElementById('btn-previous-3');
        
        if (btnPrevious3) {
            btnPrevious3.addEventListener('click', (e) => {
                e.preventDefault();
                previousStep();
            });
        }
        
        // Add form submit handler
        if (ctaElements.navigationButtons.submit) {
            ctaElements.navigationButtons.submit.addEventListener('click', handleFormSubmit);
        }
        
        // Add input event listeners for form data tracking
        Object.keys(ctaElements.formInputs).forEach(key => {
            const input = ctaElements.formInputs[key];
            if (input) {
                if (key === 'addon_services') {
                    // Handle checkboxes
                    input.forEach(checkbox => {
                        checkbox.addEventListener('change', updateFormData);
                    });
                } else {
                    input.addEventListener('input', updateFormData);
                }
            }
        });
    }
    
    // Update form data from inputs
    function updateFormData() {
        // Update regular inputs
        Object.keys(ctaElements.formInputs).forEach(key => {
            const input = ctaElements.formInputs[key];
            if (input && key !== 'addon_services') {
                ctaData.formData[key] = input.value;
            }
        });
        
        // Update addon services (checkboxes)
        const addonServices = [];
        ctaElements.formInputs.addon_services.forEach(checkbox => {
            if (checkbox.checked) {
                addonServices.push(checkbox.value);
            }
        });
        ctaData.formData.addon_services = addonServices;
    }
    
    // Show specific step
    function showStep(stepNumber) {
        ctaData.currentStep = stepNumber;
        
        // Hide all steps
        ctaElements.steps.forEach((step, index) => {
            step.classList.remove('active');
            setTimeout(() => {
                step.style.display = 'none';
            }, 300);
        });
        
        // Show current step
        setTimeout(() => {
            if (ctaElements.steps[stepNumber - 1]) {
                ctaElements.steps[stepNumber - 1].style.display = 'block';
                setTimeout(() => {
                    ctaElements.steps[stepNumber - 1].classList.add('active');
                }, 50);
            }
        }, 300);
        
        // Update step indicators
        updateStepIndicators();
        
        // Update navigation buttons
        updateNavigationButtons();
    }
    
    // Update step indicators
    function updateStepIndicators() {
        ctaElements.stepIndicators.forEach((indicator, index) => {
            const stepNumber = index + 1;
            
            indicator.classList.remove('active', 'completed');
            
            if (stepNumber === ctaData.currentStep) {
                indicator.classList.add('active');
            } else if (stepNumber < ctaData.currentStep) {
                indicator.classList.add('completed');
                indicator.innerHTML = '✓';
            } else {
                indicator.innerHTML = stepNumber;
            }
        });
        
        // Update connectors
        ctaElements.stepConnectors.forEach((connector, index) => {
            if (index + 1 < ctaData.currentStep) {
                connector.classList.add('completed');
            } else {
                connector.classList.remove('completed');
            }
        });
    }
    
    // Update navigation buttons visibility
    function updateNavigationButtons() {
        // Previous buttons
        const btnPrevious2 = document.getElementById('btn-previous-2');
        const btnPrevious3 = document.getElementById('btn-previous-3');
        
        // Next buttons  
        const btnNext1 = document.getElementById('btn-next-1');
        const btnNext2 = document.getElementById('btn-next-2');
        
        // Submit button
        const submitBtn = document.getElementById('contact-submit');
        
        // Hide all buttons first
        [btnPrevious2, btnPrevious3, btnNext1, btnNext2, submitBtn].forEach(btn => {
            if (btn) btn.style.display = 'none';
        });
        
        // Show appropriate buttons based on current step
        if (ctaData.currentStep === 1) {
            if (btnNext1) btnNext1.style.display = 'flex';
        } else if (ctaData.currentStep === 2) {
            if (btnPrevious2) btnPrevious2.style.display = 'flex';
            if (btnNext2) btnNext2.style.display = 'flex';
        } else if (ctaData.currentStep === 3) {
            if (btnPrevious3) btnPrevious3.style.display = 'flex';
            if (submitBtn) submitBtn.style.display = 'flex';
        }
    }
    
    // Go to next step
    function nextStep() {
        if (!validateCurrentStep()) {
            return;
        }
        
        if (ctaData.currentStep < ctaData.totalSteps) {
            showStep(ctaData.currentStep + 1);
        }
    }
    
    // Go to previous step
    function previousStep() {
        if (ctaData.currentStep > 1) {
            showStep(ctaData.currentStep - 1);
        }
    }
    
    // Validate current step
    function validateCurrentStep() {
        hideFormMessages();
        
        switch (ctaData.currentStep) {
            case 1:
                return validateStep1();
            case 2:
                return validateStep2();
            case 3:
                return true; // No validation needed for final step
            default:
                return true;
        }
    }
    
    // Validate step 1 (contact details)
    function validateStep1() {
        const requiredFields = ['company', 'firstname', 'lastname', 'email'];
        const emptyFields = [];
        
        requiredFields.forEach(field => {
            const input = ctaElements.formInputs[field];
            if (!input || !input.value.trim()) {
                emptyFields.push(field);
                if (input) {
                    input.style.borderColor = '#ff6b6b';
                }
            } else {
                if (input) {
                    input.style.borderColor = '';
                }
            }
        });
        
        // Email validation
        const emailInput = ctaElements.formInputs.email;
        if (emailInput && emailInput.value.trim()) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value.trim())) {
                emailInput.style.borderColor = '#ff6b6b';
                showFormError('Please enter a valid email address.');
                return false;
            }
        }
        
        if (emptyFields.length > 0) {
            showFormError('Please fill in all required fields.');
            return false;
        }
        
        return true;
    }
    
    // Validate step 2 (service selection)
    function validateStep2() {
        const primaryServiceInput = ctaElements.formInputs.primary_service;
        
        if (!primaryServiceInput || !primaryServiceInput.value.trim()) {
            primaryServiceInput.style.borderColor = '#ff6b6b';
            showFormError('Please select a primary service.');
            return false;
        } else {
            primaryServiceInput.style.borderColor = '';
        }
        
        return true;
    }
    
    // Initialize form validation
    function initFormValidation() {
        // Clear validation styling on input
        Object.keys(ctaElements.formInputs).forEach(key => {
            const input = ctaElements.formInputs[key];
            if (input && key !== 'addon_services') {
                input.addEventListener('input', () => {
                    input.style.borderColor = '';
                    hideFormMessages();
                });
            }
        });
    }
    
    // Handle form submission
    function handleFormSubmit(e) {
        e.preventDefault();
        
        if (ctaData.isSubmitting) return;
        
        // Final validation
        updateFormData();
        if (!validateCurrentStep()) {
            return;
        }
        
        // Start submission
        ctaData.isSubmitting = true;
        updateSubmitButton(true);
        hideFormMessages();
        showLoading();
        
        // Prepare data for HubSpot
        const hubspotData = {
            "fields": [
                {
                    "name": "company",
                    "value": ctaData.formData.company || ''
                },
                {
                    "name": "firstname", 
                    "value": ctaData.formData.firstname || ''
                },
                {
                    "name": "lastname",
                    "value": ctaData.formData.lastname || ''
                },
                {
                    "name": "email",
                    "value": ctaData.formData.email || ''
                },
                {
                    "name": "phone",
                    "value": ctaData.formData.phone || ''
                },
                {
                    "name": "primary_service",
                    "value": ctaData.formData.primary_service || ''
                },
                {
                    "name": "addon_services",
                    "value": ctaData.formData.addon_services.join('; ')
                }
            ],
            "context": {
                "pageUri": window.location.href,
                "pageName": document.title,
                "pageId": "cta-form"
            }
        };
        
        // Your HubSpot details
        const portalId = "145903429";
        const formId = "d38ffeaa-6505-4879-ac11-27619fdbb1d0";
        
        // HubSpot API endpoint
        const apiUrl = `https://api.hubapi.com/submissions/v3/integration/submit/${portalId}/${formId}`;
        
        // Submit to HubSpot
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(hubspotData)
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Network response was not ok');
        })
        .then(data => {
            console.log('HubSpot submission success:', data);
            showFormSuccess();
            
            // Redirect to calendar after 2 seconds
            setTimeout(() => {
                // Replace with your actual calendar booking URL
                window.location.href = 'https://meetings.hubspot.com/your-calendar-link';
            }, 2000);
        })
        .catch(error => {
            console.error('HubSpot submission error:', error);
            showFormError('Something went wrong. Please try again.');
        })
        .finally(() => {
            ctaData.isSubmitting = false;
            updateSubmitButton(false);
            hideLoading();
        });
    }
    
    // Update submit button state
    function updateSubmitButton(isSubmitting) {
        if (!ctaElements.navigationButtons.submit) return;
        
        const buttonText = ctaElements.navigationButtons.submit.querySelector('.cta-button-text');
        
        if (isSubmitting) {
            ctaElements.navigationButtons.submit.disabled = true;
            ctaElements.navigationButtons.submit.classList.add('submitting');
            if (buttonText) {
                buttonText.textContent = 'Submitting...';
            }
        } else {
            ctaElements.navigationButtons.submit.disabled = false;
            ctaElements.navigationButtons.submit.classList.remove('submitting');
            if (buttonText) {
                buttonText.textContent = 'Request My Free Assessment';
            }
        }
    }
    
    // Show loading state
    function showLoading() {
        if (ctaElements.formLoading) {
            ctaElements.formLoading.style.display = 'block';
        }
    }
    
    // Hide loading state
    function hideLoading() {
        if (ctaElements.formLoading) {
            ctaElements.formLoading.style.display = 'none';
        }
    }
    
    // Show form success message
    function showFormSuccess() {
        if (ctaElements.formSuccess) {
            ctaElements.formSuccess.style.display = 'block';
            if (ctaElements.formError) {
                ctaElements.formError.style.display = 'none';
            }
        }
    }
    
    // Show form error message
    function showFormError(message) {
        if (ctaElements.formError) {
            ctaElements.formError.style.display = 'block';
            ctaElements.formError.textContent = message;
            if (ctaElements.formSuccess) {
                ctaElements.formSuccess.style.display = 'none';
            }
        }
    }
    
    // Hide form messages
    function hideFormMessages() {
        if (ctaElements.formSuccess) {
            ctaElements.formSuccess.style.display = 'none';
        }
        if (ctaElements.formError) {
            ctaElements.formError.style.display = 'none';
        }
    }
    
    // Reset form
    function resetForm() {
        if (ctaElements.form) {
            ctaElements.form.reset();
        }
        
        // Clear form data
        Object.keys(ctaData.formData).forEach(key => {
            if (key === 'addon_services') {
                ctaData.formData[key] = [];
            } else {
                ctaData.formData[key] = '';
            }
        });
        
        // Reset to first step
        showStep(1);
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
        nextStep: nextStep,
        previousStep: previousStep,
        showStep: showStep,
        resetForm: resetForm,
        getCurrentStep: () => ctaData.currentStep
    };
    
})();