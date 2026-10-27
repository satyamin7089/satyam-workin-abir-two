<?php
/** Shared Home-style site footer used by every page and Knowledge Center view. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<footer class="ab-footer">
  <div class="ab-wrap">
    <div class="ab-footer-layout">
      <div class="ab-footer-brand">
        <a class="ab-logo-slot ab-footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Abiroverseas home">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/10/Abir-Logo_white-textr-1.png' ) ); ?>" alt="Abiroverseas logo" onerror="this.hidden=true;this.parentElement.classList.add('logo-missing')">
        </a>
        <p>Plastic raw materials for industrial applications. Share the specification and delivery requirement for review.</p>
        <div class="ab-footer-contact">
  <span>
    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-mail" /></svg>
    Email: <a href="mailto:info@abiroverseas.com" class="ab-footer-contact-link">info@abiroverseas.com</a>
  </span>
  <span>
    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-phone" /></svg>
    Phone: <a href="tel:+18565233366" class="ab-footer-contact-link">+1 (856) 523 3366</a>
  </span>
  <span class="ab-footer-whatsapp-line">
    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-whatsapp" /></svg>
    WhatsApp: <a href="https://wa.me/18565233366" class="ab-footer-contact-link ab-footer-whatsapp" target="_blank" rel="noopener noreferrer">+1 (856) 523 3366</a>
  </span>
</div>
      </div>
      <nav class="ab-footer-nav" aria-label="Footer product navigation">
        <strong>Explore</strong>
        <a href="<?php echo esc_url( home_url( '/#product-families' ) ); ?>">Products</a>
        <a href="<?php echo esc_url( home_url( '/#materials' ) ); ?>">Materials</a>
        <a href="<?php echo esc_url( home_url( '/#markets' ) ); ?>">Industries</a>
        <a href="<?php echo esc_url( home_url( '/hdpe/' ) ); ?>">HDPE material page</a>
      </nav>
      <nav class="ab-footer-nav" aria-label="Footer company navigation">
        <strong>Company</strong>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a>
        <a href="<?php echo esc_url( home_url( '/#quick-enquiry' ) ); ?>">Contact</a>
        <a href="<?php echo esc_url( home_url( '/knowledge/' ) ); ?>">Knowledge Center</a>
        <a href="<?php echo esc_url( home_url( '/hdpe/#faqs' ) ); ?>">HDPE FAQs</a>
        <a href="<?php echo esc_url( home_url( '/#certifications' ) ); ?>">Certifications</a>
        <a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>">Testimonials</a>
      </nav>
      <div class="ab-footer-action">
        <strong>Have a material requirement?</strong>
        <p>Start with the material, process and application details you know.</p>
        <a class="ab-btn" href="<?php echo esc_url( home_url( '/#quick-enquiry' ) ); ?>">REQUEST A QUOTE <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg></a>
      </div>
    </div>
    <div class="ab-footer-bottom">
      <span>© <?php echo esc_html( wp_date( 'Y' ) ); ?> Abiroverseas. All rights reserved.</span>
     <span >Design and Development by <a href="https://asrsbot.com/" style="font-weight:700; color:#82969f !important;">ASRSBot Technology</a></span>
    </div>
  </div>
</footer>
<button class="ab-scroll-top" type="button" aria-label="Scroll to top" title="Back to top">
  <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M12 19V5M6 11l6-6 6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
  </svg>
</button>
<?php wp_footer(); ?>
</body>
</html>