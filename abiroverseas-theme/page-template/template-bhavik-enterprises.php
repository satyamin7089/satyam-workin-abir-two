<?php
/**
 * Template Name: Bhavik Enterprises
 * Template Post Type: page
 *
 * Bhavik Enterprises — authorised distributor of Abiroverseas LLC.
 *
 * This page is assembled entirely from components that already exist in the
 * theme, so it looks and behaves exactly like the About, Contact and material
 * pages:
 *
 *   banner ............ .ab-about-hero      (about.css + the banner layer in site.css)
 *   trust pillars ..... .ab-pillars         (about.css)
 *   who we are ........ .ab-story           (about.css)
 *   products .......... .ab-why-grid        (about.css)
 *   industries ........ .ab-promise-grid    (about.css)
 *   how we work ....... .ab-way-section     (about.css)
 *   FAQs .............. .ab-faq-section     (about.css — light band, so the two
 *                                            dark sections never touch)
 *   call to action .... .ab-final-cta       (about.css)
 *   contact + form .... .ab-contact-layout  (contact.css — the Contact page's
 *                                            second section, used as-is)
 *
 * No page-specific stylesheet and no page-specific classes: the enqueue in
 * functions.php loads about.css + contact.css, the same files the About and
 * Contact pages load. Typography, spacing, radii and shadows are therefore the
 * theme's own values by definition.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();

$bv_phone     = '+91 7007049478';
$bv_phone_raw = '+917007049478';
$bv_email     = 'info@bhavikenterprises.com';
$bv_address   = 'Village Barhat Bangar, Mandhana Bithoor Road, Kanpur – 209217, UP, India';

$bv_result = '';
if ( isset( $_GET['ab_enquiry'] ) && is_scalar( $_GET['ab_enquiry'] ) ) {
    $bv_result = sanitize_key( wp_unslash( $_GET['ab_enquiry'] ) );
}

$bv_products = array(
    array( 'name' => 'LDPE', 'grade' => 'Low Density Polyethylene', 'text' => 'Flexible film, liners and soft-moulded parts where flexibility and clarity matter.' ),
    array( 'name' => 'HDPE', 'grade' => 'High Density Polyethylene', 'text' => 'Rigid containers, pipes, crates and industrial mouldings that need strength.' ),
    array( 'name' => 'PP', 'grade' => 'Polypropylene', 'text' => 'Injection-moulded components, caps, closures and woven packaging applications.' ),
    array( 'name' => 'PVC', 'grade' => 'Polyvinyl Chloride', 'text' => 'Pipes, profiles, cable insulation and rigid or flexible construction parts.' ),
    array( 'name' => 'Plastic Granules', 'grade' => 'Wide Range of Granules', 'text' => 'Granules across grades and colours, matched to the process and the end product.' ),
    array( 'name' => 'Virgin Polymers', 'grade' => 'Reprocessed & Virgin Materials', 'text' => 'Virgin and reprocessed supply, discussed against your documentation and requirement.' ),
);

$bv_industries = array(
    array( 'name' => 'Packaging', 'icon' => 'cube', 'text' => 'Film, liners and rigid packs.' ),
    array( 'name' => 'Pipe Manufacturing', 'icon' => 'layers', 'text' => 'HDPE and PVC pipe grades.' ),
    array( 'name' => 'Injection Moulding', 'icon' => 'flask', 'text' => 'PP and HDPE moulded components.' ),
    array( 'name' => 'Industrial Products', 'icon' => 'industry', 'text' => 'Crates, parts and components.' ),
    array( 'name' => 'Consumer Goods', 'icon' => 'users', 'text' => 'Household and lifestyle mouldings.' ),
    array( 'name' => 'Recycling Units', 'icon' => 'leaf', 'text' => 'Reprocessed and virgin feedstock.' ),
);

$bv_steps = array(
    array( 'no' => '01', 'title' => 'Enquiry', 'text' => 'You share the material, grade, application, quantity and delivery location.' ),
    array( 'no' => '02', 'title' => 'Review', 'text' => 'We review the requirement and the grade in the context of your process.' ),
    array( 'no' => '03', 'title' => 'Pricing', 'text' => 'Availability, pack size and competitive pricing are confirmed for that material.' ),
    array( 'no' => '04', 'title' => 'Dispatch', 'text' => 'On confirmation, the order is invoiced and dispatched from Kanpur, Mumbai or Mundra.' ),
);

$bv_faqs = array(
    array(
        'tag' => 'Distributorship',
        'q' => 'Are you an authorised distributor of Abiroverseas LLC?',
        'a' => 'Yes. Bhavik Enterprises operates as the authorised distributor of Abiroverseas LLC, supplying polymer raw materials to processors and industrial buyers across India.',
    ),
    array(
        'tag' => 'Materials',
        'q' => 'Which plastic raw materials do you supply?',
        'a' => 'LDPE, HDPE, PP, PVC and plastic granules in virgin and reprocessed forms. Share the grade, form and application you are working with and availability is confirmed for that requirement.',
    ),
    array(
        'tag' => 'Enquiry process',
        'q' => 'Can I request a quote or a sample?',
        'a' => 'Use the enquiry form on this page or call +91 7007049478. Include the material, grade, approximate quantity and destination so the quotation can be prepared without a second round of questions.',
    ),
    array(
        'tag' => 'Delivery',
        'q' => 'Where do you deliver?',
        'a' => 'Our head office is in Kanpur, with branches in Mumbai and Mundra. Delivery is confirmed per order based on quantity, pack size and location.',
    ),
);
?>
<main id="main-content" class="ab-contact-page ab-bhavik-page">

    <!-- 1. Banner -->
    <section class="ab-about-hero" aria-labelledby="bv-title">
        <div class="ab-wrap">
            <div class="ab-about-hero-grid">
                <div class="ab-about-hero-copy ab-reveal is-visible">
                    <span class="ab-eyebrow">Bhavik Enterprises · Kanpur</span>
                    <h1 id="bv-title">Authorized Distributor of <span>Abiroverseas LLC</span></h1>
                    <p class="lead">Premium plastic raw materials for India’s processors — LDPE, HDPE, PP, PVC and plastic granules in virgin and reprocessed forms, with high-grade polymers, competitive pricing and on-time delivery.</p>
                    <div class="ab-about-hero-actions">
                        <a class="ab-btn" href="#quick-enquiry">Request a quote
                            <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                        </a>
                        <a class="ab-btn ab-btn--outline" href="#products">Explore materials</a>
                    </div>
                </div>

                <div class="ab-about-hero-art ab-reveal ab-reveal-delay-1" role="img" aria-label="Polymer pellets — macro photograph of raw plastic material">
                    <img class="ab-hero-img" src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" width="700" height="520" alt="Polymer pellets — macro photograph" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Why buyers work with us -->
    <section class="ab-section ab-section--mist" id="why-bhavik" aria-labelledby="bv-why-title">
        <div class="ab-wrap">
            <div class="ab-section-head ab-reveal">
                <span class="ab-eyebrow">Why buyers work with us</span>
                <h2 id="bv-why-title">A distributor that keeps the details clear.</h2>
                <p>Authorised supply, straight answers and material that is confirmed before it is committed.</p>
            </div>

            <div class="ab-pillars">
                <article class="ab-pillar ab-reveal">
                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-shield" /></svg></div>
                    <h3>Authorised distributor</h3>
                    <p>Supplying as the authorised distributor of Abiroverseas LLC, with the grade and source stated plainly.</p>
                </article>
                <article class="ab-pillar ab-reveal ab-reveal-delay-1">
                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-scale" /></svg></div>
                    <h3>Competitive pricing</h3>
                    <p>Quotations are built around the material, pack size and quantity you actually need.</p>
                </article>
                <article class="ab-pillar ab-reveal ab-reveal-delay-2">
                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-truck" /></svg></div>
                    <h3>On-time delivery</h3>
                    <p>Dispatch is planned per order from Kanpur, with branches in Mumbai and Mundra.</p>
                </article>
                <article class="ab-pillar ab-reveal ab-reveal-delay-3">
                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-file" /></svg></div>
                    <h3>Documentation led</h3>
                    <p>Grade details, pack size and dispatch paperwork are agreed before the order moves.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Who we are -->
    <section class="ab-section ab-section--white" id="about" aria-labelledby="bv-about-title">
        <div class="ab-wrap ab-story">
            <div class="ab-story-visual ab-reveal ab-reveal-delay-1">
                <img class="ab-story-img" src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" width="560" height="500" alt="Virgin and reprocessed polymer granules side by side" loading="lazy" decoding="async">
                <div class="ab-story-badge">
                    <strong>Timely delivery</strong>
                    Stock, pack size and dispatch confirmed per order.
                </div>
            </div>

            <div class="ab-story-copy ab-reveal">
                <span class="ab-eyebrow">Who we are</span>
                <h2 id="bv-about-title">A Kanpur trader and supplier of premium plastic raw materials.</h2>
                <p>Bhavik Enterprises caters to diverse industrial requirements by providing <strong>high-grade polymers, competitive pricing and on-time delivery</strong>.</p>
                <p>As the authorised distributor of Abiroverseas LLC, we connect Indian processors with material discussed grade by grade — so the specification, pack size and delivery terms are clear before an order is placed.</p>
                <div class="ab-story-pills">
                    <span class="ab-story-pill">20+ Years</span>
                    <span class="ab-story-pill">500+ Clients</span>
                    <span class="ab-story-pill">Timely Delivery</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Our products -->
    <section class="ab-section" id="products" aria-labelledby="bv-products-title">
        <div class="ab-wrap">
            <div class="ab-section-head ab-reveal">
                <span class="ab-eyebrow">Our products</span>
                <h2 id="bv-products-title">Plastic raw materials we deal in.</h2>
                <p>Virgin and reprocessed materials across the polymer families Indian processors ask for most.</p>
            </div>

            <div class="ab-why-grid">
                <?php foreach ( $bv_products as $index => $product ) : ?>
                    <article class="ab-why-card ab-reveal<?php echo $index % 2 ? ' ab-reveal-delay-1' : ''; ?>">
                        <span class="ab-why-tag"><?php echo esc_html( $product['grade'] ); ?></span>
                        <h3><?php echo esc_html( $product['name'] ); ?></h3>
                        <p><?php echo esc_html( $product['text'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. Industries we serve -->
    <section class="ab-section ab-promise" id="industries" aria-labelledby="bv-industries-title">
        <div class="ab-wrap ab-promise-grid">
            <div class="ab-promise-copy ab-reveal">
                <span class="ab-eyebrow">Industries we serve</span>
                <h2 id="bv-industries-title">Serving diverse industries across India.</h2>
                <p>From packaging lines to recycling units, material is matched to how the product is actually made — not to a generic catalogue list.</p>

            </div>

            <div class="ab-promise-list ab-reveal ab-reveal-delay-1">
                <?php foreach ( $bv_industries as $industry ) : ?>
                    <div class="ab-promise-item">
                        <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-<?php echo esc_attr( $industry['icon'] ); ?>" /></svg></div>
                        <div>
                            <strong><?php echo esc_html( $industry['name'] ); ?></strong>
                            <p><?php echo esc_html( $industry['text'] ); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. How we work -->
    <section class="ab-section ab-way-section" id="the-way" aria-labelledby="bv-way-title">
        <div class="ab-wrap">
            <div class="ab-way-intro">
                <div class="ab-section-head ab-reveal">
                    <span class="ab-eyebrow">How we work</span>
                    <h2 id="bv-way-title">From enquiry to dispatch, in four clear steps.</h2>
                    <p>No guesswork on grade or pricing — each step is confirmed before the next one starts.</p>
                </div>
                <a class="ab-btn" href="#quick-enquiry">Share your requirement
                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
            </div>

            <div class="ab-way-grid">
                <?php foreach ( $bv_steps as $index => $step ) : ?>
                    <article class="ab-way-item ab-reveal<?php echo $index ? ' ab-reveal-delay-' . (int) $index : ''; ?>">
                        <div class="ab-way-no"><?php echo esc_html( $step['no'] ); ?></div>
                        <h3><?php echo esc_html( $step['title'] ); ?></h3>
                        <p><?php echo esc_html( $step['text'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 7. FAQs -->
    <section class="ab-section ab-faq-section" id="faqs" aria-labelledby="bv-faq-title">
        <div class="ab-wrap">
            <div class="ab-faq-grid">
                <aside class="ab-faq-side">
                    <div class="ab-faq-side-sticky ab-reveal">
                        <span class="ab-eyebrow">Common questions</span>
                        <h2 id="bv-faq-title">Buying polymer material, made simple.</h2>
                        <p class="lead">Short answers to what buyers ask before the first order. Anything else, ask us directly.</p>

                        <div class="ab-faq-help-card">
                            <div class="ab-faq-help-head">
                                <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-chat" /></svg></div>
                                <div>
                                    <strong class="ab-faq-help-title">Have a material requirement?</strong>
                                    <p class="ab-faq-help-sub">Share your grade, process and quantity for a clear response.</p>
                                </div>
                            </div>
                            <div class="ab-faq-help-actions">
                                <a href="#quick-enquiry" class="ab-btn">Start an enquiry
                                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                                </a>
                                <a href="mailto:<?php echo esc_attr( $bv_email ); ?>" class="ab-faq-help-link">
                                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-mail" /></svg>
                                    <?php echo esc_html( $bv_email ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="ab-faq-main ab-reveal ab-reveal-delay-1">
                    <div class="ab-faq-list">
                        <?php foreach ( $bv_faqs as $index => $faq ) : ?>
                            <details class="ab-faq-card"<?php echo 0 === $index ? ' open' : ''; ?>>
                                <summary class="ab-faq-summary">
                                    <div class="ab-faq-summary-content">
                                        <span class="ab-faq-category-tag"><?php echo esc_html( $faq['tag'] ); ?></span>
                                        <h3 class="ab-faq-q"><?php echo esc_html( $faq['q'] ); ?></h3>
                                    </div>
                                    <div class="ab-faq-trigger-icon" aria-hidden="true">
                                        <svg class="ab-icon"><use href="#ab-icon-plus" /></svg>
                                    </div>
                                </summary>
                                <div class="ab-faq-body">
                                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                                </div>
                            </details>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Call to action -->
    <section class="ab-final-cta" aria-labelledby="bv-cta-title">
        <div class="ab-wrap ab-final-inner">
            <div class="ab-final-copy">
                <span class="ab-eyebrow">Ready when you are</span>
                <h2 id="bv-cta-title">Looking for a reliable plastic raw material supplier?</h2>
                <p>Get the best quality materials for your business. Send us your requirement today.</p>
            </div>
            <div class="ab-final-actions">
                <a class="ab-btn" href="#quick-enquiry">Send us your requirement
                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
                <a class="ab-btn ab-btn--light" href="tel:<?php echo esc_attr( $bv_phone_raw ); ?>"><?php echo esc_html( $bv_phone ); ?></a>
            </div>
        </div>
    </section>

    <!-- 9. Get in touch + enquiry form (the Contact page's second section) -->
    <section class="ab-contact-main ab-section" id="quick-enquiry" aria-labelledby="bv-contact-title">
        <div class="ab-wrap">
            <div class="ab-contact-intro">
                <span class="ab-eyebrow">Contact us</span>
                <h2 id="bv-contact-title">Get in touch</h2>
                <p>Share the material, grade, quantity and delivery location. Our team confirms availability and pricing against your requirement.</p>
            </div>

            <?php if ( 'sent' === $bv_result ) : ?>
                <div class="ab-contact-notice ab-contact-notice--success" role="status" aria-live="polite">
                    <strong>Thank you for your enquiry.</strong>
                    <span>Your requirement has reached Bhavik Enterprises. Our team will review the details and respond shortly.</span>
                </div>
            <?php elseif ( 'error' === $bv_result ) : ?>
                <div class="ab-contact-notice ab-contact-notice--error" role="alert">
                    <strong>We couldn’t submit your enquiry.</strong>
                    <span>Please check the required fields and try again. If the problem continues, call us on <?php echo esc_html( $bv_phone ); ?>.</span>
                </div>
            <?php endif; ?>

            <div class="ab-contact-layout">
                <aside class="ab-contact-aside" aria-label="Bhavik Enterprises contact information">
                    <div class="ab-contact-aside-heading">
                        <span class="ab-contact-kicker">Bhavik Enterprises</span>
                        <h3>Contact us.</h3>
                        <p>Authorised distributor of Abiroverseas LLC. Reach the team in Kanpur, or send the requirement straight through the form.</p>
                    </div>

                    <a class="ab-contact-detail" href="https://maps.google.com/?q=<?php echo esc_attr( rawurlencode( $bv_address ) ); ?>" target="_blank" rel="noopener noreferrer">
                        <span class="ab-contact-detail-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M12 21s7-5.5 7-11a7 7 0 1 0-14 0c0 5.5 7 11 7 11z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.6" stroke="currentColor" stroke-width="1.7"/></svg>
                        </span>
                        <span><small>Visit us</small><strong><?php echo esc_html( $bv_address ); ?></strong></span>
                    </a>

                    <a class="ab-contact-detail" href="tel:<?php echo esc_attr( $bv_phone_raw ); ?>">
                        <span class="ab-contact-detail-icon ab-contact-detail-icon--orange" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M7.1 3.8H4.8c-.8 0-1.4.7-1.3 1.5.7 7.9 7.1 14.3 15 15 .8.1 1.5-.5 1.5-1.3v-2.3l-4.1-1-1.3 2a14.3 14.3 0 0 1-6.5-6.5l2-1.3-1-4.1z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span><small>Call us</small><strong><?php echo esc_html( $bv_phone ); ?></strong><em>Speak with our team</em></span>
                    </a>

                    <a class="ab-contact-detail" href="mailto:<?php echo esc_attr( $bv_email ); ?>">
                        <span class="ab-contact-detail-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M3.5 6.5h17v11h-17zM4 7l8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span><small>Email us</small><strong><?php echo esc_html( $bv_email ); ?></strong><em>For product and business enquiries</em></span>
                    </a>

                    <a class="ab-contact-detail" href="https://wa.me/917007049478" target="_blank" rel="noopener noreferrer">
                        <span class="ab-contact-detail-icon" aria-hidden="true">
                            <svg class="ab-icon" viewBox="0 0 24 24" fill="none"><use href="#ab-icon-whatsapp" /></svg>
                        </span>
                        <span><small>WhatsApp</small><strong><?php echo esc_html( $bv_phone ); ?></strong></span>
                    </a>

                    <div class="ab-contact-detail">
                        <span class="ab-contact-detail-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M4 20V7l8-4 8 4v13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 20v-6h6v6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span><small>Our presence · head office</small><strong>Kanpur</strong></span>
                    </div>

                    <div class="ab-contact-detail">
                        <span class="ab-contact-detail-icon ab-contact-detail-icon--orange" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none"><path d="M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18zM3 12h18M12 3c2.6 2.4 4 5.6 4 9s-1.4 6.6-4 9c-2.6-2.4-4-5.6-4-9s1.4-6.6 4-9z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span><small>Our presence · branches</small><strong>Mumbai · Mundra</strong></span>
                    </div>

                    <div class="ab-contact-aside-note"><span class="ab-contact-note-dot" aria-hidden="true"></span><p>Helpful details include material type, grade, required form, application, approximate quantity and destination.</p></div>
                    <div class="ab-contact-aside-decoration" aria-hidden="true"><span></span><span></span><span></span></div>
                </aside>

                <form class="ab-form-card ab-contact-form" id="bhavik-enquiry-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                    <input type="hidden" name="action" value="ab_material_enquiry">
                    <input type="hidden" name="enquiry_kind" value="general">
                    <?php wp_nonce_field( 'ab_material_enquiry', 'ab_material_enquiry_nonce' ); ?>
                    <label class="ab-honeypot" aria-hidden="true">Leave this field empty<input type="text" name="ab_website" tabindex="-1" autocomplete="off"></label>

                    <div class="ab-contact-form-heading">
                        <span class="ab-contact-step">01 <i aria-hidden="true"></i> YOUR DETAILS</span>
                        <h3>Send us your enquiry</h3>
                        <p>Fields marked with an asterisk are required.</p>
                    </div>

                    <div class="ab-form-grid">
                        <div class="ab-field">
                            <label for="bhavik-name">Full name <span aria-hidden="true">*</span></label>
                            <input id="bhavik-name" name="name" type="text" autocomplete="name" required maxlength="120" placeholder="Your full name">
                        </div>
                        <div class="ab-field">
                            <label for="bhavik-email">Business email <span aria-hidden="true">*</span></label>
                            <input id="bhavik-email" name="email" type="email" autocomplete="email" required maxlength="254" placeholder="name@company.com">
                        </div>
                        <div class="ab-field">
                            <label for="bhavik-company">Company name</label>
                            <input id="bhavik-company" name="company" type="text" autocomplete="organization" maxlength="160" placeholder="Your company">
                        </div>
                        <div class="ab-field">
                            <label for="bhavik-phone">Phone / WhatsApp</label>
                            <input id="bhavik-phone" name="phone" type="tel" autocomplete="tel" maxlength="40" placeholder="+91">
                        </div>
                        <div class="ab-field">
                            <label for="bhavik-topic">Material required <span aria-hidden="true">*</span></label>
                            <select id="bhavik-topic" name="topic" required>
                                <option value="">Choose a material</option>
                                <option>LDPE</option>
                                <option>HDPE</option>
                                <option>PP</option>
                                <option>PVC</option>
                                <option>Plastic Granules</option>
                                <option>Virgin Polymers</option>
                                <option>Reprocessed material</option>
                                <option>General business enquiry</option>
                            </select>
                        </div>
                        <div class="ab-field">
                            <label for="bhavik-quantity">Approx. quantity</label>
                            <input id="bhavik-quantity" name="quantity" type="text" maxlength="80" placeholder="e.g. 5 MT / month">
                        </div>
                        <div class="ab-field ab-field--full">
                            <label for="bhavik-message">How can we help? <span aria-hidden="true">*</span></label>
                            <textarea id="bhavik-message" name="message" required maxlength="5000" rows="5" placeholder="Tell us about the material, grade, form, application, quantity, or timing you have in mind."></textarea>
                        </div>
                    </div>

                    <div class="ab-form-foot">
                        <button class="ab-btn ab-btn--blue ab-contact-submit" type="submit">Submit enquiry <span aria-hidden="true">↗</span></button>
                        <span class="ab-contact-secure-note"><span aria-hidden="true">✓</span> Your details are used to respond to your enquiry.</span>
                    </div>
                    <p class="ab-form-disclaimer">Your message is sent to the site administrator email configured in WordPress.</p>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
