(function () {
      var toggle = document.querySelector('.ab-nav-toggle');
      var nav = document.getElementById('primary-navigation');
      if (toggle && nav) {
        toggle.addEventListener('click', function () {
          var open = nav.classList.toggle('is-open');
          toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
      }
    })();

    (function () {
      var items = document.querySelectorAll('.ab-reveal');
      if (!('IntersectionObserver' in window)) {
        items.forEach(function (el) {el.classList.add('is-visible');});
        return;
      }
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add('is-visible');
            io.unobserve(e.target);
          }
        });
      }, {threshold: 0.12, rootMargin: '0px 0px -40px 0px'});
      items.forEach(function (el) {io.observe(el);});
    })();

    (function () {
      var faqTabs = document.querySelectorAll('[data-faq-filter]');
      var faqCards = document.querySelectorAll('.ab-faq-card');
      var faqEmpty = document.getElementById('ab-faq-empty');
      if (!faqTabs.length) return;

      faqTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
          var targetFilter = this.getAttribute('data-faq-filter');

          faqTabs.forEach(function (btn) {
            btn.classList.remove('is-active');
            btn.setAttribute('aria-selected', 'false');
          });
          this.classList.add('is-active');
          this.setAttribute('aria-selected', 'true');

          var visibleCount = 0;
          faqCards.forEach(function (card) {
            var category = card.getAttribute('data-category');
            if (targetFilter === 'all' || category === targetFilter) {
              card.style.display = '';
              visibleCount++;
            } else {
              card.style.display = 'none';
            }
          });

          if (faqEmpty) {
            faqEmpty.style.display = visibleCount === 0 ? 'block' : 'none';
          }
        });
      });
    })();

    document.querySelectorAll('[data-current-year]').forEach(function (el) {el.textContent = new Date().getFullYear();});
