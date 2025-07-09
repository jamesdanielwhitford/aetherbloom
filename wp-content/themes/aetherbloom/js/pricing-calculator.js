// File: /wp-content/themes/aetherbloom/js/pricing-calculator.js

(function() {
    'use strict';
    
    // Global variables for pricing calculator functionality
    let pricingData = {
        roleOptions: [],
        tierOptions: [],
        selectedRole: 'Customer Service Representative',
        selectedTier: 'enterprise',
        isRoleDropdownOpen: false,
        isTierDropdownOpen: false,
        isVisible: false
    };
    
    // DOM elements cache
    let pricingElements = {
        section: null,
        wrapper: null,
        
        // Role dropdown elements
        roleDropdown: null,
        roleDropdownTrigger: null,
        roleDropdownMenu: null,
        roleLabel: null,
        roleArrow: null,
        roleOptions: [],
        
        // Tier dropdown elements
        tierDropdown: null,
        tierDropdownTrigger: null,
        tierDropdownMenu: null,
        tierLabel: null,
        tierArrow: null,
        tierOptions: [],
        
        // UK cost display elements
        ukBaseSalary: null,
        ukEmployerNi: null,
        ukPension: null,
        ukHoliday: null,
        ukTraining: null,
        ukOffice: null,
        ukEquipment: null,
        ukInsurance: null,
        ukTotalCost: null,
        
        // Aetherbloom cost display elements
        aetherbloomServiceFee: null,
        aetherbloomTotalCost: null,
        savingsAmount: null,
        savingsPercentage: null
    };
    
    // Initialize pricing calculator functionality
    function initPricingCalculator() {
        // Get data from PHP if available
        if (window.aetherbloomPricingData) {
            pricingData.roleOptions = window.aetherbloomPricingData.roleOptions;
            pricingData.tierOptions = window.aetherbloomPricingData.tierOptions;
            pricingData.selectedRole = window.aetherbloomPricingData.defaultRole;
            pricingData.selectedTier = window.aetherbloomPricingData.defaultTier;
        }
        
        // Cache DOM elements
        cacheElements();
        
        if (!pricingElements.section) {
            console.warn('Pricing calculator section not found');
            return;
        }
        
        // Initialize intersection observer
        initIntersectionObserver();
        
        // Initialize dropdown functionality
        initDropdowns();
        
        // Initialize click outside handling
        initClickOutsideHandling();
        
        // Update initial calculations
        updateCalculations();
    }
    
    // Cache all DOM elements
    function cacheElements() {
        pricingElements.section = document.querySelector('.calculator-section');
        pricingElements.wrapper = document.getElementById('calculator-wrapper');
        
        // Role dropdown elements
        pricingElements.roleDropdown = document.getElementById('role-dropdown');
        pricingElements.roleDropdownTrigger = document.getElementById('role-dropdown-trigger');
        pricingElements.roleDropdownMenu = document.getElementById('role-dropdown-menu');
        pricingElements.roleLabel = document.getElementById('role-label');
        pricingElements.roleArrow = document.getElementById('role-arrow');
        pricingElements.roleOptions = Array.from(document.querySelectorAll('#role-dropdown-menu .dropdown-option'));
        
        // Tier dropdown elements
        pricingElements.tierDropdown = document.getElementById('tier-dropdown');
        pricingElements.tierDropdownTrigger = document.getElementById('tier-dropdown-trigger');
        pricingElements.tierDropdownMenu = document.getElementById('tier-dropdown-menu');
        pricingElements.tierLabel = document.getElementById('tier-label');
        pricingElements.tierArrow = document.getElementById('tier-arrow');
        pricingElements.tierOptions = Array.from(document.querySelectorAll('#tier-dropdown-menu .dropdown-option'));
        
        // UK cost display elements
        pricingElements.ukBaseSalary = document.getElementById('uk-base-salary');
        pricingElements.ukEmployerNi = document.getElementById('uk-employer-ni');
        pricingElements.ukPension = document.getElementById('uk-pension');
        pricingElements.ukHoliday = document.getElementById('uk-holiday');
        pricingElements.ukTraining = document.getElementById('uk-training');
        pricingElements.ukOffice = document.getElementById('uk-office');
        pricingElements.ukEquipment = document.getElementById('uk-equipment');
        pricingElements.ukInsurance = document.getElementById('uk-insurance');
        pricingElements.ukTotalCost = document.getElementById('uk-total-cost');
        
        // Aetherbloom cost display elements
        pricingElements.aetherbloomServiceFee = document.getElementById('aetherbloom-service-fee');
        pricingElements.aetherbloomTotalCost = document.getElementById('aetherbloom-total-cost');
        pricingElements.savingsAmount = document.getElementById('savings-amount');
        pricingElements.savingsPercentage = document.getElementById('savings-percentage');
    }
    
    // Setup intersection observer for section visibility
    function initIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '-50px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                pricingData.isVisible = entry.isIntersecting;
                updateSectionVisibility();
            });
        }, observerOptions);
        
        observer.observe(pricingElements.section);
    }
    
    // Update section visibility classes
    function updateSectionVisibility() {
        if (pricingElements.wrapper) {
            if (pricingData.isVisible) {
                pricingElements.wrapper.classList.add('visible');
            } else {
                pricingElements.wrapper.classList.remove('visible');
            }
        }
    }
    
    // Initialize dropdown functionality
    function initDropdowns() {
        // Role dropdown
        if (pricingElements.roleDropdownTrigger) {
            pricingElements.roleDropdownTrigger.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                toggleRoleDropdown();
            });
        }
        
        // Role options - FIXED: Use correct data attribute
        pricingElements.roleOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const roleName = e.currentTarget.dataset.role; // Changed from dataset.roleName
                selectRole(roleName);
                closeRoleDropdown();
            });
        });
        
        // Tier dropdown
        if (pricingElements.tierDropdownTrigger) {
            pricingElements.tierDropdownTrigger.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                toggleTierDropdown();
            });
        }
        
        // Tier options - FIXED: Use correct data attribute
        pricingElements.tierOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const tierId = e.currentTarget.dataset.tier; // Changed from dataset.tierId
                selectTier(tierId);
                closeTierDropdown();
            });
        });
    }
    
    // Initialize click outside handling
    function initClickOutsideHandling() {
        document.addEventListener('click', (e) => {
            // Check if click is outside role dropdown
            if (pricingElements.roleDropdown && !pricingElements.roleDropdown.contains(e.target)) {
                closeRoleDropdown();
            }
            
            // Check if click is outside tier dropdown
            if (pricingElements.tierDropdown && !pricingElements.tierDropdown.contains(e.target)) {
                closeTierDropdown();
            }
        });
    }
    
    // Role dropdown functions
    function toggleRoleDropdown() {
        if (pricingData.isRoleDropdownOpen) {
            closeRoleDropdown();
        } else {
            // Close tier dropdown if open
            closeTierDropdown();
            openRoleDropdown();
        }
    }
    
    function openRoleDropdown() {
        pricingData.isRoleDropdownOpen = true;
        if (pricingElements.roleDropdownMenu) {
            pricingElements.roleDropdownMenu.style.display = 'block';
            // Force reflow to ensure proper positioning
            pricingElements.roleDropdownMenu.offsetHeight;
        }
        if (pricingElements.roleArrow) {
            pricingElements.roleArrow.classList.add('open');
        }
        if (pricingElements.roleDropdownTrigger) {
            pricingElements.roleDropdownTrigger.setAttribute('aria-expanded', 'true');
        }
    }
    
    function closeRoleDropdown() {
        pricingData.isRoleDropdownOpen = false;
        if (pricingElements.roleDropdownMenu) {
            pricingElements.roleDropdownMenu.style.display = 'none';
        }
        if (pricingElements.roleArrow) {
            pricingElements.roleArrow.classList.remove('open');
        }
        if (pricingElements.roleDropdownTrigger) {
            pricingElements.roleDropdownTrigger.setAttribute('aria-expanded', 'false');
        }
    }
    
    // Tier dropdown functions
    function toggleTierDropdown() {
        if (pricingData.isTierDropdownOpen) {
            closeTierDropdown();
        } else {
            // Close role dropdown if open
            closeRoleDropdown();
            openTierDropdown();
        }
    }
    
    function openTierDropdown() {
        pricingData.isTierDropdownOpen = true;
        if (pricingElements.tierDropdownMenu) {
            pricingElements.tierDropdownMenu.style.display = 'block';
            // Force reflow to ensure proper positioning
            pricingElements.tierDropdownMenu.offsetHeight;
        }
        if (pricingElements.tierArrow) {
            pricingElements.tierArrow.classList.add('open');
        }
        if (pricingElements.tierDropdownTrigger) {
            pricingElements.tierDropdownTrigger.setAttribute('aria-expanded', 'true');
        }
    }
    
    function closeTierDropdown() {
        pricingData.isTierDropdownOpen = false;
        if (pricingElements.tierDropdownMenu) {
            pricingElements.tierDropdownMenu.style.display = 'none';
        }
        if (pricingElements.tierArrow) {
            pricingElements.tierArrow.classList.remove('open');
        }
        if (pricingElements.tierDropdownTrigger) {
            pricingElements.tierDropdownTrigger.setAttribute('aria-expanded', 'false');
        }
    }
    
    // Selection functions - FIXED: Better data handling
    function selectRole(roleName) {
        if (!roleName) return;
        
        pricingData.selectedRole = roleName;
        
        // Update label
        if (pricingElements.roleLabel) {
            pricingElements.roleLabel.textContent = roleName;
        }
        
        // Update option states
        pricingElements.roleOptions.forEach(option => {
            if (option.dataset.role === roleName) {
                option.classList.add('selected');
            } else {
                option.classList.remove('selected');
            }
        });
        
        // Update calculations
        updateCalculations();
    }
    
    function selectTier(tierId) {
        if (!tierId) return;
        
        pricingData.selectedTier = tierId;
        
        // Find tier data from options in DOM
        const tierOption = pricingElements.tierOptions.find(option => option.dataset.tier === tierId);
        
        if (tierOption && pricingElements.tierLabel) {
            const tierName = tierOption.querySelector('.option-name')?.textContent || tierId;
            pricingElements.tierLabel.textContent = tierName;
        }
        
        // Update option states
        pricingElements.tierOptions.forEach(option => {
            if (option.dataset.tier === tierId) {
                option.classList.add('selected');
            } else {
                option.classList.remove('selected');
            }
        });
        
        // Update calculations
        updateCalculations();
    }
    
    // Update all calculations and display
    function updateCalculations() {
        // Get selected role data from DOM
        const selectedRoleOption = pricingElements.roleOptions.find(option => 
            option.dataset.role === pricingData.selectedRole
        );
        
        // Get selected tier data from DOM
        const selectedTierOption = pricingElements.tierOptions.find(option => 
            option.dataset.tier === pricingData.selectedTier
        );
        
        if (!selectedRoleOption || !selectedTierOption) {
            return;
        }
        
        const baseSalary = parseInt(selectedRoleOption.dataset.salary) || 26000;
        const aetherbloomCost = parseInt(selectedTierOption.dataset.cost) || 8760;
        
        // Calculate UK costs
        const ukCosts = calculateUKCosts(baseSalary);
        const savings = ukCosts.total - aetherbloomCost;
        const savingsPercentage = Math.round((savings / ukCosts.total) * 100);
        
        // Update UK cost displays
        if (pricingElements.ukBaseSalary) {
            pricingElements.ukBaseSalary.textContent = formatCurrency(baseSalary);
        }
        if (pricingElements.ukEmployerNi) {
            pricingElements.ukEmployerNi.textContent = formatCurrency(ukCosts.employerNi);
        }
        if (pricingElements.ukPension) {
            pricingElements.ukPension.textContent = formatCurrency(ukCosts.pension);
        }
        if (pricingElements.ukHoliday) {
            pricingElements.ukHoliday.textContent = formatCurrency(ukCosts.holiday);
        }
        if (pricingElements.ukTraining) {
            pricingElements.ukTraining.textContent = formatCurrency(ukCosts.training);
        }
        if (pricingElements.ukOffice) {
            pricingElements.ukOffice.textContent = formatCurrency(ukCosts.office);
        }
        if (pricingElements.ukEquipment) {
            pricingElements.ukEquipment.textContent = formatCurrency(ukCosts.equipment);
        }
        if (pricingElements.ukInsurance) {
            pricingElements.ukInsurance.textContent = formatCurrency(ukCosts.insurance);
        }
        if (pricingElements.ukTotalCost) {
            pricingElements.ukTotalCost.textContent = formatCurrency(ukCosts.total);
        }
        
        // Update Aetherbloom cost displays
        if (pricingElements.aetherbloomServiceFee) {
            pricingElements.aetherbloomServiceFee.textContent = formatCurrency(aetherbloomCost);
        }
        if (pricingElements.aetherbloomTotalCost) {
            pricingElements.aetherbloomTotalCost.textContent = formatCurrency(aetherbloomCost);
        }
        
        // Update savings displays
        if (pricingElements.savingsAmount) {
            pricingElements.savingsAmount.textContent = formatCurrency(savings);
        }
        if (pricingElements.savingsPercentage) {
            pricingElements.savingsPercentage.textContent = `${savingsPercentage}%`;
        }
    }
    
    // Calculate UK employment costs
    function calculateUKCosts(baseSalary) {
        const employerNi = Math.round(baseSalary * 0.138); // 13.8% employer NI
        const pension = Math.round(baseSalary * 0.03); // 3% employer pension contribution
        const holiday = Math.round(baseSalary * 0.077); // 7.7% holiday pay (20 days + 8 bank holidays)
        const training = 1500; // Annual training costs
        const office = 4800; // Annual office space costs
        const equipment = 800; // Annual equipment costs
        const insurance = 534; // Annual insurance costs
        
        const total = baseSalary + employerNi + pension + holiday + training + office + equipment + insurance;
        
        return {
            baseSalary,
            employerNi,
            pension,
            holiday,
            training,
            office,
            equipment,
            insurance,
            total
        };
    }
    
    // Format currency values
    function formatCurrency(amount) {
        return new Intl.NumberFormat('en-GB', {
            style: 'currency',
            currency: 'GBP',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(amount);
    }
    
    // Cleanup function
    function cleanup() {
        // Close any open dropdowns
        closeRoleDropdown();
        closeTierDropdown();
    }
    
    // Handle reduced motion preferences
    function handleReducedMotion() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        if (prefersReducedMotion) {
            // Disable animations
            if (pricingElements.wrapper) {
                pricingElements.wrapper.style.opacity = '1';
                pricingElements.wrapper.style.transform = 'translateY(0)';
            }
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPricingCalculator);
    } else {
        initPricingCalculator();
    }
    
    // Handle reduced motion changes
    const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    reducedMotionQuery.addListener(handleReducedMotion);
    handleReducedMotion(); // Initial check
    
    // Cleanup on page unload
    window.addEventListener('beforeunload', cleanup);
    
    // Expose functions for external access if needed
    window.aetherbloomPricingCalculator = {
        init: initPricingCalculator,
        cleanup: cleanup,
        selectRole: selectRole,
        selectTier: selectTier,
        getSelectedRole: () => pricingData.selectedRole,
        getSelectedTier: () => pricingData.selectedTier
    };
    
})();