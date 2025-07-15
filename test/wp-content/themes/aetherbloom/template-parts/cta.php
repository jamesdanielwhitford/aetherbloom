<?php
// File: /wp-content/themes/aetherbloom/template-parts/cta.php

// Get custom field values with defaults
$cta_title = get_theme_mod('cta_title', 'Ready to Transform Your Business?');
$cta_subtitle = get_theme_mod('cta_assessment_text', 'Discover exactly how much you could save with a personalised assessment. Our team will analyse your current operations and provide a detailed cost-benefit analysis within 24 hours.');
$cta_email = get_theme_mod('cta_email', 'hello@aetherbloom.co.uk');
$cta_phone = get_theme_mod('cta_phone', '+44 208 0507 881');
$form_title = get_theme_mod('cta_form_title', 'Start Your Free Assessment');
$form_button_text = get_theme_mod('cta_form_button', 'Submit');
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

      <!-- Right Side - Multi-Step Contact Form -->
      <div class="cta-form-container">
        <form class="contact-form" id="contact-form" method="post" action="">
          <!-- Step Progress Indicator -->
            <div class="step-progress">
              <div class="step-indicator active"></div>
              <div class="step-connector"></div>
              <div class="step-indicator"></div>
              <div class="step-connector"></div>
              <div class="step-indicator"></div>
            </div>

          <div class="cta-form-header">
            <h3 class="cta-form-title">
              <?php echo esc_html($form_title); ?>
            </h3>
          </div>

          <!-- Step 1: Contact Details -->
          <div class="form-step" id="step-1">
            <div class="cta-form-grid">
              <!-- Company Name -->
              <div class="cta-input-group">
                <input type="text" id="company-name" name="company" class="cta-form-input" placeholder="Company Name *" required>
              </div>

              <!-- First Name -->
              <div class="cta-input-group">
                <input type="text" id="first-name" name="firstname" class="cta-form-input" placeholder="First Name *" required>
              </div>
              
              <!-- Last Name -->
              <div class="cta-input-group">
                <input type="text" id="last-name" name="lastname" class="cta-form-input" placeholder="Last Name *" required>
              </div>
              
              <!-- Email -->
              <div class="cta-input-group">
                <input type="email" id="contact-email" name="email" class="cta-form-input" placeholder="Email Address *" required>
              </div>
              
              <!-- Phone Number -->
              <div class="cta-input-group">
                <input type="tel" id="phone-number" name="phone" class="cta-form-input" placeholder="Phone Number">
              </div>
            </div>

            <!-- Navigation for Step 1 -->
            <div class="form-navigation">
              <button type="button" class="btn-next" id="btn-next-1">
                <span class="cta-button-text"><?php esc_html_e('Next', 'aetherbloom'); ?></span>
              </button>
            </div>
          </div>

          <!-- Step 2: Service Selection -->
          <div class="form-step" id="step-2">
            
            <div class="cta-form-grid service-selection">
              <!-- Primary Service -->
              <div class="cta-input-group primary-service-group">
                <label class="primary-service-label"><?php esc_html_e('Primary Service *', 'aetherbloom'); ?></label>
                <select id="primary-service" name="primary_service" class="cta-form-select" required>
                  <option value=""><?php esc_html_e('Please Select', 'aetherbloom'); ?></option>
                  <option value="Digital Customer Success"><?php esc_html_e('Digital Customer Success (Email/chat support, order management, CRM updates)', 'aetherbloom'); ?></option>
                  <option value="Call Centre Solutions"><?php esc_html_e('Call Centre Solutions (Inbound/outbound calls, sales support, appointment booking)', 'aetherbloom'); ?></option>
                </select>
              </div>
              
              <!-- Add-On Services -->
              <div class="cta-input-group cta-addon-services">
                <label class="addon-services-label"><?php esc_html_e('Additional Services (Optional)', 'aetherbloom'); ?></label>
                <div class="checkbox-group">
                  <label class="checkbox-item">
                    <input type="checkbox" name="addon_services" value="HR Support">
                    <span class="checkbox-text"><?php esc_html_e('HR Support (Onboarding, employee records)', 'aetherbloom'); ?></span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox" name="addon_services" value="Bookkeeping">
                    <span class="checkbox-text"><?php esc_html_e('Bookkeeping (Invoicing, expense tracking)', 'aetherbloom'); ?></span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox" name="addon_services" value="Data Analysis">
                    <span class="checkbox-text"><?php esc_html_e('Data Analysis (Custom reports & insights)', 'aetherbloom'); ?></span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox" name="addon_services" value="Business Coaching">
                    <span class="checkbox-text"><?php esc_html_e('Business Coaching', 'aetherbloom'); ?></span>
                  </label>
                  <label class="checkbox-item">
                    <input type="checkbox" name="addon_services" value="Technical Support">
                    <span class="checkbox-text"><?php esc_html_e('Technical Support (website design, PowerApp development etc)', 'aetherbloom'); ?></span>
                  </label>
                </div>
              </div>
            </div>

            <!-- Navigation for Step 2 -->
            <div class="form-navigation">
              <button type="button" class="btn-previous" id="btn-previous-2">
                <span class="cta-button-text"><?php esc_html_e('Previous', 'aetherbloom'); ?></span>
              </button>
              <button type="button" class="btn-next" id="btn-next-2">
                <span class="cta-button-text"><?php esc_html_e('Review', 'aetherbloom'); ?></span>
              </button>
            </div>
          </div>

          <!-- Step 3: Review & Submit -->
          <div class="form-step" id="step-3">
            
            <div class="cta-form-grid">
              <!-- Review Summary (will be populated by JavaScript) -->
              <div class="cta-input-group">
                <div id="form-summary" style="background: rgba(255,255,255,0.1); border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                  <h4 style="color: rgba(255,255,255,0.9); margin: 0 0 1rem 0; font-size: 1rem;"><?php esc_html_e('Assessment Details:', 'aetherbloom'); ?></h4>
                  <div id="summary-content" style="color: rgba(255,255,255,0.8); font-size: 0.9rem; line-height: 1.5;">
                    <!-- Summary will be populated by JavaScript -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Navigation for Step 3 -->
            <div class="form-navigation">
              <button type="button" class="btn-previous" id="btn-previous-3">
                <span class="cta-button-text"><?php esc_html_e('Previous', 'aetherbloom'); ?></span>
              </button>
              <button type="submit" class="cta-submit-button" id="contact-submit">
                <span class="cta-button-text"><?php echo esc_html($form_button_text); ?></span>
              </button>
            </div>
          </div>
          
          <!-- Loading State -->
          <div id="form-loading" class="form-loading" style="display: none;">
            <p><?php esc_html_e('Submitting your request...', 'aetherbloom'); ?></p>
          </div>
          
          <!-- Success Message -->
          <div id="form-success" class="form-message success" style="display: none;">
            <p><?php esc_html_e('Thank you! Redirecting to book your assessment...', 'aetherbloom'); ?></p>
          </div>
          
          <!-- Error Message -->
          <div id="form-error" class="form-message error" style="display: none;">
            <p><?php esc_html_e('Something went wrong. Please try again.', 'aetherbloom'); ?></p>
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

// Form summary update functionality
document.addEventListener('DOMContentLoaded', function() {
    const summaryContent = document.getElementById('summary-content');
    const steps = document.querySelectorAll('.form-step');
    
    // Function to update summary when reaching step 3
    function updateFormSummary() {
        if (!summaryContent) return;
        
        const formData = {
            company: document.getElementById('company-name')?.value || '',
            firstname: document.getElementById('first-name')?.value || '',
            lastname: document.getElementById('last-name')?.value || '',
            email: document.getElementById('contact-email')?.value || '',
            phone: document.getElementById('phone-number')?.value || '',
            primary_service: document.getElementById('primary-service')?.value || '',
            addon_services: []
        };
        
        // Get selected addon services
        const addonCheckboxes = document.querySelectorAll('input[name="addon_services"]:checked');
        addonCheckboxes.forEach(checkbox => {
            formData.addon_services.push(checkbox.value);
        });
        
        let summaryHTML = '';
        
        if (formData.company || formData.firstname || formData.lastname) {
            summaryHTML += `<strong>Contact:</strong> ${formData.firstname} ${formData.lastname}`;
            if (formData.company) {
                summaryHTML += ` (${formData.company})`;
            }
            summaryHTML += '<br>';
        }
        
        if (formData.email) {
            summaryHTML += `<strong>Email:</strong> ${formData.email}<br>`;
        }
        
        if (formData.phone) {
            summaryHTML += `<strong>Phone:</strong> ${formData.phone}<br>`;
        }
        
        if (formData.primary_service) {
            summaryHTML += `<strong>Primary Service:</strong> ${formData.primary_service}<br>`;
        }
        
        if (formData.addon_services.length > 0) {
            summaryHTML += `<strong>Additional Services:</strong> ${formData.addon_services.join(', ')}<br>`;
        }
        
        if (summaryHTML) {
            summaryContent.innerHTML = summaryHTML;
        } else {
            summaryContent.innerHTML = '<?php esc_html_e('Please fill in the previous steps to see your assessment details.', 'aetherbloom'); ?>';
        }
    }
    
    // Update summary when step 3 becomes active
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                const step3 = document.getElementById('step-3');
                if (step3 && step3.classList.contains('active')) {
                    setTimeout(updateFormSummary, 100);
                }
            }
        });
    });
    
    // Observe step 3 for class changes
    const step3 = document.getElementById('step-3');
    if (step3) {
        observer.observe(step3, { attributes: true });
    }
    
    // Also update summary when form inputs change (if we're on step 3)
    const formInputs = document.querySelectorAll('#contact-form input, #contact-form select');
    formInputs.forEach(input => {
        input.addEventListener('change', function() {
            const step3 = document.getElementById('step-3');
            if (step3 && step3.classList.contains('active')) {
                updateFormSummary();
            }
        });
    });
});
</script>