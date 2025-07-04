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
        
        // Cost display elements
        ukTotalCost: null,
        ukSalary: null,
        ukNiPension: null,
        ukRecruitment: null,
        ukTraining: null,
        ukOffice: null,
        ukTotal: null,
        
        aetherbloomTotalCost: null,
        tierServiceName: null,
        tierHours: null,
        tierMonthly: null,
        aetherbloomTotal: null,
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
        
        // Cost display elements
        pricingElements.ukTotalCost = document.getElementById('uk-total-cost');
        pricingElements.ukSalary = document.getElementById('uk-salary');
        pricingElements.ukNiPension = document.getElementById('uk-ni-pension');
        pricingElements.ukRecruitment = document.getElementById('uk-recruitment');
        pricingElements.ukTraining = document.getElementById('uk-training');
        pricingElements.ukOffice = document.getElementById('uk-office');
        pricingElements.ukTotal = document.getElementById('uk-total');
        
        pricingElements.aetherbloomTotalCost = document.getElementById('aetherbloom-total-cost');
        pricingElements.tierServiceName = document.getElementById('tier-service-name');
        pricingElements.tierHours = document.getElementById('tier-hours');
        pricingElements.tierMonthly = document.getElementById('tier-monthly');
        pricingElements.aetherbloomTotal = document.getElementById('aetherbloom-total');
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
            pricingElements.roleDropdownTrigger.addEventListener('click', () => {
                toggleRoleDropdown();
            });
        }
        
        // Role options
        pricingElements.roleOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                const roleName = e.currentTarget.dataset.roleName;
                selectRole(roleName);
                closeRoleDropdown();
            });
        });
        
        // Tier dropdown
        if (pricingElements.tierDropdownTrigger) {
            pricingElements.tierDropdownTrigger.addEventListener('click', () => {
                toggleTierDropdown();
            });
        }
        
        // Tier options
        pricingElements.tierOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                const tierId = e.currentTarget.dataset.tierId;
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
            openRoleDropdown();
        }
    }
    
    function openRoleDropdown() {
        pricingData.isRoleDropdownOpen = true;
        if (pricingElements.roleDropdownMenu) {
            pricingElements.roleDropdownMenu.style.display = 'block';
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
            openTierDropdown();
        }
    }
    
    function openTierDropdown() {
        pricingData.isTierDropdownOpen = true;
        if (pricingElements.tierDropdownMenu) {
            pricingElements.tierDropdownMenu.style.display = 'block';
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
    
    // Selection functions
    function selectRole(roleName) {
        pricingData.selectedRole = roleName;
        updateRoleSelection();
        updateCalculations();
    }
    
    function selectTier(tierId) {
        pricingData.selectedTier = tierId;
        updateTierSelection();
        updateCalculations();
    }
    
    // Update role selection UI
    function updateRoleSelection() {
        if (pricingElements.roleLabel) {
            pricingElements.roleLabel.textContent = pricingData.selectedRole;
        }
        
        // Update selected state in options
        pricingElements.roleOptions.forEach(option => {
            if (option.dataset.roleName === pricingData.selectedRole) {
                option.classList.add('selected');
            } else {
                option.classList.remove('selected');
            }
        });
    }
    
    // Update tier selection UI
    function updateTierSelection() {
        const selectedTierData = getSelectedTierData();
        if (selectedTierData && pricingElements.tierLabel) {
            pricingElements.tierLabel.textContent = `Aetherbloom ${selectedTierData.name}`;
        }
        
        // Update selected state in options
        pricingElements.tierOptions.forEach(option => {
            if (option.dataset.tierId === pricingData.selectedTier) {
                option.classList.add('selected');
            } else {
                option.classList.remove('selected');
            }
        });
    }
    
    // Get selected role data
    function getSelectedRoleData() {
        return pricingData.roleOptions.find(role => role.name === pricingData.selectedRole);
    }
    
    // Get selected tier data
    function getSelectedTierData() {
        return pricingData.tierOptions.find(tier => tier.id === pricingData.selectedTier);
    }
    
    // Calculate UK costs
    function calculateUKCosts() {
        const roleData = getSelectedRoleData();
        if (!roleData) return null;
        
        const salary = roleData.salary;
        const niPension = Math.round(salary * 0.13);
        const recruitment = Math.round(salary * 0.15);
        const training = Math.round(salary * 0.05);
        const office = 5400;
        const total = salary + niPension + recruitment + training + office;
        
        return {
            salary,
            niPension,
            recruitment,
            training,
            office,
            total
        };
    }
    
    // Calculate savings
    function calculateSavings() {
        const ukCosts = calculateUKCosts();
        const tierData = getSelectedTierData();
        
        if (!ukCosts || !tierData) return null;
        
        const savings = ukCosts.total - tierData.cost;
        const percentage = ((savings / ukCosts.total) * 100).toFixed(1);
        
        return {
            savings,
            percentage
        };
    }
    
    // Format currency
    function formatCurrency(amount) {
        return new Intl.NumberFormat('en-GB', {
            style: 'currency',
            currency: 'GBP',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(amount);
    }
    
    // Update all calculations and display
    function updateCalculations() {
        const ukCosts = calculateUKCosts();
        const tierData = getSelectedTierData();
        const savingsData = calculateSavings();
        
        if (!ukCosts || !tierData || !savingsData) return;
        
        // Update UK costs
        if (pricingElements.ukSalary) {
            pricingElements.ukSalary.textContent = formatCurrency(ukCosts.salary);
        }
        if (pricingElements.ukNiPension) {
            pricingElements.ukNiPension.textContent = formatCurrency(ukCosts.niPension);
        }
        if (pricingElements.ukRecruitment) {
            pricingElements.ukRecruitment.textContent = formatCurrency(ukCosts.recruitment);
        }
        if (pricingElements.ukTraining) {
            pricingElements.ukTraining.textContent = formatCurrency(ukCosts.training);
        }
        if (pricingElements.ukOffice) {
            pricingElements.ukOffice.textContent = formatCurrency(ukCosts.office);
        }
        if (pricingElements.ukTotal) {
            pricingElements.ukTotal.textContent = formatCurrency(ukCosts.total);
        }
        if (pricingElements.ukTotalCost) {
            pricingElements.ukTotalCost.textContent = `${formatCurrency(ukCosts.total)}/year`;
        }
        
        // Update Aetherbloom costs
        if (pricingElements.tierServiceName) {
            pricingElements.tierServiceName.textContent = tierData.name;
        }
        if (pricingElements.tierHours) {
            pricingElements.tierHours.textContent = tierData.hours;
        }
        if (pricingElements.tierMonthly) {
            pricingElements.tierMonthly.textContent = tierData.monthly;
        }
        if (pricingElements.aetherbloomTotal) {
            pricingElements.aetherbloomTotal.textContent = formatCurrency(tierData.cost);
        }
        if (pricingElements.aetherbloomTotalCost) {
            pricingElements.aetherbloomTotalCost.textContent = `${formatCurrency(tierData.cost)}/year`;
        }
        
        // Update savings
        if (pricingElements.savingsAmount) {
            pricingElements.savingsAmount.textContent = formatCurrency(savingsData.savings);
        }
        if (pricingElements.savingsPercentage) {
            pricingElements.savingsPercentage.textContent = `${savingsData.percentage}%`;
        }
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPricingCalculator);
    } else {
        initPricingCalculator();
    }
    
    // Expose functions for external access if needed
    window.aetherbloomPricingCalculator = {
        init: initPricingCalculator,
        selectRole: selectRole,
        selectTier: selectTier,
        getSelectedRole: () => pricingData.selectedRole,
        getSelectedTier: () => pricingData.selectedTier,
        updateCalculations: updateCalculations
    };
    
})();