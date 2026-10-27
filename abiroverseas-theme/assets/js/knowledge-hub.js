(() => {
  const toggle = document.querySelector('.ab-nav-toggle');
  const nav = document.querySelector('.ab-nav-links');
  if (!toggle || !nav) return;
  toggle.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') !== 'true';
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Close navigation menu' : 'Open navigation menu');
    nav.classList.toggle('is-open', open);
  });
  document.addEventListener('click', event => {
    if (window.innerWidth <= 850 && nav.classList.contains('is-open') && !nav.contains(event.target) && !toggle.contains(event.target)) {
      nav.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
})();
