<?php
/**
 * Template Name: Bhavik Enterprises — Authorised Distributor
 * Template Post Type: page
 *
 * Single-page profile for Bhavik Enterprises, authorised distributor of
 * Abiroverseas LLC.
 *
 * The banner reuses the theme's shared banner hook classes
 * (`ab-products-page` / `ab-products-hero*`) so the global banner layer in
 * assets/css/site.css gives this page exactly the same background, spacing,
 * eyebrow and breakpoint behaviour as every other page. Page-specific sections
 * live in assets/css/bhavik.css and the shared material-enquiry handler.
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
    array( 'name' => 'LDPE', 'full' => 'Low Density Polyethylene', 'icon' => 'leaf', 'note' => 'Flexible film, liners and soft-moulded parts where clarity and flexibility matter.' ),
    array( 'name' => 'HDPE', 'full' => 'High Density Polyethylene', 'icon' => 'cube', 'note' => 'Rigid containers, pipes, crates and industrial mouldings that need strength.' ),
    array( 'name' => 'PP', 'full' => 'Polypropylene', 'icon' => 'layers', 'note' => 'Injection-moulded components, caps, closures and woven packaging applications.' ),
    array( 'name' => 'PVC', 'full' => 'Polyvinyl Chloride', 'icon' => 'flask', 'note' => 'Pipes, profiles, cable insulation and rigid or flexible construction parts.' ),
    array( 'name' => 'Plastic Granules', 'full' => 'Wide Range of Granules', 'icon' => 'industry', 'note' => 'Granules across grades and colours, matched to the process and the end product.' ),
    array( 'name' => 'Virgin Polymers', 'full' => 'Reprocessed & Virgin Materials', 'icon' => 'shield', 'note' => 'Virgin and reprocessed supply, discussed against your documentation and requirement.' ),
);

$bv_industries = array(
    array( 'name' => 'Packaging', 'icon' => 'cube', 'note' => 'Film, liners and rigid packs' ),
    array( 'name' => 'Pipe Manufacturing', 'icon' => 'layers', 'note' => 'HDPE and PVC pipe grades' ),
    array( 'name' => 'Injection Moulding', 'icon' => 'flask', 'note' => 'PP, HDPE and engineering parts' ),
    array( 'name' => 'Industrial Products', 'icon' => 'industry', 'note' => 'Crates, parts and components' ),
    array( 'name' => 'Consumer Goods', 'icon' => 'users', 'note' => 'Household and lifestyle mouldings' ),
    array( 'name' => 'Recycling Units', 'icon' => 'leaf', 'note' => 'Reprocessed and virgin feedstock' ),
);

$bv_steps = array(
    array( 'no' => '01', 'title' => 'Share your requirement', 'text' => 'Send the material, grade, application, quantity and delivery location in one short enquiry.' ),
    array( 'no' => '02', 'title' => 'Requirement & grade review', 'text' => 'We review the specification in context and confirm what is actually needed for your process.' ),
    array( 'no' => '03', 'title' => 'Availability & pricing', 'text' => 'Availability, pack size, minimum order and competitive pricing are confirmed against the verified material.' ),
    array( 'no' => '04', 'title' => 'Quotation & dispatch', 'text' => 'You receive a clear quotation, and dispatch is planned across Kanpur, Mumbai and Mundra.' ),
);

$bv_faqs = array(
    array(
        'q' => 'Are you an authorised distributor of Abiroverseas LLC?',
        'a' => 'Yes. Bhavik Enterprises operates as the authorised distributor of Abiroverseas LLC, supplying polymer raw materials to processors and industrial buyers across India.',
    ),
    array(
        'q' => 'Which plastic raw materials do you supply?',
        'a' => 'LDPE, HDPE, PP, PVC and plastic granules in virgin and reprocessed forms. Share the grade, form and application you are working with and availability is confirmed for that requirement.',
    ),
    array(
        'q' => 'Can I request a quote or a sample?',
        'a' => 'Use the enquiry form on this page or call +91 7007049478. Include the material, grade, approximate quantity and destination so the quotation can be prepared without a second round of questions.',
    ),
    array(
        'q' => 'Where do you deliver?',
        'a' => 'Our head office is in Kanpur, with branches in Mumbai and Mundra. Delivery is confirmed per order based on quantity, pack size and location.',
    ),
);
?>
<main id="main-content" class="bv-page ab-products-page">

    <!-- 1. Banner — the headline line the client asked for. -->
    <section class="ab-products-hero" aria-labelledby="bv-title">
        <div class="ab-wrap ab-products-hero-grid">
            <div class="ab-products-hero-copy">
                <nav class="ab-products-breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Bhavik Enterprises</span>
                </nav>

                <span class="ab-eyebrow">Bhavik Enterprises · Kanpur</span>

                <h1 id="bv-title">Authorized Distributor of <span>Abiroverseas LLC</span></h1>

                <p>Premium plastic raw materials for India's processors — LDPE, HDPE, PP, PVC and plastic granules in virgin and reprocessed forms, with competitive pricing and on-time delivery.</p>

                <div class="bv-hero-actions">
                    <a class="ab-btn" href="#quick-enquiry">Request a quote
                        <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                    </a>
                    <a class="ab-btn ab-btn--light" href="#products">Explore materials</a>
                </div>

                <div class="ab-products-hero-proof">
                    <span><i aria-hidden="true"></i> 20+ years of trading</span>
                    <span><i aria-hidden="true"></i> 500+ clients served</span>
                    <span><i aria-hidden="true"></i> Kanpur · Mumbai · Mundra</span>
                </div>
            </div>

            <div class="ab-products-hero-art bv-hero-art" role="img" aria-label="Industrial polymer resin pellets">
                <img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Industrial polymer resin pellets" width="900" height="650" fetchpriority="high" decoding="async">
                <span class="ab-products-art-tag">Authorised · Abiroverseas LLC</span>
                <div class="ab-products-art-caption">
                    <span class="ab-products-caption-dot" aria-hidden="true"></span>
                    <span><small>Material partner in India</small><strong>Grade-aware supply, confirmed before dispatch.</strong></span>
                </div>
                <span class="ab-products-art-orbit" aria-hidden="true"></span>
            </div>
        </div>
    </section>

    <!-- 2. Trust strip -->
    <section class="bv-trust" aria-label="Supply highlights">
        <div class="ab-wrap bv-trust-grid">
            <div class="bv-trust-item">
                <span class="bv-trust-icon" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-shield" /></svg></span>
                <span><strong>Authorised distributor</strong><small>Abiroverseas LLC</small></span>
            </div>
            <div class="bv-trust-item">
                <span class="bv-trust-icon bv-trust-icon--orange" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-truck" /></svg></span>
                <span><strong>On-time delivery</strong><small>Planned per order</small></span>
            </div>
            <div class="bv-trust-item">
                <span class="bv-trust-icon" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-scale" /></svg></span>
                <span><strong>Competitive pricing</strong><small>Quoted against the grade</small></span>
            </div>
            <div class="bv-trust-item">
                <span class="bv-trust-icon bv-trust-icon--orange" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-file" /></svg></span>
                <span><strong>Documentation led</strong><small>Confirmed per enquiry</small></span>
            </div>
        </div>
    </section>

    <!-- 3. About — "Who we are" plus the proof numbers. -->
    <section class="ab-section bv-about" id="about" aria-labelledby="bv-about-title">
        <div class="ab-wrap bv-split">
            <div class="bv-split-copy bv-reveal">
                <span class="ab-eyebrow">About us</span>
                <h2 id="bv-about-title">Who we are</h2>
                <p>Bhavik Enterprises, based in Kanpur, is a trusted trader and supplier of premium plastic raw materials. We cater to diverse industrial requirements by providing high-grade polymers, competitive pricing and on-time delivery.</p>
                <p>As the authorised distributor of Abiroverseas LLC, we connect Indian processors with material discussed grade by grade — so specification, pack size and delivery terms are clear before an order is placed.</p>

                <div class="bv-stats">
                    <div class="bv-stat"><strong>20+</strong><span>Years of trading experience</span></div>
                    <div class="bv-stat"><strong>500+</strong><span>Clients served</span></div>
                    <div class="bv-stat"><strong>3</strong><span>Kanpur · Mumbai · Mundra</span></div>
                </div>

                <div class="bv-split-actions">
                    <a class="ab-btn ab-btn--blue" href="#quick-enquiry">Talk to our team</a>
                    <a class="bv-text-link" href="tel:<?php echo esc_attr( $bv_phone_raw ); ?>">
                        <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-phone" /></svg>
                        <?php echo esc_html( $bv_phone ); ?>
                    </a>
                </div>
            </div>

            <div class="bv-split-media bv-reveal bv-reveal-delay-1">
                <div class="bv-media-frame" role="img" aria-label="Virgin and reprocessed polymer granules">
                    <img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Virgin and reprocessed polymer granules side by side" width="900" height="700" loading="lazy" decoding="async">
                </div>
                <div class="bv-media-badge">
                    <span class="bv-media-badge-icon" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-handshake" /></svg></span>
                    <span><strong>Timely delivery</strong><small>Stock, pack size and dispatch confirmed per order.</small></span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Products -->
    <section class="ab-section ab-section--white bv-products" id="products" aria-labelledby="bv-products-title">
        <div class="ab-wrap">
            <div class="bv-section-head bv-reveal">
                <span class="ab-eyebrow">Our products</span>
                <h2 id="bv-products-title">Plastic raw materials we deal in</h2>
                <p>Virgin and reprocessed materials across the polymer families Indian processors ask for most. Tell us the application and we confirm the grade, form and availability.</p>
            </div>

            <div class="bv-card-grid">
                <?php foreach ( $bv_products as $product ) : ?>
                    <article class="bv-product-card bv-reveal">
                        <span class="bv-card-icon" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-<?php echo esc_attr( $product['icon'] ); ?>" /></svg></span>
                        <div class="bv-card-body">
                            <h3><?php echo esc_html( $product['name'] ); ?></h3>
                            <span class="bv-card-sub"><?php echo esc_html( $product['full'] ); ?></span>
                            <p><?php echo esc_html( $product['note'] ); ?></p>
                        </div>
                        <a class="bv-card-link" href="#quick-enquiry" data-bv-material="<?php echo esc_attr( $product['name'] ); ?>">
                            Request a quote
                            <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. Industries -->
    <section class="ab-section bv-industries" id="industries" aria-labelledby="bv-industries-title">
        <div class="ab-wrap">
            <div class="bv-section-head bv-reveal">
                <span class="ab-eyebrow">Industries we serve</span>
                <h2 id="bv-industries-title">Serving diverse industries</h2>
                <p>From packaging lines to recycling units, material is matched to how the product is actually made.</p>
            </div>

            <div class="bv-industry-grid">
                <?php foreach ( $bv_industries as $industry ) : ?>
                    <div class="bv-industry-card bv-reveal">
                        <span class="bv-card-icon bv-card-icon--soft" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-<?php echo esc_attr( $industry['icon'] ); ?>" /></svg></span>
                        <h3><?php echo esc_html( $industry['name'] ); ?></h3>
                        <p><?php echo esc_html( $industry['note'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. Quote process -->
    <section class="ab-section ab-section--white bv-process" id="process" aria-labelledby="bv-process-title">
        <div class="ab-wrap">
            <div class="bv-section-head bv-reveal">
                <span class="ab-eyebrow">How we work</span>
                <h2 id="bv-process-title">From enquiry to dispatch, in four clear steps</h2>
                <p>No guesswork on grade or pricing — each step is confirmed in writing before the next one starts.</p>
            </div>

            <ol class="bv-steps">
                <?php foreach ( $bv_steps as $step ) : ?>
                    <li class="bv-step bv-reveal">
                        <span class="bv-step-no"><?php echo esc_html( $step['no'] ); ?></span>
                        <h3><?php echo esc_html( $step['title'] ); ?></h3>
                        <p><?php echo esc_html( $step['text'] ); ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>

            <!-- Documentation and supply support, in the theme's supporting-sections language. -->
            <div class="bv-docs bv-reveal">
                <div class="bv-docs-copy">
                    <span class="ab-eyebrow">Supply support</span>
                    <h3>Documentation discussed with every order</h3>
                    <p>The commercial and technical details are agreed in writing, so the material that arrives matches the material that was quoted.</p>
                </div>
                <div class="bv-docs-list">
                    <div class="bv-docs-item">
                        <span aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-file" /></svg></span>
                        <strong>Grade details</strong>
                        <small>Current technical data for the confirmed material.</small>
                    </div>
                    <div class="bv-docs-item">
                        <span aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-scale" /></svg></span>
                        <strong>Pack size &amp; MOQ</strong>
                        <small>Bag, jumbo bag or loose — confirmed before dispatch.</small>
                    </div>
                    <div class="bv-docs-item">
                        <span aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-truck" /></svg></span>
                        <strong>Dispatch paperwork</strong>
                        <small>Invoice, e-way bill and delivery terms per order.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CTA band -->
    <section class="bv-cta" aria-labelledby="bv-cta-title">
        <div class="ab-wrap bv-cta-inner bv-reveal">
            <div class="bv-cta-copy">
                <span class="bv-cta-eyebrow">Ready when you are</span>
                <h2 id="bv-cta-title">Looking for a reliable plastic raw material supplier?</h2>
                <p>Get the best quality materials for your business. Send us your requirement today.</p>
            </div>
            <div class="bv-cta-actions">
                <a class="ab-btn" href="#quick-enquiry">Send your requirement
                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
                <a class="ab-btn ab-btn--ghost" href="tel:<?php echo esc_attr( $bv_phone_raw ); ?>">
                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-phone" /></svg>
                    <?php echo esc_html( $bv_phone ); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- 8. FAQs -->
    <section class="ab-section bv-faq" id="faqs" aria-labelledby="bv-faq-title">
        <div class="ab-wrap bv-faq-layout">
            <div class="bv-faq-side bv-reveal">
                <span class="ab-eyebrow">Common questions</span>
                <h2 id="bv-faq-title">Buying polymer material, made simple</h2>
                <p>Short answers to what buyers ask before the first order. Anything else, ask us directly.</p>
                <a class="bv-text-link" href="#quick-enquiry">
                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-chat" /></svg>
                    Ask a question
                </a>
            </div>

            <div class="bv-faq-list bv-reveal">
                <?php foreach ( $bv_faqs as $faq ) : ?>
                    <details class="bv-faq-item">
                        <summary><?php echo esc_html( $faq['q'] ); ?></summary>
                        <div class="bv-faq-answer"><p><?php echo esc_html( $faq['a'] ); ?></p></div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 9. Contact us block: "Get in touch", address, phone, email, presence. -->
    <section class="ab-section ab-section--white bv-contact" id="contact" aria-labelledby="bv-contact-title">
        <div class="ab-wrap">
            <div class="bv-contact-head bv-reveal">
                <span class="ab-eyebrow">Contact us</span>
                <h2 id="bv-contact-title">Get in touch</h2>
                <p>Reach the Bhavik Enterprises team in Kanpur. For a quotation, share the material, grade, quantity and delivery location.</p>
            </div>

            <div class="bv-contact-grid">
                <a class="bv-contact-row bv-contact-row--wide bv-reveal" href="https://maps.google.com/?q=<?php echo esc_attr( rawurlencode( $bv_address ) ); ?>" target="_blank" rel="noopener noreferrer">
                    <span class="bv-contact-mark" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-globe" /></svg></span>
                    <span class="bv-contact-text"><small>Visit us</small><strong><?php echo esc_html( $bv_address ); ?></strong></span>
                    <svg class="ab-icon bv-contact-go" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
                <a class="bv-contact-row bv-reveal" href="tel:<?php echo esc_attr( $bv_phone_raw ); ?>">
                    <span class="bv-contact-mark bv-contact-mark--orange" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-phone" /></svg></span>
                    <span class="bv-contact-text"><small>Call us</small><strong><?php echo esc_html( $bv_phone ); ?></strong></span>
                    <svg class="ab-icon bv-contact-go" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
                <a class="bv-contact-row bv-reveal" href="mailto:<?php echo esc_attr( $bv_email ); ?>">
                    <span class="bv-contact-mark bv-contact-mark--orange" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-mail" /></svg></span>
                    <span class="bv-contact-text"><small>Email us</small><strong><?php echo esc_html( $bv_email ); ?></strong></span>
                    <svg class="ab-icon bv-contact-go" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
                <a class="bv-contact-row bv-reveal" href="https://wa.me/917007049478" target="_blank" rel="noopener noreferrer">
                    <span class="bv-contact-mark bv-contact-mark--green" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-whatsapp" /></svg></span>
                    <span class="bv-contact-text"><small>WhatsApp</small><strong><?php echo esc_html( $bv_phone ); ?></strong></span>
                    <svg class="ab-icon bv-contact-go" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                </a>
                <div class="bv-presence bv-reveal">
                    <span class="bv-presence-title">Our presence</span>
                    <div class="bv-presence-item">
                        <span class="bv-presence-mark" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-target" /></svg></span>
                        <span><small>Head office</small><strong>Kanpur</strong></span>
                    </div>
                    <div class="bv-presence-item">
                        <span class="bv-presence-mark bv-presence-mark--orange" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-globe" /></svg></span>
                        <span><small>Branches</small><strong>Mumbai · Mundra</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Last section: enquiry form, mirroring the Contact page's form section.
         Copy left / form right on desktop; copy first, form below at <=1023px. -->
    <section class="ab-section bv-enquiry" id="quick-enquiry" aria-labelledby="bv-enquiry-title">
        <div class="ab-wrap">
            <?php if ( 'sent' === $bv_result ) : ?>
                <div class="bv-notice bv-notice--success" role="status" aria-live="polite">
                    <strong>Thank you for your enquiry.</strong>
                    <span>Your requirement has reached Bhavik Enterprises. Our team will review the details and respond shortly.</span>
                </div>
            <?php elseif ( 'error' === $bv_result ) : ?>
                <div class="bv-notice bv-notice--error" role="alert">
                    <strong>We couldn't submit your enquiry.</strong>
                    <span>Please check the required fields and try again, or call <?php echo esc_html( $bv_phone ); ?>.</span>
                </div>
            <?php endif; ?>

            <div class="bv-enquiry-layout">
                <div class="bv-enquiry-copy bv-reveal">
                    <span class="ab-eyebrow">Request a quote</span>
                    <h2 id="bv-enquiry-title">Send us your requirement</h2>
                    <p>Tell us what you need and we will confirm availability, grade options and pricing against it — no catalogue guesswork, no repeated questions.</p>

                    <ul class="bv-enquiry-list">
                        <li><span aria-hidden="true">01</span> Material and grade you are working with</li>
                        <li><span aria-hidden="true">02</span> Form — granules, powder or compound</li>
                        <li><span aria-hidden="true">03</span> Approximate quantity and delivery location</li>
                        <li><span aria-hidden="true">04</span> Timeline, documentation or compliance needs</li>
                    </ul>

                    <div class="bv-enquiry-direct">
                        <a href="tel:<?php echo esc_attr( $bv_phone_raw ); ?>">
                            <span class="bv-contact-mark bv-contact-mark--orange" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-phone" /></svg></span>
                            <span><small>Prefer to talk?</small><strong><?php echo esc_html( $bv_phone ); ?></strong></span>
                        </a>
                        <a href="mailto:<?php echo esc_attr( $bv_email ); ?>">
                            <span class="bv-contact-mark" aria-hidden="true"><svg class="ab-icon"><use href="#ab-icon-mail" /></svg></span>
                            <span><small>Email the team</small><strong><?php echo esc_html( $bv_email ); ?></strong></span>
                        </a>
                    </div>
                </div>

                <form class="bv-form bv-reveal" id="bv-enquiry-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                    <input type="hidden" name="action" value="ab_material_enquiry">
                    <input type="hidden" name="enquiry_kind" value="general">
                    <?php wp_nonce_field( 'ab_material_enquiry', 'ab_material_enquiry_nonce' ); ?>
                    <label class="ab-honeypot" aria-hidden="true">Leave this field empty<input type="text" name="ab_website" tabindex="-1" autocomplete="off"></label>

                    <div class="bv-form-head">
                        <span class="bv-form-step">01 <i aria-hidden="true"></i> Your details</span>
                        <h3>Send us your enquiry</h3>
                        <p>Fields marked with an asterisk are required.</p>
                    </div>

                    <div class="bv-form-grid">
                        <div class="bv-field">
                            <label for="bv-name">Full name <span aria-hidden="true">*</span></label>
                            <input id="bv-name" name="name" type="text" autocomplete="name" required maxlength="120" placeholder="Your full name">
                        </div>
                        <div class="bv-field">
                            <label for="bv-email">Business email <span aria-hidden="true">*</span></label>
                            <input id="bv-email" name="email" type="email" autocomplete="email" required maxlength="254" placeholder="name@company.com">
                        </div>
                        <div class="bv-field">
                            <label for="bv-company">Company name</label>
                            <input id="bv-company" name="company" type="text" autocomplete="organization" maxlength="160" placeholder="Your company">
                        </div>
                        <div class="bv-field">
                            <label for="bv-phone">Phone / WhatsApp</label>
                            <input id="bv-phone" name="phone" type="tel" autocomplete="tel" maxlength="40" placeholder="+91">
                        </div>
                        <div class="bv-field">
                            <label for="bv-topic">Material required <span aria-hidden="true">*</span></label>
                            <select id="bv-topic" name="topic" required>
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
                        <div class="bv-field">
                            <label for="bv-quantity">Approx. quantity</label>
                            <input id="bv-quantity" name="quantity" type="text" maxlength="80" placeholder="e.g. 5 MT / month">
                        </div>
                        <div class="bv-field bv-field--full">
                            <label for="bv-message">Your requirement <span aria-hidden="true">*</span></label>
                            <textarea id="bv-message" name="message" required maxlength="5000" rows="5" placeholder="Grade, form, application, delivery location and timing."></textarea>
                        </div>
                    </div>

                    <div class="bv-form-foot">
                        <button class="ab-btn" type="submit">Submit enquiry
                            <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>
                        </button>
                        <span class="bv-form-note"><span aria-hidden="true">✓</span> Your details are only used to respond to this enquiry.</span>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
