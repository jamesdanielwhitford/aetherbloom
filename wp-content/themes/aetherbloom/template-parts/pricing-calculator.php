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
                      data-role-index="<?php echo esc_attr($index); ?>"
                    >
                      <div class="option-name"><?php echo esc_html($role['name']); ?></div>
                      <div class="option-salary">£<?php echo number_format($role['salary']); ?>/year</div>
                    </button>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            
            <div class="uk-right">
              <div class="breakdown-item">
                <span class="breakdown-label">Base salary</span>
                <span class="breakdown-value" id="uk-base-salary">£26,000</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Employer NI</span>
                <span class="breakdown-value" id="uk-employer-ni">£2,510</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Pension</span>
                <span class="breakdown-value" id="uk-pension">£780</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Holiday pay</span>
                <span class="breakdown-value" id="uk-holiday">£2,800</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Training</span>
                <span class="breakdown-value" id="uk-training">£1,500</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Office costs</span>
                <span class="breakdown-value" id="uk-office">£3,600</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Equipment</span>
                <span class="breakdown-value" id="uk-equipment">£1,200</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Insurance</span>
                <span class="breakdown-value" id="uk-insurance">£600</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label">Total cost</span>
                <span class="breakdown-value total-cost" id="uk-total-cost">£38,990</span>
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
                  <span class="dropdown-label" id="tier-label">Aetherbloom <?php echo esc_html($tier_options[2]['name']); ?></span>
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
                      data-tier-index="<?php echo esc_attr($index); ?>"
                    >
                      <div class="option-name"><?php echo esc_html($tier['name']); ?></div>
                      <div class="option-details"><?php echo esc_html($tier['hours']); ?> • <?php echo esc_html($tier['monthly']); ?></div>
                    </button>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            
            <div class="aetherbloom-right">
              <div class="breakdown-item">
                <span class="breakdown-label">Service fee</span>
                <span class="breakdown-value" id="aetherbloom-service-fee">£8,760</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Management</span>
                <span class="breakdown-value" id="aetherbloom-management">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Training</span>
                <span class="breakdown-value" id="aetherbloom-training">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Equipment</span>
                <span class="breakdown-value" id="aetherbloom-equipment">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Infrastructure</span>
                <span class="breakdown-value" id="aetherbloom-infrastructure">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Quality assurance</span>
                <span class="breakdown-value" id="aetherbloom-qa">Included</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Support</span>
                <span class="breakdown-value" id="aetherbloom-support">24/7</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label">Compliance</span>
                <span class="breakdown-value" id="aetherbloom-compliance">GDPR</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label">Total cost</span>
                <span class="breakdown-value total-cost" id="aetherbloom-total-cost">£8,760</span>
              </div>
              
              <!-- Savings Display -->
              <div class="savings-display" id="savings-display">
                <div class="savings-amount">
                  <span class="savings-label">You save</span>
                  <span class="savings-value" id="savings-amount">£30,230</span>
                </div>
                <div class="percentage-container">
                  <span class="percentage-value" id="savings-percentage">77%</span>
                  <span class="percentage-label">savings</span>
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
    defaultRole: '<?php echo esc_js($default_role); ?>',
    defaultTier: '<?php echo esc_js($default_tier); ?>',
    sectionSelector: '.calculator-section'
};
</script>