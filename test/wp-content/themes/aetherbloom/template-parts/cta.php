<?php
// File: /wp-content/themes/aetherbloom/template-parts/cta.php

// Get custom field values with defaults
$cta_title = get_theme_mod('cta_title', 'Ready to Transform Your Business?');
$cta_subtitle = get_theme_mod('cta_assessment_text', 'Discover exactly how much you could save with a personalised assessment. Our team will analyse your current operations and provide a detailed cost-benefit analysis within 24 hours.');
$cta_email = get_theme_mod('cta_email', 'hello@aetherbloom.co.uk');
$cta_phone = get_theme_mod('cta_phone', '+44 208 0507 881');
$form_title = get_theme_mod('cta_form_title', 'Start Your Free Assessment');
$form_button_text = get_theme_mod('cta_form_button', 'Claim Your Free Session');
?>

<section class="cta-section" id="contact" data-section="contact">
  <div class="cta-container">
    <div class="cta-wrapper" id="cta-wrapper">
      
      <!-- Left Side - Content -->
      <div class="cta-content">
        <div class="cta-header">
          <h2 class="cta-title">
            <?php echo esc_html($cta_title); ?>
          </h2>
          <p class="cta-subtitle">
            <?php echo esc_html($cta_subtitle); ?>
          </p>
        </div>
        <div class="cta-contact-info">
          <div class="cta-contact-item">
            <a href="mailto:<?php echo esc_attr($cta_email); ?>" class="cta-contact-link">
              <?php echo esc_html($cta_email); ?>
            </a>
          </div>
          <div class="cta-contact-item">
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', $cta_phone)); ?>" class="cta-contact-link">
              <?php echo esc_html($cta_phone); ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Side - Contact Form -->
      <div class="cta-form-container">
        <form class="contact-form" id="contact-form" method="post" action="">
          <div class="cta-form-header">
            <h3 class="cta-form-title">
              <?php echo esc_html($form_title); ?>
            </h3>
          </div>

          <div class="cta-form-grid">
            <div class="cta-input-group">
              <input type="text" id="contact-name" name="contact_name" class="cta-form-input" placeholder="Your Name" required>
            </div>
            
            <div class="cta-input-group">
              <input type="email" id="contact-email" name="contact_email" class="cta-form-input" placeholder="Your Email" required>
            </div>
            
            <div class="cta-input-group">
              <input type="text" id="contact-company" name="contact_company" class="cta-form-input" placeholder="Company Name" required>
            </div>
            
            <div class="cta-input-group">
              <textarea id="contact-message" name="contact_message" class="cta-form-textarea" placeholder="Tell us about your business and how we can help you scale" rows="4" required></textarea>
            </div>
          </div>

          <button type="submit" class="cta-submit-button" id="contact-submit">
            <span class="cta-button-text"><?php echo esc_html($form_button_text); ?></span>
            <span class="cta-button-arrow">→</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// Pass PHP data to JavaScript
window.aetherbloomCTAData = {
    ajaxUrl: '<?php echo esc_url(admin_url("admin-ajax.php")); ?>',
    nonce: '<?php echo wp_create_nonce("aetherbloom_contact_form"); ?>',
    sectionSelector: '.cta-section'
};
</script>