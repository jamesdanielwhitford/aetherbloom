<?php
// File: /wp-content/themes/aetherbloom/template-parts/pricing-calculator.php

// Get custom field values with defaults
$section_title = get_theme_mod('pricing_title', 'How much can you save?');
$section_subtitle = get_theme_mod('pricing_subtitle', 'Try our pricing calculator to see transparent costs upfront and discover exactly how much you could save by partnering with Aetherbloom.');

// Default role options - can be made customizable through WordPress admin
$role_options = array(
    array('name' => 'Customer Service Representative', 'salary' => 26000),
    array('name' => 'Admin Assistant', 'salary' => 25000),
    array('name' => 'Technical Support Specialist', 'salary' => 32000),
    array('name' => 'Data Analyst', 'salary' => 38000),
    array('name' => 'Bookkeeper', 'salary' => 30000),
    array('name' => 'Sales Support Coordinator', 'salary' => 28000)
);

// Default tier options - can be made customizable through WordPress admin
$tier_options = array(
    array(
        'id' => 'essentials',
        'name' => 'Digital Essentials',
        'cost' => 4320,
        'hours' => '20 hrs/month',
        'monthly' => '£360/month'
    ),
    array(
        'id' => 'growth',
        'name' => 'Digital Growth',
        'cost' => 6000,
        'hours' => '30 hrs/month',
        'monthly' => '£500/month'
    ),
    array(
        'id' => 'enterprise',
        'name' => 'Digital Enterprise',
        'cost' => 8760,
        'hours' => '50 hrs/month',
        'monthly' => '£730/month'
    ),
    array(
        'id' => 'engagement',
        'name' => 'Call Centre Engagement',
        'cost' => 19200,
        'hours' => '40 hrs/week',
        'monthly' => '£1,600/month'
    ),
    array(
        'id' => 'sales',
        'name' => 'Sales Accelerator',
        'cost' => 60000,
        'hours' => '3 agents',
        'monthly' => '£5,000/month'
    )
);

// Set default selections
$default_role = 'Customer Service Representative';
$default_tier = 'enterprise';
?>

<section class="calculator-section" id="pricing" data-section="pricing">
  <div class="calculator-container">
    <div class="calculator-wrapper" id="calculator-wrapper">
      
      <!-- Header Section -->
      <div class="calculator-header-section">
        <h2 class="calculator-section-title"><?php echo esc_html($section_title); ?></h2>
        <p class="calculator-section-subtitle"><?php echo esc_html($section_subtitle); ?></p>
      </div>
      
      <!-- Side-by-Side Comparison Grid -->
      <div class="comparison-grid">
        
        <!-- UK Costs Section (Left Side) -->
        <div class="uk-section">
          <div class="uk-content">
            
            <!-- Header Area: Section Title & Dropdown -->
            <div class="uk-left">
              <h3 class="section-label">UK Costs</h3>
              
              <!-- Role Selection Dropdown -->
              <div class="dropdown" id="role-dropdown">
                <button class="dropdown-trigger" id="role-dropdown-trigger" type="button" aria-expanded="false" aria-haspopup="true">
                  <span class="dropdown-label" id="role-label"><?php echo esc_html($default_role); ?></span>
                  <span class="dropdown-arrow" id="role-arrow">▼</span>
                </button>
                <div class="dropdown-menu" id="role-dropdown-menu" role="menu" aria-hidden="true">
                  <?php foreach ($role_options as $index => $role) : ?>
                    <button class="dropdown-option<?php echo $role['name'] === $default_role ? ' selected' : ''; ?>" 
                            type="button"
                            data-role="<?php echo esc_attr($role['name']); ?>" 
                            data-salary="<?php echo esc_attr($role['salary']); ?>"
                            role="menuitem">
                      <span class="option-name"><?php echo esc_html($role['name']); ?></span>
                      <span class="option-salary">£<?php echo number_format($role['salary']); ?></span>
                    </button>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            
            <!-- Breakdown Area: Cost Breakdown -->
            <div class="uk-right">
              <div class="breakdown-item">
                <span class="breakdown-label">Base salary</span>
                <span class="breakdown-value" id="uk-base-salary">£26,000</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Employer NI</span>
                <span class="breakdown-value" id="uk-employer-ni">£3,588</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Pension</span>
                <span class="breakdown-value" id="uk-pension">£780</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Holiday pay</span>
                <span class="breakdown-value" id="uk-holiday">£2,002</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Training</span>
                <span class="breakdown-value" id="uk-training">£1,500</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Office space</span>
                <span class="breakdown-value" id="uk-office">£4,800</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Equipment</span>
                <span class="breakdown-value" id="uk-equipment">£800</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Insurance</span>
                <span class="breakdown-value" id="uk-insurance">£534</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label">Total annual cost</span>
                <span class="breakdown-value total-cost" id="uk-total-cost">£40,004</span>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Aetherbloom Costs Section (Right Side) -->
        <div class="aetherbloom-section">
          <div class="aetherbloom-content">
            
            <!-- Header Area: Section Title & Dropdown -->
            <div class="aetherbloom-left">
              <h3 class="section-label">Aetherbloom</h3>
              
              <!-- Service Tier Selection Dropdown -->
              <div class="dropdown" id="tier-dropdown">
                <button class="dropdown-trigger" id="tier-dropdown-trigger" type="button" aria-expanded="false" aria-haspopup="true">
                  <span class="dropdown-label" id="tier-label">Digital Enterprise</span>
                  <span class="dropdown-arrow" id="tier-arrow">▼</span>
                </button>
                <div class="dropdown-menu" id="tier-dropdown-menu" role="menu" aria-hidden="true">
                  <?php foreach ($tier_options as $index => $tier) : ?>
                    <button class="dropdown-option<?php echo $tier['id'] === $default_tier ? ' selected' : ''; ?>" 
                            type="button"
                            data-tier="<?php echo esc_attr($tier['id']); ?>"
                            data-cost="<?php echo esc_attr($tier['cost']); ?>"
                            role="menuitem">
                      <div>
                        <div class="option-name"><?php echo esc_html($tier['name']); ?></div>
                        <div class="option-details"><?php echo esc_html($tier['hours']); ?> • <?php echo esc_html($tier['monthly']); ?></div>
                      </div>
                    </button>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            
            <!-- Breakdown Area: Service Fee Breakdown -->
            <div class="aetherbloom-right">
              <div class="breakdown-item">
                <span class="breakdown-label">Service fee</span>
                <span class="breakdown-value" id="aetherbloom-service-fee">£8,760</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Recruitment</span>
                <span class="breakdown-value">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Training</span>
                <span class="breakdown-value">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Management</span>
                <span class="breakdown-value">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Equipment</span>
                <span class="breakdown-value">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Office space</span>
                <span class="breakdown-value">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Insurance</span>
                <span class="breakdown-value">Included</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label">Total annual cost</span>
                <span class="breakdown-value total-cost" id="aetherbloom-total-cost">£8,760</span>
              </div>
              
              <!-- Savings Display -->
              <div class="savings-display">
                <div class="savings-amount">
                  <span class="savings-label">Annual savings</span>
                  <span class="savings-value" id="savings-amount">£31,244</span>
                </div>
                <div class="percentage-container">
                  <span class="percentage-label">Savings percentage</span>
                  <span class="percentage-value" id="savings-percentage">78%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// Pass PHP data to JavaScript
window.aetherbloomPricingData = {
    roleOptions: <?php echo json_encode($role_options); ?>,
    tierOptions: <?php echo json_encode($tier_options); ?>,
    defaultRole: <?php echo json_encode($default_role); ?>,
    defaultTier: <?php echo json_encode($default_tier); ?>
};
</script>