<?php
// File: /wp-content/themes/aetherbloom/template-parts/hero.php

// Get custom field values with defaults
$hero_title_line1 = get_theme_mod('hero_title_line1', 'Your Business');
$hero_animated_texts = get_theme_mod('hero_animated_texts', 'Transformed.,Empowered.,in Full Bloom.');
$hero_description = get_theme_mod('hero_description', 'Scale your operations with expertly-sourced South African professionals trained to UK standards. Cut costs by 40%+ while scaling with confidence.');
$hero_learn_more_text = get_theme_mod('hero_learn_more_text', 'Learn More');
$hero_pricing_text = get_theme_mod('hero_pricing_text', 'See our Pricing');

// Convert comma-separated animated texts to array for JavaScript
$animated_texts_array = explode(',', $hero_animated_texts);
?>

<section class="hero-container" id="hero">
  <div class="hero-content section-content">
    <div class="hero-text">
      <h1 class="hero-title">
        <span class="title-line"><?php echo esc_html($hero_title_line1); ?></span>
        <span class="title-line-animated">
          <span class="animated-text fade-in" id="animated-text">
            <!-- Dynamic text will be inserted here by JavaScript -->
            <span class="letter" style="--letter-index: 0; --total-letters: 12; --reverse-index: 11;">T</span>
            <span class="letter" style="--letter-index: 1; --total-letters: 12; --reverse-index: 10;">r</span>
            <span class="letter" style="--letter-index: 2; --total-letters: 12; --reverse-index: 9;">a</span>
            <span class="letter" style="--letter-index: 3; --total-letters: 12; --reverse-index: 8;">n</span>
            <span class="letter" style="--letter-index: 4; --total-letters: 12; --reverse-index: 7;">s</span>
            <span class="letter" style="--letter-index: 5; --total-letters: 12; --reverse-index: 6;">f</span>
            <span class="letter" style="--letter-index: 6; --total-letters: 12; --reverse-index: 5;">o</span>
            <span class="letter" style="--letter-index: 7; --total-letters: 12; --reverse-index: 4;">r</span>
            <span class="letter" style="--letter-index: 8; --total-letters: 12; --reverse-index: 3;">m</span>
            <span class="letter" style="--letter-index: 9; --total-letters: 12; --reverse-index: 2;">e</span>
            <span class="letter" style="--letter-index: 10; --total-letters: 12; --reverse-index: 1;">d</span>
            <span class="letter" style="--letter-index: 11; --total-letters: 12; --reverse-index: 0;">.</span>
          </span>
        </span>
      </h1>
      
      <p class="hero-description">
        <?php echo esc_html($hero_description); ?>
      </p>
      
      <div class="hero-buttons">
        <a href="#why-aetherbloom" class="learn-more-btn">
          <?php echo esc_html($hero_learn_more_text); ?>
        </a>
        <a href="#pricing" class="hero-pricing-btn">
          <?php echo esc_html($hero_pricing_text); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// Pass PHP data to JavaScript
window.aetherbloomHeroData = {
    animatedTexts: <?php echo json_encode($animated_texts_array); ?>,
    currentTextIndex: 0,
    isTransitioning: false
};
</script>