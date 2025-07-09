// File: /wp-content/themes/aetherbloom/js/contact.js

/**
 * Contact Page JavaScript - Updated for new functionality
 * Handles contact form interactions and validations
 * 
 * @package Aetherbloom
 * @version 1.0.0
 */

(function() {
    'use strict';

    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        initContactPage();
    });

    function initContactPage() {
        setupAssessmentForm();
        setupEmailCapture();
        setupResourceDownload();
        setupFormEnhancements();
    }

    /**
     * Setup assessment form functionality
     */
    function setupAssessmentForm() {
        const assessmentForm = document.getElementById('assessment-form');
        const assessmentSuggestion = document.getElementById('assessment-suggestion');
        
        if (assessmentForm && assessmentSuggestion) {
            const radioButtons = assessmentForm.querySelectorAll('input[type="radio"]');
            
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    const challenge = assessmentForm.querySelector('input[name="challenge"]:checked')?.value;
                    const teamSize = assessmentForm.querySelector('input[name="team_size"]:checked')?.value;
                    
                    if (challenge && teamSize) {
                        showRecommendation(challenge, teamSize, assessmentSuggestion);
                    }
                });
            });
        }
    }

    /**
     * Show recommendation based on assessment
     */
    function showRecommendation(challenge, teamSize, suggestionElement) {
        let recommendation = '';
        let title = 'Perfect Match Found!';
        
        if (challenge === 'customer-support') {
            if (['1-10', '11-50'].includes(teamSize)) {
                recommendation = '<h4>Digital Customer Success - Essentials Tier</h4><p>Perfect for startups needing reliable customer support foundation. Start with 20hrs/month for £360.</p>';
            } else {
                recommendation = '<h4>Call Centre Solutions - Engagement Tier</h4><p>Full-time call coverage ideal for medium to large businesses. 40hrs/week for £1,600/month.</p>';
            }
        } else if (challenge === 'admin-tasks') {
            recommendation = '<h4>Add-On Services - Virtual Admin</h4><p>Streamline your administrative tasks with our virtual admin support starting from £8/hour.</p>';
        } else if (challenge === 'scaling-team') {
            if (teamSize === '200+') {
                recommendation = '<h4>Strategic Partnership</h4><p>Custom enterprise solutions with dedicated teams and account management for large organizations.</p>';
            } else {
                recommendation = '<h4>Digital Customer Success - Growth Tier</h4><p>Scalable solution perfect for growing businesses. 40hrs/week for £1,200/month.</p>';
            }
        } else if (challenge === 'high-costs') {
            recommendation = '<h4>Cost Optimization Assessment</h4><p>Let us analyze your current operations and show you exactly how much you can save with our solutions.</p>';
        }
        
        if (recommendation) {
            suggestionElement.innerHTML = `<h4>${title}</h4>${recommendation}`;
            suggestionElement.style.display = 'block';
            
            // Add a CTA button
            const ctaButton = document.createElement('a');
            ctaButton.href = '#main-contact-form';
            ctaButton.className = 'cta-primary';
            ctaButton.textContent = 'Get Your Custom Quote';
            ctaButton.style.marginTop = '1rem';
            ctaButton.style.display = 'inline-block';
            suggestionElement.appendChild(ctaButton);
        }
    }

    /**
     * Setup email capture functionality
     */
    function setupEmailCapture() {
        const emailInput = document.getElementById('email_capture');
        const hubspotBtn = document.querySelector('.hubspot-form-btn');
        
        if (emailInput && hubspotBtn) {
            hubspotBtn.addEventListener('click', function() {
                const email = emailInput.value.trim();
                if (validateEmail(email)) {
                    openHubSpotForm(email);
                } else {
                    showError(emailInput, 'Please enter a valid email address');
                }
            });
            
            // Clear error on input
            emailInput.addEventListener('input', function() {
                clearError(this);
            });
        }
    }

    /**
     * Setup resource download functionality
     */
    function setupResourceDownload() {
        const resourceEmail = document.getElementById('resource-email');
        const resourceBtn = document.querySelector('.resource-btn');
        
        if (resourceEmail && resourceBtn) {
            resourceBtn.addEventListener('click', function() {
                const email = resourceEmail.value.trim();
                if (validateEmail(email)) {
                    downloadResource(email);
                } else {
                    showError(resourceEmail, 'Please enter a valid email address');
                }
            });
            
            // Clear error on input
            resourceEmail.addEventListener('input', function() {
                clearError(this);
            });
        }
    }

    /**
     * Setup form enhancements
     */
    function setupFormEnhancements() {
        // Add floating labels for better UX
        const formInputs = document.querySelectorAll('.form-input, .resource-input');
        formInputs.forEach(input => {
            input.addEventListener('focus', updateFloatingLabel);
            input.addEventListener('blur', updateFloatingLabel);
            input.addEventListener('input', updateFloatingLabel);
            
            // Initial check
            updateFloatingLabel.call(input);
        });
    }

    /**
     * Update floating label state
     */
    function updateFloatingLabel() {
        const input = this;
        const hasValue = input.value.trim() !== '';
        const isFocused = document.activeElement === input;
        
        if (hasValue || isFocused) {
            input.classList.add('has-value');
        } else {
            input.classList.remove('has-value');
        }
    }

    /**
     * Validate email address
     */
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    /**
     * Show error message
     */
    function showError(input, message) {
        clearError(input);
        
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        errorElement.style.cssText = `
            color: #ff6b6b;
            font-size: 0.8rem;
            margin-top: 0.5rem;
            animation: fadeIn 0.3s ease;
        `;
        
        input.style.borderColor = '#ff6b6b';
        input.parentNode.appendChild(errorElement);
        
        // Remove error after 5 seconds
        setTimeout(() => {
            clearError(input);
        }, 5000);
    }

    /**
     * Clear error message
     */
    function clearError(input) {
        const errorElement = input.parentNode.querySelector('.error-message');
        if (errorElement) {
            errorElement.remove();
        }
        input.style.borderColor = '';
    }

    /**
     * Open HubSpot form
     */
    function openHubSpotForm(email) {
        // Replace with your actual HubSpot form URL
        const hubspotFormUrl = `https://share.hsforms.com/your-form-id?email=${encodeURIComponent(email)}`;
        window.open(hubspotFormUrl, '_blank');
        
        // Show success message
        showSuccessMessage('Assessment form will open in a new window');
    }

    /**
     * Handle resource download
     */
    function downloadResource(email) {
        // Create mailto link for resource request
        const subject = encodeURIComponent('Resource Download Request - UK Leader\'s Guide to South African Talent');
        const body = encodeURIComponent(`Please send me the UK Leader's Guide to South African Talent.\n\nEmail: ${email}\n\nThank you!`);
        const mailtoLink = `mailto:info@aetherbloom.co.uk?subject=${subject}&body=${body}`;
        
        window.location.href = mailtoLink;
        
        // Show success message
        showSuccessMessage('Resource request email has been prepared');
    }

    /**
     * Show success message
     */
    function showSuccessMessage(message) {
        const successElement = document.createElement('div');
        successElement.className = 'success-message';
        successElement.textContent = message;
        successElement.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #4CAF50;
            color: white;
            padding: 1rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            animation: slideInRight 0.3s ease;
        `;
        
        document.body.appendChild(successElement);
        
        // Remove success message after 3 seconds
        setTimeout(() => {
            successElement.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                successElement.remove();
            }, 300);
        }, 3000);
    }

    /**
     * Open calendar scheduler
     */
    window.openScheduler = function() {
        window.open('https://calendly.com/aetherbloom', '_blank');
    };

    /**
     * Handle contact button clicks
     */
    window.handleContactClick = function(type) {
        if (type === 'email') {
            window.location.href = 'mailto:info@aetherbloom.co.uk';
        } else if (type === 'appointment') {
            window.open('https://calendly.com/aetherbloom', '_blank');
        }
    };

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        
        .form-input.has-value,
        .resource-input.has-value {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
        }
        
        .error-message {
            animation: fadeIn 0.3s ease;
        }
        
        .success-message {
            animation: slideInRight 0.3s ease;
        }
    `;
    document.head.appendChild(style);

})();