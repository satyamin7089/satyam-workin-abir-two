/**
 * Bhavik Enterprises page interactions.
 *
 * Two small jobs only:
 *  1. Reveal sections as they enter the viewport (adds .is-visible; content is
 *     fully visible without JS, so nothing depends on this running).
 *  2. Carry a product card's material into the enquiry form's "Material
 *     required" field so the visitor does not retype it.
 *
 * It never touches the navigation — navigation.js is the single controller
 * for the shared header.
 */
(function () {
    'use strict';

    var page = document.querySelector('.bv-page');
    if (!page) { return; }

    /* 1. Scroll reveal */
    var revealItems = page.querySelectorAll('.bv-reveal');

    if (revealItems.length) {
        if (!('IntersectionObserver' in window)) {
            Array.prototype.forEach.call(revealItems, function (item) {
                item.classList.add('is-visible');
            });
        } else {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) { return; }
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                });
            }, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });

            Array.prototype.forEach.call(revealItems, function (item) {
                observer.observe(item);
            });
        }
    }

    /* 2. Product card → material field */
    var materialField = document.getElementById('bv-topic');
    if (!materialField) { return; }

    Array.prototype.forEach.call(page.querySelectorAll('[data-bv-material]'), function (link) {
        link.addEventListener('click', function () {
            var material = link.getAttribute('data-bv-material');
            if (!material) { return; }

            var matched = false;
            Array.prototype.forEach.call(materialField.options, function (option) {
                if (option.value && option.value.indexOf(material) === 0) {
                    materialField.value = option.value;
                    matched = true;
                }
            });

            if (!matched) { return; }

            materialField.dispatchEvent(new Event('change', { bubbles: true }));

            window.setTimeout(function () {
                if (typeof materialField.focus === 'function') { materialField.focus({ preventScroll: true }); }
            }, 420);
        });
    });
}());
