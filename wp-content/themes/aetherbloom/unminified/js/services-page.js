// File: /wp-content/themes/aetherbloom/unminified/js/services-page.js

document.addEventListener('DOMContentLoaded', function() {
    console.log('Services page specific JavaScript loaded and executing.');

    /**
     * Sticky Hover Effect for Service Grids
     * Ensures one card in each specified grid is always active, defaulting to the center card.
     */
    const initializeStickyHover = (gridElement, index) => {
        const cards = gridElement.querySelectorAll('.service-tier'); // Target only service tiers
        if (cards.length === 0) {
            return; // No service tiers in this grid, do nothing.
        }

        // Set the middle card as active by default
        const middleIndex = Math.floor(cards.length / 2);
        cards[middleIndex].classList.add('active');
        console.log(`Initialized sticky hover for grid ${index + 1}, activated middle card (index ${middleIndex}).`);

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Remove active class from all sibling cards within the same grid
                cards.forEach(c => c.classList.remove('active'));
                // Add active class to the currently hovered card
                card.classList.add('active');
            });
        });
    };

    // Initialize the effect only for the main service grids
    const serviceGrids = document.querySelectorAll('.services-grid');
    serviceGrids.forEach(initializeStickyHover);

    /**
     * Standard Hover Effect for Add-on Cards
     * A simple transform effect on mouseenter/mouseleave.
     */
    const addonCards = document.querySelectorAll('.addon-card');
    addonCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-5px)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });


    /**
     * Smooth scrolling for in-page anchor links
     */
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            // Ensure it's a valid in-page link
            if (targetId.length > 1 && targetId.startsWith('#')) {
                const targetElement = document.getElementById(targetId.substring(1));
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    /**
     * Reveal and pre-populate the assessment form
     */
    const assessmentFormContainer = document.getElementById('assessment-form-container');
    const revealTriggers = document.querySelectorAll('.reveal-assessment-trigger');

    if (revealTriggers.length > 0 && assessmentFormContainer) {
        revealTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                const service = this.getAttribute('data-service');
                assessmentFormContainer.style.display = 'block';
                assessmentFormContainer.scrollIntoView({ behavior: 'smooth' });

                // Pre-populate the form fields
                const serviceDropdown = assessmentFormContainer.querySelector('#cta-service-dropdown-trigger');
                const serviceInput = assessmentFormContainer.querySelector('#primary-service');
                const serviceLabel = assessmentFormContainer.querySelector('#cta-service-label');

                if (serviceDropdown && serviceInput && serviceLabel) {
                    serviceInput.value = service;
                    serviceLabel.textContent = service;
                }
            });
        });
    }
});