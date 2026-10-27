# Abiroverseas Polymer Materials WordPress Theme

A custom classic WordPress theme built from the supplied final HTML layouts for **Home**, **About**, and the **HDPE material information page**. The third supplied layout is implemented as a normal WordPress Page template (not a product post type).

## Install

1. In WordPress, open **Appearance → Themes → Add New → Upload Theme**.
2. Upload `abiroverseas-theme.zip`, install it, and activate it.
3. Activation creates starter Home, About and HDPE Pages if they do not already exist, assigns the matching templates, and sets Home as the static front page.
4. Go to **Settings → Permalinks** and click **Save Changes** if `/knowledge/` or an article URL returns a 404.
5. Open **Appearance → Menus → Primary Menu** to edit the shared header navigation. A starter Primary Menu is created and assigned automatically when none is assigned. Reorder items, add links, and create submenus here.
6. Review the starter pages in **Pages** and update contact placeholders (company email and phone) from the supplied HTML layouts.

The theme does not overwrite existing page copy. It assigns the matching template to the starter pages it finds/creates and fills missing SEO/schema metadata.

## Page templates and isolated assets

- `page-templates/template-home.php` → Home (`assets/css/home.css`, `assets/js/home.js`)
- `page-templates/template-about.php` → About (`assets/css/about.css`, `assets/js/about.js`)
- `page-templates/template-material.php` → HDPE material information (`assets/css/material.css`, `assets/js/material.js`)
- Knowledge Center archive and article views have their own `assets/css/knowledge.css`, `assets/js/knowledge-hub.js`, and `assets/js/knowledge-single.js`.

The page templates retain the supplied HTML content and layout, with WordPress template wrappers, WordPress-safe asset URLs and internal links. All site sections (Home, About, HDPE information, and Knowledge Center) render the shared header from `header.php` and the same Home-style footer from `footer.php`; shared footer styling lives in `assets/css/site.css`. Its navigation is the registered WordPress `primary` menu location, managed under **Appearance → Menus**; activation seeds a starter menu but does not hard-code the menu items into page templates. Images use `get_theme_file_uri()` so their paths remain correct if the site is installed in a subdirectory or the theme folder is renamed. Internal site links use `home_url()`.

The shared header and site-wide footer use your WordPress upload logo at `/wp-content/uploads/2026/10/ABIR-Logo.png` through `home_url()`. The three new Home hero slides use your two provided upload images at `/wp-content/uploads/2026/10/Industrial-Resin-Pellets-and-Flowing-Waves.png` and `/wp-content/uploads/2026/10/Polymer-Pellets-in-a-Futuristic-Plant.png`. Confirm those files are present at these paths on the active WordPress site. The three additional banners are stacked beneath the original banner (not an overall auto-rotating hero). The final banner keeps the original Home hero gradient background and has a smooth four-image fade slider on its right side, with arrow navigation and selectable thumbnails. On mobile, that image gallery appears above the final banner copy.

## Knowledge Center

The custom post type is **Knowledge Center** (`knowledge`). Articles resolve to `/knowledge/{your-url-slug}/`. Each article has a dedicated **Exact URL slug** field independent of its title and description; the theme synchronizes that slug to the WordPress permalink. The field accepts one URL segment (e.g. `hdpe-vs-ldpe`).

Each article editor includes the core content structure, while allowing article-specific headings and comparison column labels. Numbered section labels are not forced on the article page. Direct answers, explanatory text, FAQ answers, selection notes, and the standard WordPress article editor support inline links and formatting. The WordPress Featured image appears on both the archive card and article hero.

The comparison table supports editable headings for all three columns and stacks as labeled cards on narrow mobile screens. FAQs feed the visible accordion and FAQPage structured data; answers support inline links. The unreliable custom-section builder has been removed. Add extra content with the native WordPress block editor, which supports headings, rich text, links, images, lists, quotes, tables, and groups; this block content appears after “Why materials differ” and before “When to consider”. The article-end CTA has per-article editable kicker, heading, copy, button label, and destination.

Taxonomies separate the browsing dimensions:

- **Knowledge Hub** — hierarchical topic/material hubs (HDPE, PP, LDPE / LLDPE, PVC, Recycled Polymers)
- **Product Type / Material** — filters resources by material family
- **Knowledge Topics** — comparisons, FAQs, grade selection, processing, applications, recycling/sustainability

The Knowledge Center archive supports article/product-name search plus independent Product Type, Topic and Knowledge Hub filters. On theme activation, the HDPE taxonomy terms and nine **draft** article starters are created for the examples in the request (HDPE grades, processing, applications, virgin vs recycled, HDPE vs LDPE, MFI, PCR vs PIR, grade selection, and FAQs). Drafts are intentionally unpublished and contain no invented technical claims: fill the section fields, select categories, review, and publish them when ready.

## SEO and schema

- Native WordPress Pages and Knowledge Articles have per-entry SEO title and meta description fields.
- Pages have a selectable WebPage/AboutPage/ContactPage/CollectionPage schema type.
- Knowledge articles emit Article schema.
- FAQPage schema is generated from the page FAQ fields or the article FAQ rows. The About and HDPE starter pages receive FAQ rows extracted from the supplied visible FAQs.
- The `/knowledge/` archive also has editable title/description settings under **Knowledge Center → Hub SEO** and outputs CollectionPage schema. If Yoast SEO, Rank Math, or AIOSEO is active, the theme passes title/description to its supported filters and avoids duplicate page schema; the theme still emits FAQPage schema from its FAQ rows.

The supplied HTML's visible static page FAQs remain as authored. If you later edit the separate Page FAQ schema rows, keep them synchronized with the visible FAQ copy.

## Enquiry forms

The supplied Home and HDPE enquiry forms now submit to WordPress `admin-post.php`. They validate a nonce and a honeypot, sanitize fields, email the submission to the WordPress **Administration Email Address**, and redirect back with a success/error message. The optional HDPE attachment allows the listed document/image formats up to 5 MB and is attached to the email from the temporary upload; it is not copied into the public media library.

Set a real destination under **Settings → General → Administration Email Address** and verify outgoing email on your host. A transactional SMTP plugin/service is recommended for reliable delivery. Replace the layout's “Add company email” / “Add contact number” contact placeholders before launch.

## Shared footer

Every page uses the same footer markup from `footer.php` and shared styling from `assets/css/site.css`. The footer markup is no longer duplicated inside the Home, About, HDPE, or Knowledge templates.

## Implementation notes

- No WooCommerce or product CPT is registered.
- Knowledge content and SEO/schema fields are managed with native WordPress post meta; no paid fields plugin is required.
- Theme requires WordPress 6.0+ and PHP 7.4+.
