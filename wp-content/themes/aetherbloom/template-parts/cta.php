<?php
// File: /wp-content/themes/aetherbloom/template-parts/cta.php

// Get custom field values with defaults
$cta_title = get_theme_mod('cta_title', 'Ready to Transform Your Business?');
$cta_subtitle = get_theme_mod('cta_subtitle', 'Join hundreds of UK businesses already saving up to 70% on operational costs while maintaining exceptional quality standards.');
$cta_assessment_text = get_theme_mod('cta_assessment_text', 'Discover exactly how much you could save with a personalized assessment. Our team will analyze your current operations and provide a detailed cost-benefit analysis within 24 hours.');
$cta_email = get_theme_mod('cta_email', 'info@aetherbloom.co.za');
$cta_phone = get_theme_mod('cta_phone', '+44 20 7123 4567');
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

        <div class="cta-additional-info">
          <p class="cta-assessment-text">
            <?php echo esc_html($cta_assessment_text); ?>
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

          <div class="cta-form-messages">
            <div class="form-success" id="form-success">
              Your message has been sent successfully. We'll get back to you within 24 hours.
            </div>
            <div class="form-error" id="form-error">
              Sorry, there was an error sending your message. Please try again or contact us directly.
            </div>
          </div>
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