<?php
/**
 * Template Name: Product Range — Detailed Cards
 * Template Post Type: page
 * Searchable directory with material guidance and comparison tables.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

?>
<main id="main-content" class="ab-products-page ab-product-range-page">
    <section class="ab-products-hero" aria-labelledby="ab-range-hero-title">
        <div class="ab-wrap ab-products-hero-grid">
            <div class="ab-products-hero-copy">
                <span class="ab-eyebrow">A closer look at material options</span>
                <h1 id="ab-range-hero-title">Find the right polymer for your process.</h1>
                <p>Review common forms, processing routes, and selection considerations across our material range. Final grade, availability, and specifications are confirmed against your enquiry.</p>
                <div class="ab-products-hero-proof"><span><i aria-hidden="true"></i> Material-first guidance</span><span><i aria-hidden="true"></i> Details verified before commitment</span></div>
            </div>
            <div class="ab-products-hero-art" role="img" aria-label="Close-up of polymer resin material">
                <img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Close-up of polymer resin material" width="900" height="650" fetchpriority="high">
                <span class="ab-products-art-tag">Grades · processing · fit</span>
                <div class="ab-products-art-caption"><span class="ab-products-caption-dot" aria-hidden="true"></span><span><small>Compare with context</small><strong>Start with your application and requirements.</strong></span></div>
                <span class="ab-products-art-orbit" aria-hidden="true"></span>
            </div>
        </div>
    </section>

    <section class="ab-products-catalog ab-section" aria-labelledby="ab-range-heading">
        <div class="ab-wrap">
            <div class="ab-products-section-head">
                <div><span class="ab-eyebrow">Material guide</span><h2 id="ab-range-heading">Explore the product range</h2><p>Use the search to narrow the directory. Compare common forms and processing considerations, then confirm the exact grade for your use case.</p></div>
                <span class="ab-products-total"><strong data-products-count>12</strong> materials</span>
            </div>
            <div class="ab-products-search-wrap">
                <label class="ab-products-search" for="ab-range-search"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.8"></circle><path d="m16 16 4.5 4.5"></path></svg><input id="ab-range-search" type="search" placeholder="Search materials, grades, processing or applications…" autocomplete="off" data-product-search aria-controls="ab-range-grid"><kbd>⌕</kbd></label>
                <p class="ab-products-search-hint">Results filter instantly as you type.</p>
            </div>
            <div class="ab-range-grid" id="ab-range-grid" data-product-grid>
                <article class="ab-range-card" id="pp" data-product-card data-search="Polypropylene PP polypropylene injection moulding extrusion packaging automotive household">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Polypropylene (PP)"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Polymer resin pellets" width="720" height="480" loading="lazy"><span class="ab-range-card-index">01</span></div>
                    <div class="ab-range-card-body"><h3>Polypropylene (PP)</h3><ul class="ab-range-points"><li>Available grades and forms depend on the intended application.</li><li>Commonly considered for injection moulding and extrusion routes.</li><li>Confirm grade, colour, impact needs, and end-use requirements.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / granules</td></tr><tr><th scope="row">Processing focus</th><td>Injection / extrusion</td></tr><tr><th scope="row">Compare with</th><td>HDPE: density and application needs differ by grade.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="hdpe" data-product-card data-search="High-Density Polyethylene HDPE high density polyethylene blow moulding pipe containers crates extrusion injection">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" aria-label="Enquire about High-Density Polyethylene (HDPE)"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Polymer material representing HDPE" width="720" height="480" loading="lazy"><span class="ab-range-card-index">02</span></div>
                    <div class="ab-range-card-body"><h3>High-Density Polyethylene (HDPE)</h3><ul class="ab-range-points"><li>Consider the required stiffness, impact performance, and service conditions.</li><li>Commonly used across blow moulding, extrusion, and selected injection applications.</li><li>Confirm whether virgin, recycled, or reprocessed material is suitable.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / granules / compounds</td></tr><tr><th scope="row">Processing focus</th><td>Blow moulding / extrusion</td></tr><tr><th scope="row">Compare with</th><td>LDPE / LLDPE: typically chosen for different flexibility needs.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="ldpe-lldpe" data-product-card data-search="LDPE LLDPE low density linear low density polyethylene film flexible packaging extrusion">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about LDPE / LLDPE"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Polymer pellets for flexible polyethylene applications" width="720" height="480" loading="lazy"><span class="ab-range-card-index">03</span></div>
                    <div class="ab-range-card-body"><h3>LDPE / LLDPE</h3><ul class="ab-range-points"><li>Useful starting families for flexible film and packaging enquiries.</li><li>Film grade selection depends on process conditions and target film performance.</li><li>Confirm film type, thickness range, sealing needs, and application.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / granules</td></tr><tr><th scope="row">Processing focus</th><td>Film extrusion</td></tr><tr><th scope="row">Compare with</th><td>HDPE: often selected where more flexibility is needed.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="pvc" data-product-card data-search="Polyvinyl Chloride PVC rigid flexible pipes profiles cable construction extrusion">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Polyvinyl Chloride (PVC)"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Polymer material for PVC applications" width="720" height="480" loading="lazy"><span class="ab-range-card-index">04</span></div>
                    <div class="ab-range-card-body"><h3>Polyvinyl Chloride (PVC)</h3><ul class="ab-range-points"><li>Rigid and flexible formulations serve different application requirements.</li><li>Processing and additives depend on the formulation and target product.</li><li>Confirm formulation, regulatory needs, colour, and end-use environment.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Compound / granules</td></tr><tr><th scope="row">Processing focus</th><td>Profile / pipe extrusion</td></tr><tr><th scope="row">Compare with</th><td>PE: formulation and service requirements differ substantially.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="pet" data-product-card data-search="Polyethylene Terephthalate PET packaging bottle sheet thermoforming injection">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Polyethylene Terephthalate (PET)"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Polymer pellets for PET applications" width="720" height="480" loading="lazy"><span class="ab-range-card-index">05</span></div>
                    <div class="ab-range-card-body"><h3>Polyethylene Terephthalate (PET)</h3><ul class="ab-range-points"><li>PET grade selection depends on packaging, sheet, or other end-use needs.</li><li>Moisture control and processing conditions can be important for many grades.</li><li>Confirm application, intrinsic viscosity where relevant, and documentation needs.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Resin / pellets</td></tr><tr><th scope="row">Processing focus</th><td>Packaging / sheet routes</td></tr><tr><th scope="row">Compare with</th><td>PP: clarity, barrier, and performance needs guide selection.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="abs" data-product-card data-search="Acrylonitrile Butadiene Styrene ABS engineering plastic impact surface finish injection moulding">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Acrylonitrile Butadiene Styrene (ABS)"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Industrial polymer material representing ABS" width="720" height="480" loading="lazy"><span class="ab-range-card-index">06</span></div>
                    <div class="ab-range-card-body"><h3>Acrylonitrile Butadiene Styrene (ABS)</h3><ul class="ab-range-points"><li>Consider impact, surface finish, colour, and dimensional requirements.</li><li>Often considered for injection-moulded components and housings.</li><li>Confirm heat exposure, appearance requirements, and applicable standards.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / granules</td></tr><tr><th scope="row">Processing focus</th><td>Injection moulding</td></tr><tr><th scope="row">Compare with</th><td>PS / HIPS: toughness and finish requirements may differ.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="ps-hips" data-product-card data-search="PS HIPS polystyrene high impact polystyrene thermoforming packaging injection">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Polystyrene / HIPS"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Polymer resin granules representing polystyrene" width="720" height="480" loading="lazy"><span class="ab-range-card-index">07</span></div>
                    <div class="ab-range-card-body"><h3>Polystyrene / HIPS</h3><ul class="ab-range-points"><li>General-purpose PS and HIPS have different impact characteristics.</li><li>Applications may include packaging, formed parts, and selected moulded products.</li><li>Confirm impact needs, food-contact requirements where relevant, and finish.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / granules</td></tr><tr><th scope="row">Processing focus</th><td>Injection / thermoforming</td></tr><tr><th scope="row">Compare with</th><td>ABS: compare impact, appearance, and application requirements.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="engineering-plastics" data-product-card data-search="Engineering Plastics nylon polyamide PC polycarbonate POM acetal performance polymers">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Engineering Plastics"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Industrial polymer material for engineering applications" width="720" height="480" loading="lazy"><span class="ab-range-card-index">08</span></div>
                    <div class="ab-range-card-body"><h3>Engineering Plastics</h3><ul class="ab-range-points"><li>Choose the polymer family around mechanical, thermal, and chemical demands.</li><li>Grade and reinforcement can significantly change performance and processing.</li><li>Confirm load, temperature, environment, tolerances, and applicable standards.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Resin / pellets / compounds</td></tr><tr><th scope="row">Processing focus</th><td>Grade-dependent moulding / extrusion</td></tr><tr><th scope="row">Compare with</th><td>Commodity polymers: selection follows the required performance envelope.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="masterbatch-additives" data-product-card data-search="Masterbatch Additives colour additive concentrate pigment UV stabiliser processing aid">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Masterbatch and Additives"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Close-up of polymer pellets representing masterbatch" width="720" height="480" loading="lazy"><span class="ab-range-card-index">09</span></div>
                    <div class="ab-range-card-body"><h3>Masterbatch &amp; Additives</h3><ul class="ab-range-points"><li>Colour and additive concentrates are selected for the base polymer and process.</li><li>Let-down ratio and compatibility must be confirmed for the intended formulation.</li><li>Share the carrier resin, target colour, dosage, and performance objective.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Concentrated pellets</td></tr><tr><th scope="row">Processing focus</th><td>Compounding / extrusion</td></tr><tr><th scope="row">Compare with</th><td>Pre-coloured resin: dosing and formulation flexibility differ.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="recycled-polymers" data-product-card data-search="Recycled Reprocessed Polymers PCR PIR post consumer post industrial polymer pellets">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Recycled and Reprocessed Polymers"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Virgin and recycled polymer material" width="720" height="480" loading="lazy"><span class="ab-range-card-index">10</span></div>
                    <div class="ab-range-card-body"><h3>Recycled &amp; Reprocessed Polymers</h3><ul class="ab-range-points"><li>Material source, consistency, and traceability should be reviewed for each enquiry.</li><li>Properties may vary with feedstock, sorting, processing, and grade.</li><li>Confirm application limits, test data, documentation, and acceptance criteria.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Reprocessed pellets / granules</td></tr><tr><th scope="row">Processing focus</th><td>Application and grade dependent</td></tr><tr><th scope="row">Compare with</th><td>Virgin resin: source, consistency, and documentation need review.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="industrial-compounds" data-product-card data-search="Industrial Polymer Compounds filled polymer reinforced compound custom formulation">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Industrial Polymer Compounds"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Industrial polymer compounds and resin pellets" width="720" height="480" loading="lazy"><span class="ab-range-card-index">11</span></div>
                    <div class="ab-range-card-body"><h3>Industrial Polymer Compounds</h3><ul class="ab-range-points"><li>Compounds can be formulated around specific processing or end-use needs.</li><li>Fillers, reinforcement, and additives affect weight, stiffness, and process behaviour.</li><li>Confirm composition, target properties, colour, and validation requirements.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / compounds</td></tr><tr><th scope="row">Processing focus</th><td>Formulation dependent</td></tr><tr><th scope="row">Compare with</th><td>Unfilled resin: additives and reinforcement alter the performance profile.</td></tr></tbody></table></div></div>
                </article>

                <article class="ab-range-card" id="polymer-forms" data-product-card data-search="Polymer Forms Supply pellets granules powder compound bulk bags packaging supply">
                    <a class="ab-range-card-click" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" aria-label="Enquire about Polymer Forms and Supply"><span aria-hidden="true">Enquire <span>↗</span></span></a>
                    <div class="ab-range-card-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="Polymer resin in material form" width="720" height="480" loading="lazy"><span class="ab-range-card-index">12</span></div>
                    <div class="ab-range-card-body"><h3>Polymer Forms &amp; Supply</h3><ul class="ab-range-points"><li>Available forms and packing depend on the specific material and source.</li><li>Match form and packaging to handling, storage, and processing requirements.</li><li>Confirm quantity, pack size, destination, timing, and required documentation.</li></ul><div class="ab-range-table-wrap"><table class="ab-range-table"><tbody><tr><th scope="row">Common forms</th><td>Pellets / granules / powder</td></tr><tr><th scope="row">Processing focus</th><td>Material and equipment dependent</td></tr><tr><th scope="row">Compare with</th><td>Compounds: formulation and intended processing need confirmation.</td></tr></tbody></table></div></div>
                </article>
            </div>
            <div class="ab-products-empty" data-products-empty hidden><strong>No matching materials found.</strong><span>Try an abbreviation such as PP, HDPE, PVC, or a processing term.</span></div>
            <p class="ab-products-live-status" data-products-status aria-live="polite" role="status">12 materials shown</p>
            <p class="ab-products-disclaimer">All Products Are Dummy</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>