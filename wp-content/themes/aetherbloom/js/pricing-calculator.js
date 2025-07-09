/* File: /wp-content/themes/aetherbloom/js/pricing-calculator.js */

// Global calculator state and elements
const pricingData = {
    selectedRole: 'Customer Service Representative',
    selectedTier: 'enterprise',
    isVisible: false,
    isRoleDropdownOpen: false,
    isTierDropdownOpen: false,
    isMultiAgent: false,
    agentCount: 1
};

const pricingElements = {};

// Initialize the calculator on DOM ready
document.addEventListener('DOMContentLoaded', function() {
    // Only initialize if calculator elements exist
    if (document.querySelector('.calculator-section')) {
        initPricingCalculator();
    }
});

// Main initialization function
function initPricingCalculator() {
    // Cache all DOM elements
    cacheElements();
    
    // Setup intersection observer for animations
    if (pricingElements.section) {
        initIntersectionObserver();
    }
    
    // Initialize dropdown functionality
    initDropdowns();
    
    // Initialize click outside handling
    initClickOutsideHandling();
    
    // Set initial state from defaults
    if (window.calculatorData && window.calculatorData.defaults) {
        pricingData.selectedRole = window.calculatorData.defaults.role;
        pricingData.selectedTier = window.calculatorData.defaults.tier;
        
        // Check if default tier is multi-agent
        updateMultiAgentState();
    }
    
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
    
    // UK label elements for multi-agent updates
    pricingElements.ukSalaryLabel = document.getElementById('uk-salary-label');
    pricingElements.ukNiLabel = document.getElementById('uk-ni-label');
    pricingElements.ukPensionLabel = document.getElementById('uk-pension-label');
    pricingElements.ukHolidayLabel = document.getElementById('uk-holiday-label');
    pricingElements.ukTrainingLabel = document.getElementById('uk-training-label');
    pricingElements.ukOfficeLabel = document.getElementById('uk-office-label');
    pricingElements.ukEquipmentLabel = document.getElementById('uk-equipment-label');
    pricingElements.ukInsuranceLabel = document.getElementById('uk-insurance-label');
    pricingElements.ukTotalLabel = document.getElementById('uk-total-label');
    
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
    
    // Role options
    pricingElements.roleOptions.forEach(option => {
        option.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const roleName = e.currentTarget.dataset.role;
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
    
    // Tier options
    pricingElements.tierOptions.forEach(option => {
        option.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const tierId = e.currentTarget.dataset.tier;
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

// Selection functions
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
    
    // Recalculate costs
    updateCalculations();
}

function selectTier(tierId) {
    if (!tierId) return;
    
    pricingData.selectedTier = tierId;
    
    // Update multi-agent state
    updateMultiAgentState();
    
    // Find the tier data and update label
    const tierData = getTierData(tierId);
    if (tierData && pricingElements.tierLabel) {
        pricingElements.tierLabel.textContent = tierData.name;
    }
    
    // Update option states
    pricingElements.tierOptions.forEach(option => {
        if (option.dataset.tier === tierId) {
            option.classList.add('selected');
        } else {
            option.classList.remove('selected');
        }
    });
    
    // Recalculate costs
    updateCalculations();
}

// Update multi-agent state based on selected tier
function updateMultiAgentState() {
    const tierData = getTierData(pricingData.selectedTier);
    if (tierData) {
        pricingData.isMultiAgent = tierData.is_multi_agent || false;
        pricingData.agentCount = tierData.agent_count || 1;
        
        // Update UK labels based on multi-agent state
        updateUKLabels();
    }
}

// Update UK breakdown labels for multi-agent comparison
function updateUKLabels() {
    const multiplier = pricingData.isMultiAgent ? `${pricingData.agentCount}x ` : '';
    const suffix = pricingData.isMultiAgent ? ` (${pricingData.agentCount} positions)` : '';
    
    if (pricingElements.ukSalaryLabel) {
        pricingElements.ukSalaryLabel.textContent = `${multiplier}Base salary`;
    }
    if (pricingElements.ukNiLabel) {
        pricingElements.ukNiLabel.textContent = `${multiplier}Employer NI`;
    }
    if (pricingElements.ukPensionLabel) {
        pricingElements.ukPensionLabel.textContent = `${multiplier}Pension`;
    }
    if (pricingElements.ukHolidayLabel) {
        pricingElements.ukHolidayLabel.textContent = `${multiplier}Holiday pay`;
    }
    if (pricingElements.ukTrainingLabel) {
        pricingElements.ukTrainingLabel.textContent = `${multiplier}Training`;
    }
    if (pricingElements.ukOfficeLabel) {
        pricingElements.ukOfficeLabel.textContent = `${multiplier}Office space`;
    }
    if (pricingElements.ukEquipmentLabel) {
        pricingElements.ukEquipmentLabel.textContent = `${multiplier}Equipment`;
    }
    if (pricingElements.ukInsuranceLabel) {
        pricingElements.ukInsuranceLabel.textContent = `${multiplier}Insurance`;
    }
    if (pricingElements.ukTotalLabel) {
        pricingElements.ukTotalLabel.textContent = `Total annual cost${suffix}`;
    }
}

// Get role data by name
function getRoleData(roleName) {
    if (!window.calculatorData || !window.calculatorData.roles) {
        return null;
    }
    return window.calculatorData.roles.find(role => role.name === roleName);
}

// Get tier data by ID
function getTierData(tierId) {
    if (!window.calculatorData || !window.calculatorData.tiers) {
        return null;
    }
    return window.calculatorData.tiers.find(tier => tier.id === tierId);
}

// Calculate UK costs based on role salary
function calculateUKCosts(baseSalary, multiplier = 1) {
    const adjustedSalary = baseSalary * multiplier;
    
    // UK employment cost calculations (per position, then multiplied)
    const employerNI = Math.round((adjustedSalary * 0.138) * multiplier);
    const pension = Math.round((adjustedSalary * 0.03) * multiplier);
    const holidayPay = Math.round((adjustedSalary * 0.077) * multiplier);
    const training = 1500 * multiplier;
    const officeSpace = 4800 * multiplier;
    const equipment = 800 * multiplier;
    const insurance = 534 * multiplier;
    
    return {
        baseSalary: adjustedSalary,
        employerNI,
        pension,
        holidayPay,
        training,
        officeSpace,
        equipment,
        insurance,
        total: adjustedSalary + employerNI + pension + holidayPay + training + officeSpace + equipment + insurance
    };
}

// Update all calculations and displays
function updateCalculations() {
    const roleData = getRoleData(pricingData.selectedRole);
    const tierData = getTierData(pricingData.selectedTier);
    
    if (!roleData || !tierData) {
        console.warn('Missing role or tier data');
        return;
    }
    
    // Calculate costs with multiplier for multi-agent scenarios
    const multiplier = pricingData.isMultiAgent ? pricingData.agentCount : 1;
    const ukCosts = calculateUKCosts(roleData.salary, multiplier);
    const aetherbloomCost = tierData.cost;
    
    // Update UK cost displays
    updateElement(pricingElements.ukBaseSalary, formatCurrency(ukCosts.baseSalary));
    updateElement(pricingElements.ukEmployerNi, formatCurrency(ukCosts.employerNI));
    updateElement(pricingElements.ukPension, formatCurrency(ukCosts.pension));
    updateElement(pricingElements.ukHoliday, formatCurrency(ukCosts.holidayPay));
    updateElement(pricingElements.ukTraining, formatCurrency(ukCosts.training));
    updateElement(pricingElements.ukOffice, formatCurrency(ukCosts.officeSpace));
    updateElement(pricingElements.ukEquipment, formatCurrency(ukCosts.equipment));
    updateElement(pricingElements.ukInsurance, formatCurrency(ukCosts.insurance));
    updateElement(pricingElements.ukTotalCost, formatCurrency(ukCosts.total));
    
    // Update Aetherbloom cost displays
    updateElement(pricingElements.aetherbloomServiceFee, formatCurrency(aetherbloomCost));
    updateElement(pricingElements.aetherbloomTotalCost, formatCurrency(aetherbloomCost));
    
    // Calculate and update savings
    const savings = ukCosts.total - aetherbloomCost;
    const savingsPercentage = Math.round((savings / ukCosts.total) * 100);
    
    updateElement(pricingElements.savingsAmount, formatCurrency(savings));
    updateElement(pricingElements.savingsPercentage, `${savingsPercentage}%`);
}

// Utility function to update element text content safely
function updateElement(element, text) {
    if (element) {
        element.textContent = text;
    }
}

// Format currency values
function formatCurrency(amount) {
    return `£${amount.toLocaleString()}`;
}