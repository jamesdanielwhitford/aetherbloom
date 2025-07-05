// File: /wp-content/themes/aetherbloom/js/contact.js

/**
 * Contact Page JavaScript
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
        const contactForm = document.querySelector('.contact-form');
        const resourceForm = document.querySelector('.resource-form');
        
        if (contactForm) {
            setupContactForm(contactForm);
        }
        
        if (resourceForm) {
            setupResourceForm(resourceForm);
        }
        
        setupFormEnhancements();
    }

    /**
     * Setup main contact form
     */
    function setupContactForm(form) {
        const submitBtn = form.querySelector('.submit-btn');
        const requiredFields = form.querySelectorAll('[required]');
        
        // Form submission handler
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm(form)) {
                handleFormSubmission(form, submitBtn);
            }
        });

        // Real-time validation
        requiredFields.forEach(field => {
            field.addEventListener('blur', function() {
                validateField(this);
            });
            
            field.addEventListener('input', function() {
                clearFieldError(this);
            });
        });

        // Service selection enhancement
        const primaryService = form.querySelector('#primary_service');
        const addonServices = form.querySelector('.checkbox-group');
        
        if (primaryService && addonServices) {
            primaryService.addEventListener('change', function() {
                updateAddonServicesVisibility(this.value, addonServices);
            });
        }
    }

    /**
     * Setup resource download form
     */
    function setupResourceForm(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = form.querySelector('input[type="email"]');
            const submitBtn = form.querySelector('button');
            
            if (emailInput && emailInput.value && isValidEmail(emailInput.value)) {
                handleResourceDownload(emailInput.value, submitBtn);
            } else {
                showFieldError(emailInput, 'Please enter a valid email address');
            }
        });
    }

    /**
     * Validate entire form
     */
    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });
        
        return isValid;
    }

    /**
     * Validate individual field
     */
    function validateField(field) {
        const value = field.value.trim();
        const fieldType = field.type;
        const fieldName = field.name;
        
        // Clear previous errors
        clearFieldError(field);
        
        // Check if required field is empty
        if (field.hasAttribute('required') && !value) {
            showFieldError(field, 'This field is required');
            return false;
        }
        
        // Type-specific validation
        if (value) {
            switch (fieldType) {
                case 'email':
                    if (!isValidEmail(value)) {
                        showFieldError(field, 'Please enter a valid email address');
                        return false;
                    }
                    break;
                    
                case 'tel':
                    if (!isValidPhone(value)) {
                        showFieldError(field, 'Please enter a valid phone number');
                        return false;
                    }
                    break;
                    
                case 'url':
                    if (!isValidUrl(value)) {
                        showFieldError(field, 'Please enter a valid URL');
                        return false;
                    }
                    break;
            }
        }
        
        return true;
    }

    /**
     * Show field error
     */
    function showFieldError(field, message) {
        field.classList.add('error');
        
        // Remove existing error message
        const existingError = field.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Add new error message
        const errorElement = document.createElement('span');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        errorElement.style.color = '#d84e28';
        errorElement.style.fontSize = '0.85rem';
        errorElement.style.marginTop = '0.25rem';
        errorElement.style.display = 'block';
        
        field.parentNode.appendChild(errorElement);
    }

    /**
     * Clear field error
     */
    function clearFieldError(field) {
        field.classList.remove('error');
        
        const errorMessage = field.parentNode.querySelector('.error-message');
        if (errorMessage) {
            errorMessage.remove();
        }
    }

    /**
     * Handle form submission
     */
    function handleFormSubmission(form, submitBtn) {
        const originalText = submitBtn.textContent;
        
        // Show loading state
        submitBtn.textContent = 'Submitting...';
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.7';
        
        // Collect form data
        const formData = new FormData(form);
        const data = {};
        
        for (let [key, value] of formData.entries()) {
            if (data[key]) {
                // Handle multiple values (like checkboxes)
                if (Array.isArray(data[key])) {
                    data[key].push(value);
                } else {
                    data[key] = [data[key], value];
                }
            } else {
                data[key] = value;
            }
        }
        
        // Simulate form submission (replace with actual submission logic)
        setTimeout(() => {
            console.log('Form submitted:', data);
            
            // Show success message
            showSuccessMessage(form);
            
            // Reset form
            form.reset();
            
            // Restore button
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            
        }, 2000);
    }

    /**
     * Handle resource download
     */
    function handleResourceDownload(email, submitBtn) {
        const originalText = submitBtn.textContent;
        
        // Show loading state
        submitBtn.textContent = 'Downloading...';
        submitBtn.disabled = true;
        
        // Simulate download process
        setTimeout(() => {
            console.log('Resource download requested for:', email);
            
            // Show success message
            showNotification('Download link sent to your email!', 'success');
            
            // Restore button
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            
        }, 1500);
    }

    /**
     * Show success message
     */
    function showSuccessMessage(form) {
        const successMessage = document.createElement('div');
        successMessage.className = 'success-message';
        successMessage.innerHTML = `
            <div style="background: #4caf50; color: white; padding: 1rem; border-radius: 8px; margin-top: 1rem; text-align: center;">
                <strong>Thank you!</strong> Your message has been sent. We'll respond within 48 hours.
            </div>
        `;
        
        form.appendChild(successMessage);
        
        // Remove success message after 5 seconds
        setTimeout(() => {
            successMessage.remove();
        }, 5000);
        
        // Scroll to success message
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    /**
     * Show notification
     */
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#4caf50' : '#2196f3'};
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 10000;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.3s ease;
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 4 seconds
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => notification.remove(), 300);
        }, 4000);
    }

    /**
     * Update addon services visibility based on primary service selection
     */
    function updateAddonServicesVisibility(primaryService, addonContainer) {
        const allAddons = addonContainer.querySelectorAll('.checkbox-item');
        
        // Show/hide relevant addon services based on primary selection
        allAddons.forEach(addon => {
            const checkbox = addon.querySelector('input');
            const label = addon.querySelector('label');
            
            // Reset
            addon.style.display = 'flex';
            addon.style.opacity = '1';
            
            // Add subtle highlighting for recommended addons
            if (primaryService === 'digital_customer_success') {
                if (checkbox.value === 'virtual_admin' || checkbox.value === 'data_analysis') {
                    addon.style.background = 'rgba(76, 175, 80, 0.05)';
                    addon.style.borderRadius = '6px';
                    addon.style.padding = '0.5rem';
                }
            } else if (primaryService === 'call_centre') {
                if (checkbox.value === 'hr_support' || checkbox.value === 'virtual_admin') {
                    addon.style.background = 'rgba(76, 175, 80, 0.05)';
                    addon.style.borderRadius = '6px';
                    addon.style.padding = '0.5rem';
                }
            }
        });
    }

    /**
     * Setup form enhancements
     */
    function setupFormEnhancements() {
        // Add floating labels effect
        const formInputs = document.querySelectorAll('.form-group input, .form-group textarea, .form-group select');
        
        formInputs.forEach(input => {
            // Add floating label class when input has value
            function updateFloatingLabel() {
                const label = input.previousElementSibling;
                if (label && label.tagName === 'LABEL') {
                    if (input.value.trim() !== '' || input === document.activeElement) {
                        label.classList.add('floating');
                    } else {
                        label.classList.remove('floating');
                    }
                }
            }
            
            input.addEventListener('focus', updateFloatingLabel);
            input.addEventListener('blur', updateFloatingLabel);
            input.addEventListener('input', updateFloatingLabel);
            
            // Initial check
            updateFloatingLabel();
        });

        // Add character counter for textarea
        const messageField = document.querySelector('#message');
        if (messageField) {
            addCharacterCounter(messageField, 500);
        }

        // Add form progress indicator
        addFormProgressIndicator();
    }

    /**
     * Add character counter to textarea
     */
    function addCharacterCounter(textarea, maxLength) {
        const counter = document.createElement('div');
        counter.className = 'character-counter';
        counter.style.cssText = `
            font-size: 0.8rem;
            color: #5a6c7d;
            text-align: right;
            margin-top: 0.25rem;
        `;
        
        function updateCounter() {
            const length = textarea.value.length;
            counter.textContent = `${length}/${maxLength}`;
            
            if (length > maxLength * 0.9) {
                counter.style.color = '#d84e28';
            } else {
                counter.style.color = '#5a6c7d';
            }
        }
        
        textarea.addEventListener('input', updateCounter);
        textarea.parentNode.appendChild(counter);
        
        updateCounter();
    }

    /**
     * Add form progress indicator
     */
    function addFormProgressIndicator() {
        const form = document.querySelector('.contact-form');
        if (!form) return;
        
        const requiredFields = form.querySelectorAll('[required]');
        const progressBar = document.createElement('div');
        progressBar.className = 'form-progress';
        progressBar.style.cssText = `
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            margin-bottom: 2rem;
            overflow: hidden;
        `;
        
        const progressFill = document.createElement('div');
        progressFill.style.cssText = `
            height: 100%;
            background: linear-gradient(135deg, #d84e28, #4caf50);
            width: 0%;
            transition: width 0.3s ease;
        `;
        
        progressBar.appendChild(progressFill);
        form.insertBefore(progressBar, form.firstChild);
        
        function updateProgress() {
            let filledFields = 0;
            requiredFields.forEach(field => {
                if (field.value.trim() !== '') {
                    filledFields++;
                }
            });
            
            const progress = (filledFields / requiredFields.length) * 100;
            progressFill.style.width = progress + '%';
        }
        
        requiredFields.forEach(field => {
            field.addEventListener('input', updateProgress);
        });
        
        updateProgress();
    }

    /**
     * Validation helper functions
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isValidPhone(phone) {
        // Basic phone validation - adjust regex as needed
        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
        const cleanPhone = phone.replace(/[\s\-\(\)]/g, '');
        return phoneRegex.test(cleanPhone);
    }

    function isValidUrl(url) {
        try {
            new URL(url);
            return true;
        } catch {
            return false;
        }
    }

})();