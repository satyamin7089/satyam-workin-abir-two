
import html as _html, urllib.parse as _up

_out = []


def H(value):
    return _html.escape(str(value), quote=False)


def A(value):
    return _html.escape(str(value), quote=True)


def U(value):
    return str(value)


def sanitize(value):
    return ''.join(c for c in str(value).lower() if c.isalnum() or c in '-_')


def identity(value):
    return value


def rawurl(value):
    return _up.quote(str(value))


def admin_url(path):
    return 'https://example.test/wp-admin/' + str(path).lstrip('/')


def theme_uri(path=''):
    return 'https://example.test/wp-content/themes/abiroverseas-theme' + str(path)


def home_url(path=''):
    return 'https://example.test' + str(path)


def title():
    return 'Bhavik Enterprises'


def is_scalar(value):
    return isinstance(value, (str, int, float, bool))


def defined_true(name):
    return True


def isset(*values):
    return all(v is not None for v in values)


def empty(value):
    return not value


_GET = {}

_GET.update({})
if  not  defined_true( 'ABSPATH' ):
    pass
pass
bv_phone = '+91 7007049478'
bv_phone_raw = '+917007049478'
bv_email = 'info@bhavikenterprises.com'
bv_address = 'Village Barhat Bangar, Mandhana Bithoor Road, Kanpur – 209217, UP, India'
bv_result = ''
if isset( _GET['ab_enquiry'] )  and  is_scalar( _GET['ab_enquiry'] ):
    bv_result = sanitize( identity( _GET['ab_enquiry'] ) )
bv_products = [
    { 'name' : 'LDPE', 'grade' : 'Low Density Polyethylene', 'text' : 'Flexible film, liners and soft-moulded parts where flexibility and clarity matter.' },
    { 'name' : 'HDPE', 'grade' : 'High Density Polyethylene', 'text' : 'Rigid containers, pipes, crates and industrial mouldings that need strength.' },
    { 'name' : 'PP', 'grade' : 'Polypropylene', 'text' : 'Injection-moulded components, caps, closures and woven packaging applications.' },
    { 'name' : 'PVC', 'grade' : 'Polyvinyl Chloride', 'text' : 'Pipes, profiles, cable insulation and rigid or flexible construction parts.' },
    { 'name' : 'Plastic Granules', 'grade' : 'Wide Range of Granules', 'text' : 'Granules across grades and colours, matched to the process and the end product.' },
    { 'name' : 'Virgin Polymers', 'grade' : 'Reprocessed & Virgin Materials', 'text' : 'Virgin and reprocessed supply, discussed against your documentation and requirement.' },
]
bv_industries = [
    { 'name' : 'Packaging', 'icon' : 'cube', 'text' : 'Film, liners and rigid packs.' },
    { 'name' : 'Pipe Manufacturing', 'icon' : 'layers', 'text' : 'HDPE and PVC pipe grades.' },
    { 'name' : 'Injection Moulding', 'icon' : 'flask', 'text' : 'PP and HDPE moulded components.' },
    { 'name' : 'Industrial Products', 'icon' : 'industry', 'text' : 'Crates, parts and components.' },
    { 'name' : 'Consumer Goods', 'icon' : 'users', 'text' : 'Household and lifestyle mouldings.' },
    { 'name' : 'Recycling Units', 'icon' : 'leaf', 'text' : 'Reprocessed and virgin feedstock.' },
]
bv_steps = [
    { 'no' : '01', 'title' : 'Enquiry', 'text' : 'You share the material, grade, application, quantity and delivery location.' },
    { 'no' : '02', 'title' : 'Review', 'text' : 'We review the requirement and the grade in the context of your process.' },
    { 'no' : '03', 'title' : 'Pricing', 'text' : 'Availability, pack size and competitive pricing are confirmed for that material.' },
    { 'no' : '04', 'title' : 'Dispatch', 'text' : 'On confirmation, the order is invoiced and dispatched from Kanpur, Mumbai or Mundra.' },
]
bv_faqs = [
    {
        'tag' : 'Distributorship',
        'q' : 'Are you an authorised distributor of Abiroverseas LLC?',
        'a' : 'Yes. Bhavik Enterprises operates as the authorised distributor of Abiroverseas LLC, supplying polymer raw materials to processors and industrial buyers across India.',
    },
    {
        'tag' : 'Materials',
        'q' : 'Which plastic raw materials do you supply?',
        'a' : 'LDPE, HDPE, PP, PVC and plastic granules in virgin and reprocessed forms. Share the grade, form and application you are working with and availability is confirmed for that requirement.',
    },
    {
        'tag' : 'Enquiry process',
        'q' : 'Can I request a quote or a sample?',
        'a' : 'Use the enquiry form on this page or call +91 7007049478. Include the material, grade, approximate quantity and destination so the quotation can be prepared without a second round of questions.',
    },
    {
        'tag' : 'Delivery',
        'q' : 'Where do you deliver?',
        'a' : 'Our head office is in Kanpur, with branches in Mumbai and Mundra. Delivery is confirmed per order based on quantity, pack size and location.',
    },
]
_out.append('\n<main id="main-content" class="ab-contact-page ab-bhavik-page">\n\n    <!-- 1. Banner -->\n    <section class="ab-about-hero" aria-labelledby="bv-title">\n        <div class="ab-wrap">\n            <div class="ab-about-hero-grid">\n                <div class="ab-about-hero-copy ab-reveal is-visible">\n                    <span class="ab-eyebrow">Bhavik Enterprises · Kanpur</span>\n                    <h1 id="bv-title">Authorized Distributor of <span>Abiroverseas LLC</span></h1>\n                    <p class="lead">Premium plastic raw materials for India’s processors — LDPE, HDPE, PP, PVC and plastic granules in virgin and reprocessed forms, with high-grade polymers, competitive pricing and on-time delivery.</p>\n                    <div class="ab-about-hero-actions">\n                        <a class="ab-btn" href="#quick-enquiry">Request a quote\n                            <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>\n                        </a>\n                        <a class="ab-btn ab-btn--outline" href="#products">Explore materials</a>\n                    </div>\n                </div>\n\n                <div class="ab-about-hero-art ab-reveal ab-reveal-delay-1" role="img" aria-label="Polymer pellets — macro photograph of raw plastic material">\n                    <img class="ab-hero-img" src="')
_out.append(str(U( theme_uri( '/assets/img/pellets-macro.jpg' ) )))
_out.append('" width="700" height="520" alt="Polymer pellets — macro photograph" decoding="async">\n                </div>\n            </div>\n        </div>\n    </section>\n\n    <!-- 2. Why buyers work with us -->\n    <section class="ab-section ab-section--mist" id="why-bhavik" aria-labelledby="bv-why-title">\n        <div class="ab-wrap">\n            <div class="ab-section-head ab-reveal">\n                <span class="ab-eyebrow">Why buyers work with us</span>\n                <h2 id="bv-why-title">A distributor that keeps the details clear.</h2>\n                <p>Authorised supply, straight answers and material that is confirmed before it is committed.</p>\n            </div>\n\n            <div class="ab-pillars">\n                <article class="ab-pillar ab-reveal">\n                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-shield" /></svg></div>\n                    <h3>Authorised distributor</h3>\n                    <p>Supplying as the authorised distributor of Abiroverseas LLC, with the grade and source stated plainly.</p>\n                </article>\n                <article class="ab-pillar ab-reveal ab-reveal-delay-1">\n                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-scale" /></svg></div>\n                    <h3>Competitive pricing</h3>\n                    <p>Quotations are built around the material, pack size and quantity you actually need.</p>\n                </article>\n                <article class="ab-pillar ab-reveal ab-reveal-delay-2">\n                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-truck" /></svg></div>\n                    <h3>On-time delivery</h3>\n                    <p>Dispatch is planned per order from Kanpur, with branches in Mumbai and Mundra.</p>\n                </article>\n                <article class="ab-pillar ab-reveal ab-reveal-delay-3">\n                    <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-file" /></svg></div>\n                    <h3>Documentation led</h3>\n                    <p>Grade details, pack size and dispatch paperwork are agreed before the order moves.</p>\n                </article>\n            </div>\n        </div>\n    </section>\n\n    <!-- 3. Who we are -->\n    <section class="ab-section ab-section--white" id="about" aria-labelledby="bv-about-title">\n        <div class="ab-wrap ab-story">\n            <div class="ab-story-visual ab-reveal ab-reveal-delay-1">\n                <img class="ab-story-img" src="')
_out.append(str(U( theme_uri( '/assets/img/virgin-vs-recycled.jpg' ) )))
_out.append('" width="560" height="500" alt="Virgin and reprocessed polymer granules side by side" loading="lazy" decoding="async">\n                <div class="ab-story-badge">\n                    <strong>Timely delivery</strong>\n                    Stock, pack size and dispatch confirmed per order.\n                </div>\n            </div>\n\n            <div class="ab-story-copy ab-reveal">\n                <span class="ab-eyebrow">Who we are</span>\n                <h2 id="bv-about-title">A Kanpur trader and supplier of premium plastic raw materials.</h2>\n                <p>Bhavik Enterprises caters to diverse industrial requirements by providing <strong>high-grade polymers, competitive pricing and on-time delivery</strong>.</p>\n                <p>As the authorised distributor of Abiroverseas LLC, we connect Indian processors with material discussed grade by grade — so the specification, pack size and delivery terms are clear before an order is placed.</p>\n                <div class="ab-story-pills">\n                    <span class="ab-story-pill">20+ Years</span>\n                    <span class="ab-story-pill">500+ Clients</span>\n                    <span class="ab-story-pill">Timely Delivery</span>\n                </div>\n            </div>\n        </div>\n    </section>\n\n    <!-- 4. Our products -->\n    <section class="ab-section" id="products" aria-labelledby="bv-products-title">\n        <div class="ab-wrap">\n            <div class="ab-section-head ab-reveal">\n                <span class="ab-eyebrow">Our products</span>\n                <h2 id="bv-products-title">Plastic raw materials we deal in.</h2>\n                <p>Virgin and reprocessed materials across the polymer families Indian processors ask for most.</p>\n            </div>\n\n            <div class="ab-why-grid">\n                ')
for index, product in enumerate(bv_products):
    _out.append('\n                    <article class="ab-why-card ab-reveal')
    _out.append(str((' ab-reveal-delay-1' if index % 2 else '')))
    _out.append('">\n                        <span class="ab-why-tag">')
    _out.append(str(H( product['grade'] )))
    _out.append('</span>\n                        <h3>')
    _out.append(str(H( product['name'] )))
    _out.append('</h3>\n                        <p>')
    _out.append(str(H( product['text'] )))
    _out.append('</p>\n                    </article>\n                ')
_out.append('\n            </div>\n        </div>\n    </section>\n\n    <!-- 5. Industries we serve -->\n    <section class="ab-section ab-promise" id="industries" aria-labelledby="bv-industries-title">\n        <div class="ab-wrap ab-promise-grid">\n            <div class="ab-promise-copy ab-reveal">\n                <span class="ab-eyebrow">Industries we serve</span>\n                <h2 id="bv-industries-title">Serving diverse industries across India.</h2>\n                <p>From packaging lines to recycling units, material is matched to how the product is actually made — not to a generic catalogue list.</p>\n\n            </div>\n\n            <div class="ab-promise-list ab-reveal ab-reveal-delay-1">\n                ')
for industry in bv_industries:
    _out.append('\n                    <div class="ab-promise-item">\n                        <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-')
    _out.append(str(A( industry['icon'] )))
    _out.append('" /></svg></div>\n                        <div>\n                            <strong>')
    _out.append(str(H( industry['name'] )))
    _out.append('</strong>\n                            <p>')
    _out.append(str(H( industry['text'] )))
    _out.append('</p>\n                        </div>\n                    </div>\n                ')
_out.append('\n            </div>\n        </div>\n    </section>\n\n    <!-- 6. How we work -->\n    <section class="ab-section ab-way-section" id="the-way" aria-labelledby="bv-way-title">\n        <div class="ab-wrap">\n            <div class="ab-way-intro">\n                <div class="ab-section-head ab-reveal">\n                    <span class="ab-eyebrow">How we work</span>\n                    <h2 id="bv-way-title">From enquiry to dispatch, in four clear steps.</h2>\n                    <p>No guesswork on grade or pricing — each step is confirmed before the next one starts.</p>\n                </div>\n                <a class="ab-btn" href="#quick-enquiry">Share your requirement\n                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>\n                </a>\n            </div>\n\n            <div class="ab-way-grid">\n                ')
for index, step in enumerate(bv_steps):
    _out.append('\n                    <article class="ab-way-item ab-reveal')
    _out.append(str(((' ab-reveal-delay-' + str(int(index))) if index else '')))
    _out.append('">\n                        <div class="ab-way-no">')
    _out.append(str(H( step['no'] )))
    _out.append('</div>\n                        <h3>')
    _out.append(str(H( step['title'] )))
    _out.append('</h3>\n                        <p>')
    _out.append(str(H( step['text'] )))
    _out.append('</p>\n                    </article>\n                ')
_out.append('\n            </div>\n        </div>\n    </section>\n\n    <!-- 7. FAQs -->\n    <section class="ab-section ab-faq-section" id="faqs" aria-labelledby="bv-faq-title">\n        <div class="ab-wrap">\n            <div class="ab-faq-grid">\n                <aside class="ab-faq-side">\n                    <div class="ab-faq-side-sticky ab-reveal">\n                        <span class="ab-eyebrow">Common questions</span>\n                        <h2 id="bv-faq-title">Buying polymer material, made simple.</h2>\n                        <p class="lead">Short answers to what buyers ask before the first order. Anything else, ask us directly.</p>\n\n                        <div class="ab-faq-help-card">\n                            <div class="ab-faq-help-head">\n                                <div class="ab-icon-box"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-chat" /></svg></div>\n                                <div>\n                                    <strong class="ab-faq-help-title">Have a material requirement?</strong>\n                                    <p class="ab-faq-help-sub">Share your grade, process and quantity for a clear response.</p>\n                                </div>\n                            </div>\n                            <div class="ab-faq-help-actions">\n                                <a href="#quick-enquiry" class="ab-btn">Start an enquiry\n                                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>\n                                </a>\n                                <a href="mailto:')
_out.append(str(A( bv_email )))
_out.append('" class="ab-faq-help-link">\n                                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-mail" /></svg>\n                                    ')
_out.append(str(H( bv_email )))
_out.append('\n                                </a>\n                            </div>\n                        </div>\n                    </div>\n                </aside>\n\n                <div class="ab-faq-main ab-reveal ab-reveal-delay-1">\n                    <div class="ab-faq-list">\n                        ')
for index, faq in enumerate(bv_faqs):
    _out.append('\n                            <details class="ab-faq-card"')
    _out.append(str((' open' if 0 == index else '')))
    _out.append('>\n                                <summary class="ab-faq-summary">\n                                    <div class="ab-faq-summary-content">\n                                        <span class="ab-faq-category-tag">')
    _out.append(str(H( faq['tag'] )))
    _out.append('</span>\n                                        <h3 class="ab-faq-q">')
    _out.append(str(H( faq['q'] )))
    _out.append('</h3>\n                                    </div>\n                                    <div class="ab-faq-trigger-icon" aria-hidden="true">\n                                        <svg class="ab-icon"><use href="#ab-icon-plus" /></svg>\n                                    </div>\n                                </summary>\n                                <div class="ab-faq-body">\n                                    <p>')
    _out.append(str(H( faq['a'] )))
    _out.append('</p>\n                                </div>\n                            </details>\n                        ')
_out.append('\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section>\n\n    <!-- 8. Call to action -->\n    <section class="ab-final-cta" aria-labelledby="bv-cta-title">\n        <div class="ab-wrap ab-final-inner">\n            <div class="ab-final-copy">\n                <span class="ab-eyebrow">Ready when you are</span>\n                <h2 id="bv-cta-title">Looking for a reliable plastic raw material supplier?</h2>\n                <p>Get the best quality materials for your business. Send us your requirement today.</p>\n            </div>\n            <div class="ab-final-actions">\n                <a class="ab-btn" href="#quick-enquiry">Send us your requirement\n                    <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg>\n                </a>\n                <a class="ab-btn ab-btn--light" href="tel:')
_out.append(str(A( bv_phone_raw )))
_out.append('">')
_out.append(str(H( bv_phone )))
_out.append('</a>\n            </div>\n        </div>\n    </section>\n\n    <!-- 9. Get in touch + enquiry form (the Contact page\'s second section) -->\n    <section class="ab-contact-main ab-section" id="quick-enquiry" aria-labelledby="bv-contact-title">\n        <div class="ab-wrap">\n            <div class="ab-contact-intro">\n                <span class="ab-eyebrow">Contact us</span>\n                <h2 id="bv-contact-title">Get in touch</h2>\n                <p>Share the material, grade, quantity and delivery location. Our team confirms availability and pricing against your requirement.</p>\n            </div>\n\n            ')
if 'sent' == bv_result:
    _out.append('\n                <div class="ab-contact-notice ab-contact-notice--success" role="status" aria-live="polite">\n                    <strong>Thank you for your enquiry.</strong>\n                    <span>Your requirement has reached Bhavik Enterprises. Our team will review the details and respond shortly.</span>\n                </div>\n            ')
elif 'error' == bv_result:
    _out.append('\n                <div class="ab-contact-notice ab-contact-notice--error" role="alert">\n                    <strong>We couldn’t submit your enquiry.</strong>\n                    <span>Please check the required fields and try again. If the problem continues, call us on ')
    _out.append(str(H( bv_phone )))
    _out.append('.</span>\n                </div>\n            ')
_out.append('\n\n            <div class="ab-contact-layout">\n                <aside class="ab-contact-aside" aria-label="Bhavik Enterprises contact information">\n                    <div class="ab-contact-aside-heading">\n                        <span class="ab-contact-kicker">Bhavik Enterprises</span>\n                        <h3>Contact us.</h3>\n                        <p>Authorised distributor of Abiroverseas LLC. Reach the team in Kanpur, or send the requirement straight through the form.</p>\n                    </div>\n\n                    <a class="ab-contact-detail" href="https://maps.google.com/?q=')
_out.append(str(A( rawurl( bv_address ) )))
_out.append('" target="_blank" rel="noopener noreferrer">\n                        <span class="ab-contact-detail-icon" aria-hidden="true">\n                            <svg viewBox="0 0 24 24" fill="none"><path d="M12 21s7-5.5 7-11a7 7 0 1 0-14 0c0 5.5 7 11 7 11z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.6" stroke="currentColor" stroke-width="1.7"/></svg>\n                        </span>\n                        <span><small>Visit us</small><strong>')
_out.append(str(H( bv_address )))
_out.append('</strong></span>\n                    </a>\n\n                    <a class="ab-contact-detail" href="tel:')
_out.append(str(A( bv_phone_raw )))
_out.append('">\n                        <span class="ab-contact-detail-icon ab-contact-detail-icon--orange" aria-hidden="true">\n                            <svg viewBox="0 0 24 24" fill="none"><path d="M7.1 3.8H4.8c-.8 0-1.4.7-1.3 1.5.7 7.9 7.1 14.3 15 15 .8.1 1.5-.5 1.5-1.3v-2.3l-4.1-1-1.3 2a14.3 14.3 0 0 1-6.5-6.5l2-1.3-1-4.1z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>\n                        </span>\n                        <span><small>Call us</small><strong>')
_out.append(str(H( bv_phone )))
_out.append('</strong><em>Speak with our team</em></span>\n                    </a>\n\n                    <a class="ab-contact-detail" href="mailto:')
_out.append(str(A( bv_email )))
_out.append('">\n                        <span class="ab-contact-detail-icon" aria-hidden="true">\n                            <svg viewBox="0 0 24 24" fill="none"><path d="M3.5 6.5h17v11h-17zM4 7l8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>\n                        </span>\n                        <span><small>Email us</small><strong>')
_out.append(str(H( bv_email )))
_out.append('</strong><em>For product and business enquiries</em></span>\n                    </a>\n\n                    <a class="ab-contact-detail" href="https://wa.me/917007049478" target="_blank" rel="noopener noreferrer">\n                        <span class="ab-contact-detail-icon" aria-hidden="true">\n                            <svg class="ab-icon" viewBox="0 0 24 24" fill="none"><use href="#ab-icon-whatsapp" /></svg>\n                        </span>\n                        <span><small>WhatsApp</small><strong>')
_out.append(str(H( bv_phone )))
_out.append('</strong></span>\n                    </a>\n\n                    <div class="ab-contact-detail">\n                        <span class="ab-contact-detail-icon" aria-hidden="true">\n                            <svg viewBox="0 0 24 24" fill="none"><path d="M4 20V7l8-4 8 4v13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 20v-6h6v6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>\n                        </span>\n                        <span><small>Our presence · head office</small><strong>Kanpur</strong></span>\n                    </div>\n\n                    <div class="ab-contact-detail">\n                        <span class="ab-contact-detail-icon ab-contact-detail-icon--orange" aria-hidden="true">\n                            <svg viewBox="0 0 24 24" fill="none"><path d="M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18zM3 12h18M12 3c2.6 2.4 4 5.6 4 9s-1.4 6.6-4 9c-2.6-2.4-4-5.6-4-9s1.4-6.6 4-9z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>\n                        </span>\n                        <span><small>Our presence · branches</small><strong>Mumbai · Mundra</strong></span>\n                    </div>\n\n                    <div class="ab-contact-aside-note"><span class="ab-contact-note-dot" aria-hidden="true"></span><p>Helpful details include material type, grade, required form, application, approximate quantity and destination.</p></div>\n                    <div class="ab-contact-aside-decoration" aria-hidden="true"><span></span><span></span><span></span></div>\n                </aside>\n\n                <form class="ab-form-card ab-contact-form" id="bhavik-enquiry-form" action="')
_out.append(str(U( admin_url( 'admin-post.php' ) )))
_out.append('" method="post">\n                    <input type="hidden" name="action" value="ab_material_enquiry">\n                    <input type="hidden" name="enquiry_kind" value="general">\n                    ')
_out.append('<input type="hidden" id="' + 'ab_material_enquiry_nonce' + '" name="' + 'ab_material_enquiry_nonce' + '" value="nonce-abc123">')
_out.append('\n                    <label class="ab-honeypot" aria-hidden="true">Leave this field empty<input type="text" name="ab_website" tabindex="-1" autocomplete="off"></label>\n\n                    <div class="ab-contact-form-heading">\n                        <span class="ab-contact-step">01 <i aria-hidden="true"></i> YOUR DETAILS</span>\n                        <h3>Send us your enquiry</h3>\n                        <p>Fields marked with an asterisk are required.</p>\n                    </div>\n\n                    <div class="ab-form-grid">\n                        <div class="ab-field">\n                            <label for="bhavik-name">Full name <span aria-hidden="true">*</span></label>\n                            <input id="bhavik-name" name="name" type="text" autocomplete="name" required maxlength="120" placeholder="Your full name">\n                        </div>\n                        <div class="ab-field">\n                            <label for="bhavik-email">Business email <span aria-hidden="true">*</span></label>\n                            <input id="bhavik-email" name="email" type="email" autocomplete="email" required maxlength="254" placeholder="name@company.com">\n                        </div>\n                        <div class="ab-field">\n                            <label for="bhavik-company">Company name</label>\n                            <input id="bhavik-company" name="company" type="text" autocomplete="organization" maxlength="160" placeholder="Your company">\n                        </div>\n                        <div class="ab-field">\n                            <label for="bhavik-phone">Phone / WhatsApp</label>\n                            <input id="bhavik-phone" name="phone" type="tel" autocomplete="tel" maxlength="40" placeholder="+91">\n                        </div>\n                        <div class="ab-field">\n                            <label for="bhavik-topic">Material required <span aria-hidden="true">*</span></label>\n                            <select id="bhavik-topic" name="topic" required>\n                                <option value="">Choose a material</option>\n                                <option>LDPE</option>\n                                <option>HDPE</option>\n                                <option>PP</option>\n                                <option>PVC</option>\n                                <option>Plastic Granules</option>\n                                <option>Virgin Polymers</option>\n                                <option>Reprocessed material</option>\n                                <option>General business enquiry</option>\n                            </select>\n                        </div>\n                        <div class="ab-field">\n                            <label for="bhavik-quantity">Approx. quantity</label>\n                            <input id="bhavik-quantity" name="quantity" type="text" maxlength="80" placeholder="e.g. 5 MT / month">\n                        </div>\n                        <div class="ab-field ab-field--full">\n                            <label for="bhavik-message">How can we help? <span aria-hidden="true">*</span></label>\n                            <textarea id="bhavik-message" name="message" required maxlength="5000" rows="5" placeholder="Tell us about the material, grade, form, application, quantity, or timing you have in mind."></textarea>\n                        </div>\n                    </div>\n\n                    <div class="ab-form-foot">\n                        <button class="ab-btn ab-btn--blue ab-contact-submit" type="submit">Submit enquiry <span aria-hidden="true">↗</span></button>\n                        <span class="ab-contact-secure-note"><span aria-hidden="true">✓</span> Your details are used to respond to your enquiry.</span>\n                    </div>\n                    <p class="ab-form-disclaimer">Your message is sent to the site administrator email configured in WordPress.</p>\n                </form>\n            </div>\n        </div>\n    </section>\n</main>\n')
pass
_out.append('\n')
RESULT = "".join(_out)
