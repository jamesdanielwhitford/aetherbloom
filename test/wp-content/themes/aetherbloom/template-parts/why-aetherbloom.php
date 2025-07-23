<?php
// File: /wp-content/themes/aetherbloom/template-parts/why-aetherbloom.php

// Get custom field values with defaults
$section_title = get_theme_mod('why_section_title', '<strong>This is Aetherbloom:</strong><br><strong>How can we help you?</strong>');
$section_description = get_theme_mod('why_section_description', 'High-quality, ethical outsourcing<br>that streamline your business processes.');

// Default card data - can be made customizable through WordPress admin
$cards_data = array(
    array(
        'id' => 1,
        'title' => get_theme_mod('why_card_1_title', 'High Quality Recruitment'),
        'content' => get_theme_mod('why_card_1_content', 'Rigorous vetting process ensures only top-tier talent joins your team. Every candidate undergoes comprehensive skills assessment and cultural fit evaluation.'),
        'image' => get_theme_mod('why_card_1_image', get_template_directory_uri() . '/assets/images/quality-recruitment.webp')
    ),
    array(
        'id' => 2,
        'title' => get_theme_mod('why_card_2_title', 'Transparent Pricing'),
        'content' => get_theme_mod('why_card_2_content', 'No hidden costs or surprise fees. Clear, upfront pricing structure with detailed breakdown of all services and costs included in your package.'),
        'image' => get_theme_mod('why_card_2_image', get_template_directory_uri() . '/assets/images/transparent-pricing.webp')
    ),
    array(
        'id' => 3,
        'title' => get_theme_mod('why_card_3_title', 'Ethical Impact'),
        'content' => get_theme_mod('why_card_3_content', 'Supporting fair employment practices and sustainable business growth. We create meaningful career opportunities while delivering exceptional value.'),
        'image' => get_theme_mod('why_card_3_image', get_template_directory_uri() . '/assets/images/ethical-impact.webp')
    ),
    array(
        'id' => 4,
        'title' => get_theme_mod('why_card_4_title', 'GDPR Compliance'),
        'content' => get_theme_mod('why_card_4_content', 'Full adherence to UK and EU data protection regulations. Comprehensive security protocols ensure your data remains protected and compliant.'),
        'image' => get_theme_mod('why_card_4_image', get_template_directory_uri() . '/assets/images/gdpr-compliance.webp')
    )
);
?>

<section class="why-section" id="why-aetherbloom" data-section="why-aetherbloom">
  <div class="why-container">
    <div class="why-text-content">
      <h2 class="why-section-title">
        <?php echo wp_kses_post($section_title); ?>
      </h2>
      <div class="why-text-paragraph">
        <p>
          <?php echo wp_kses_post($section_description); ?>
        </p>
      </div>
    </div>

    <div class="why-cards-container">
      <div class="why-cards-grid" id="why-cards-grid">
        <?php foreach ($cards_data as $index => $card): ?>
          <div 
            class="why-card card-<?php echo ($index + 1); ?>" 
            data-card-index="<?php echo $index; ?>"
            data-card-id="<?php echo esc_attr($card['id']); ?>"
            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px) scale(1);"
          >
            <div class="why-card-image">
              <picture>
                <source media="(max-width: 400px)" srcset="<?php echo esc_url(str_replace('.webp', '-400w.webp', $card['image'])); ?>">
                <source media="(max-width: 800px)" srcset="<?php echo esc_url(str_replace('.webp', '-800w.webp', $card['image'])); ?>">
                <img 
                  src="<?php echo esc_url($card['image']); ?>" 
                  alt="<?php echo esc_attr($card['title']); ?>"
                  class="why-card-icon"
                  loading="lazy"
                  width="100" height="100"
                />
              </picture>
            </div>
            <div class="why-card-body">
              <h3 class="why-card-title"><?php echo esc_html($card['title']); ?></h3>
              <p class="why-card-content"><?php echo esc_html($card['content']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// Pass PHP data to JavaScript
window.aetherbloomWhyData = {
    cardsData: <?php echo json_encode($cards_data); ?>,
    sectionSelector: '.why-section'
};
</script>