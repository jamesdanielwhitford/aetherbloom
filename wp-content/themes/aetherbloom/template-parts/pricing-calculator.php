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
      <div class="header-section">
        <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
        <p class="section-subtitle"><?php echo esc_html($section_subtitle); ?></p>
      </div>

      <div class="comparison-grid">
        
        <!-- UK Employee Costs Section -->
        <div class="uk-section">
          <div class="uk-content">
            <div class="uk-left">
              <div class="dropdown" id="role-dropdown">
                <button 
                  class="dropdown-trigger"
                  id="role-dropdown-trigger"
                  aria-expanded="false"
                  aria-haspopup="true"
                >
                  <span class="dropdown-label" id="role-label"><?php echo esc_html($default_role); ?></span>
                  <span class="dropdown-arrow" id="role-arrow">▼</span>
                </button>
                
                <div class="dropdown-menu" id="role-dropdown-menu" style="display: none;">
                  <?php foreach ($role_options as $index => $role): ?>
                    <button
                      class="dropdown-option <?php echo $role['name'] === $default_role ? 'selected' : ''; ?>"
                      data-role-name="<?php echo esc_attr($role['name']); ?>"
                      data-role-salary="<?php echo esc_attr($role['salary']); ?>"
                      data-role-index="<?php echo $index; ?>"
                    >
                      <span class="option-name"><?php echo esc_html($role['name']); ?></span>
                      <span class="option-salary">£<?php echo number_format($role['salary']); ?></span>
                    </button>
                  <?php endforeach; ?>
                </div>
              </div>
              
              <div class="total-cost" id="uk-total-cost">
                £45,400/year
              </div>
            </div>

            <div class="uk-right">
              <div class="breakdown-item">
                <span class="breakdown-label">Base Salary</span>
                <span class="breakdown-value" id="uk-salary">£26,000</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">NI & Pension (13%)</span>
                <span class="breakdown-value" id="uk-ni-pension">£3,380</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Recruitment (15%)</span>
                <span class="breakdown-value" id="uk-recruitment">£3,900</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Training & Development</span>
                <span class="breakdown-value" id="uk-training">£1,300</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Office, IT & Benefits</span>
                <span class="breakdown-value" id="uk-office">£5,400</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label">Total cost</span>
                <span class="breakdown-value" id="uk-total">£45,400</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Aetherbloom Solution Section -->
        <div class="aetherbloom-section">
          <div class="aetherbloom-content">
            <div class="aetherbloom-left">
              <div class="dropdown" id="tier-dropdown">
                <button 
                  class="dropdown-trigger"
                  id="tier-dropdown-trigger"
                  aria-expanded="false"
                  aria-haspopup="true"
                >
                  <span class="dropdown-label" id="tier-label">Aetherbloom Digital Enterprise</span>
                  <span class="dropdown-arrow" id="tier-arrow">▼</span>
                </button>
                
                <div class="dropdown-menu" id="tier-dropdown-menu" style="display: none;">
                  <?php foreach ($tier_options as $index => $tier): ?>
                    <button
                      class="dropdown-option <?php echo $tier['id'] === $default_tier ? 'selected' : ''; ?>"
                      data-tier-id="<?php echo esc_attr($tier['id']); ?>"
                      data-tier-name="<?php echo esc_attr($tier['name']); ?>"
                      data-tier-cost="<?php echo esc_attr($tier['cost']); ?>"
                      data-tier-hours="<?php echo esc_attr($tier['hours']); ?>"
                      data-tier-monthly="<?php echo esc_attr($tier['monthly']); ?>"
                      data-tier-index="<?php echo $index; ?>"
                    >
                      <span class="option-name">Aetherbloom <?php echo esc_html($tier['name']); ?></span>
                      <span class="option-details"><?php echo esc_html($tier['hours']); ?> • <?php echo esc_html($tier['monthly']); ?></span>
                    </button>
                  <?php endforeach; ?>
                </div>
              </div>
              
              <div class="total-cost" id="aetherbloom-total-cost">
                £8,760/year
              </div>
            </div>

            <div class="aetherbloom-right">
              <div class="breakdown-item">
                <span class="breakdown-label" id="tier-service-name">Digital Enterprise</span>
                <span class="breakdown-value" id="tier-hours">50 hrs/month</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Monthly Cost</span>
                <span class="breakdown-value" id="tier-monthly">£730/month</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label">Total cost</span>
                <span class="breakdown-value" id="aetherbloom-total">£8,760</span>
              </div>
              
              <!-- Savings Information -->
              <div class="savings-display">
                <div class="savings-amount">
                  <span class="savings-label">Annual Savings</span>
                  <span class="savings-value" id="savings-amount">£36,640</span>
                </div>
                <div class="savings-percentage">
                  <span class="percentage-label">Cost Reduction</span>
                  <span class="percentage-value" id="savings-percentage">80.7%</span>
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
    defaultTier: <?php echo json_encode($default_tier); ?>,
    sectionSelector: '.calculator-section'
};
</script>