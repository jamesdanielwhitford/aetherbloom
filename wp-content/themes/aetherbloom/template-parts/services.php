<?php
// File: /wp-content/themes/aetherbloom/template-parts/services.php

// Get custom field values with defaults
$services_bg_image = get_theme_mod('services_bg_image', get_template_directory_uri() . '/assets/images/services-bg.jpg');

// Default services data - can be made customizable through WordPress admin
$services_data = array(
    array(
        'title' => get_theme_mod('service_1_title', 'Customer Support'),
        'subtitle' => get_theme_mod('service_1_subtitle', 'Omnichannel Excellence'),
        'description' => get_theme_mod('service_1_description', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'),
        'features' => array(
            '24/7 Multi-channel Support',
            'UK Compliance Training',
            'Real-time Quality Monitoring',
            'Native-level Communication'
        )
    ),
    array(
        'title' => get_theme_mod('service_2_title', 'Back Office Operations'),
        'subtitle' => get_theme_mod('service_2_subtitle', 'Streamlined Efficiency'),
        'description' => get_theme_mod('service_2_description', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'),
        'features' => array(
            'Data Processing & Entry',
            'Financial Administration',
            'HR Support Services'
        )
    ),
    array(
        'title' => get_theme_mod('service_3_title', 'Technical Support'),
        'subtitle' => get_theme_mod('service_3_subtitle', 'Expert Problem Solving'),
        'description' => get_theme_mod('service_3_description', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'),
        'features' => array(
            'Tiered IT Helpdesk',
            'Software Support',
            'Technical Documentation',
            'System Troubleshooting'
        )
    )
);
?>

<section class="services-section" id="services" data-section="services">
  <div class="background-image" style="background-image: url('<?php echo esc_url($services_bg_image); ?>');"></div>
  <div class="overlay"></div>
  
  <div class="services-container">
    <div class="services-content" id="services-content">
      
      <!-- Left Side - Services List -->
      <div class="services-list">
        <div class="services-menu" id="services-menu">
          <?php foreach ($services_data as $index => $service): ?>
            <div 
              class="service-menu-item <?php echo $index === 0 ? 'active' : ''; ?>" 
              data-service-index="<?php echo $index; ?>"
            >
              <div class="service-arrow <?php echo $index === 0 ? 'visible' : ''; ?>">
                →
              </div>
              <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right Side - Service Details Card -->
      <div class="service-card">
        <div 
          class="card-content" 
          id="service-card-content"
          style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1);"
        >
          <div class="card-header">
            <span class="card-number" id="card-number">01</span>
            <div class="card-title-group">
              <h3 class="card-title" id="card-title"><?php echo esc_html($services_data[0]['title']); ?></h3>
              <span class="card-subtitle" id="card-subtitle"><?php echo esc_html($services_data[0]['subtitle']); ?></span>
            </div>
          </div>
          
          <p class="card-description" id="card-description">
            <?php echo esc_html($services_data[0]['description']); ?>
          </p>
          
          <div class="card-features">
            <h4 class="features-title">Key Features:</h4>
            <ul class="features-list" id="features-list">
              <?php foreach ($services_data[0]['features'] as $feature): ?>
                <li class="feature-item">
                  <span class="feature-icon">✓</span>
                  <?php echo esc_html($feature); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// Pass PHP data to JavaScript
window.aetherbloomServicesData = {
    services: <?php echo json_encode($services_data); ?>,
    activeService: 0,
    sectionSelector: '.services-section'
};
</script>