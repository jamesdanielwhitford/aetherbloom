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
    // Digital Customer Success Services
    array(
        'id' => 'essentials',
        'name' => 'Digital Essentials',
        'cost' => 4320,
        'hours' => '20 hrs/month',
        'monthly' => '£360/month',
        'category' => 'digital'
    ),
    array(
        'id' => 'growth',
        'name' => 'Digital Growth',
        'cost' => 6000,
        'hours' => '30 hrs/month',
        'monthly' => '£500/month',
        'category' => 'digital'
    ),
    array(
        'id' => 'enterprise',
        'name' => 'Digital Enterprise',
        'cost' => 8760,
        'hours' => '50 hrs/month',
        'monthly' => '£730/month',
        'category' => 'digital'
    ),
    // Call Centre Solutions
    array(
        'id' => 'engagement',
        'name' => 'Call Centre Engagement',
        'cost' => 19200,
        'hours' => '40 hrs/week',
        'monthly' => '£1,600/month',
        'category' => 'callcentre'
    ),
    array(
        'id' => 'sales',
        'name' => 'Sales Accelerator',
        'cost' => 60000,
        'hours' => '3 agents',
        'monthly' => '£5,000/month',
        'category' => 'callcentre',
        'is_multi_agent' => true,
        'agent_count' => 3
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
            <div class="uk-right two-column-grid">
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-salary-label">Base salary</span>
                <span class="breakdown-value" id="uk-base-salary">£26,000</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-ni-label">Employer NI</span>
                <span class="breakdown-value" id="uk-employer-ni">£3,588</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-pension-label">Pension</span>
                <span class="breakdown-value" id="uk-pension">£780</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-holiday-label">Holiday pay</span>
                <span class="breakdown-value" id="uk-holiday">£2,002</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-training-label">Training</span>
                <span class="breakdown-value" id="uk-training">£1,500</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-office-label">Office space</span>
                <span class="breakdown-value" id="uk-office">£4,800</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-equipment-label">Equipment</span>
                <span class="breakdown-value" id="uk-equipment">£800</span>
              </div>
              <div class="breakdown-item">
                <span class="breakdown-label" id="uk-insurance-label">Insurance</span>
                <span class="breakdown-value" id="uk-insurance">£534</span>
              </div>
              <div class="breakdown-item total-breakdown">
                <span class="breakdown-label" id="uk-total-label">Total annual cost</span>
                <span class="breakdown-value total-cost" id="uk-total-cost">£40,004</span>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Aetherbloom Costs Section (Right Side) -->
        <div class="aetherbloom-section">
          <!-- Card 1: Aetherbloom Calculator -->
          <div class="aetherbloom-card aetherbloom-card-calculator">
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
                    
                    <!-- Digital Customer Success Services Header -->
                    <div class="dropdown-header">Digital Customer Success Services</div>
                    
                    <?php 
                    // First, output Digital services
                    foreach ($tier_options as $index => $tier) : 
                      if ($tier['category'] === 'digital') :
                    ?>
                      <button class="dropdown-option<?php echo $tier['id'] === $default_tier ? ' selected' : ''; ?>" 
                              type="button"
                              data-tier="<?php echo esc_attr($tier['id']); ?>" 
                              data-cost="<?php echo esc_attr($tier['cost']); ?>"
                              data-hours="<?php echo esc_attr($tier['hours']); ?>"
                              data-monthly="<?php echo esc_attr($tier['monthly']); ?>"
                              data-category="<?php echo esc_attr($tier['category']); ?>"
                              <?php if (isset($tier['is_multi_agent']) && $tier['is_multi_agent']) : ?>
                              data-multi-agent="true"
                              data-agent-count="<?php echo esc_attr($tier['agent_count']); ?>"
                              <?php endif; ?>
                              role="menuitem">
                        <div class="option-content">
                          <span class="option-name"><?php echo esc_html($tier['name']); ?></span>
                          <span class="option-details"><?php echo esc_html($tier['hours']); ?> | <?php echo esc_html($tier['monthly']); ?></span>
                        </div>
                      </button>
                    <?php 
                      endif;
                    endforeach; 
                    ?>
                    
                    <!-- Call Centre Solutions Header -->
                    <div class="dropdown-header">Call Centre Solutions</div>
                    
                    <?php 
                    // Then, output Call Centre services
                    foreach ($tier_options as $index => $tier) : 
                      if ($tier['category'] === 'callcentre') :
                    ?>
                      <button class="dropdown-option<?php echo $tier['id'] === $default_tier ? ' selected' : ''; ?>" 
                              type="button"
                              data-tier="<?php echo esc_attr($tier['id']); ?>" 
                              data-cost="<?php echo esc_attr($tier['cost']); ?>"
                              data-hours="<?php echo esc_attr($tier['hours']); ?>"
                              data-monthly="<?php echo esc_attr($tier['monthly']); ?>"
                              data-category="<?php echo esc_attr($tier['category']); ?>"
                              <?php if (isset($tier['is_multi_agent']) && $tier['is_multi_agent']) : ?>
                              data-multi-agent="true"
                              data-agent-count="<?php echo esc_attr($tier['agent_count']); ?>"
                              <?php endif; ?>
                              role="menuitem">
                        <div class="option-content">
                          <span class="option-name"><?php echo esc_html($tier['name']); ?></span>
                          <span class="option-details"><?php echo esc_html($tier['hours']); ?> | <?php echo esc_html($tier['monthly']); ?></span>
                        </div>
                      </button>
                    <?php 
                      endif;
                    endforeach; 
                    ?>
                    
                  </div>
                </div>
              </div>
              
              <!-- Cost Summary Area -->
              <div class="aetherbloom-right">
                <div class="breakdown-item service-fee-item">
                  <span class="breakdown-label">Service fee</span>
                  <span class="breakdown-value" id="aetherbloom-service-fee">£8,760</span>
                </div>
                <div class="spacing-element"></div>
                <div class="breakdown-item total-breakdown total-annual-cost-item">
                  <span class="breakdown-label">Total annual cost</span>
                  <span class="breakdown-value total-cost" id="aetherbloom-total-cost">£8,760</span>
                </div>
                <div class="breakdown-item total-breakdown">
                  <span class="breakdown-label">Annual savings</span>
                  <span class="breakdown-value savings-value-highlight" id="savings-amount">£31,244</span>
                </div>
                <div class="breakdown-item total-breakdown">
                  <span class="breakdown-label">Cost reduction</span>
                  <span class="breakdown-value savings-value-highlight" id="savings-percentage">78%</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Include the calculator script -->
<script>
// Pass PHP data to JavaScript
window.calculatorData = {
    roles: <?php echo json_encode($role_options); ?>,
    tiers: <?php echo json_encode($tier_options); ?>,
    defaults: {
        role: <?php echo json_encode($default_role); ?>,
        tier: <?php echo json_encode($default_tier); ?>
    }
};
</script>