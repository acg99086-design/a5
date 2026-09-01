document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { header.classList.add('scrolled'); }
    else { header.classList.remove('scrolled'); }
  });

  const toggleBtn = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (toggleBtn && mainNav) {
    toggleBtn.addEventListener('click', () => {
      const isOpen = mainNav.style.display === 'flex';
      mainNav.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        mainNav.style.flexDirection = 'column'; mainNav.style.position = 'absolute';
        mainNav.style.top = '100%'; mainNav.style.left = '0'; mainNav.style.right = '0';
        mainNav.style.background = 'rgba(12, 17, 22, 0.98)'; mainNav.style.padding = '24px';
      }
    });
  }

  const optionCards = document.querySelectorAll('.parka-option-card');
  const resultTitle = document.getElementById('parka-custom-title');
  const resultDesc = document.getElementById('parka-custom-desc');
  const resultBadge = document.getElementById('parka-custom-badge');

  const expeditionParkas = {
    'arctic8000': { title: 'The 8,000M Arctic Expedition Down Parka', desc: 'Crafted with 900 fill-power hydrophobic Polish white goose down, 30,000mm hydrostatic head 3-layer membrane, and Kevlar abrasion elbow panels.', badge: 'Thermal Threshold: -50°C Certified &bull; 900 Fill Goose Down' },
    'stormstorm': { title: 'The North Sea Heavy Weather Shell', desc: 'Monolithic seam-sealed waterproof shell with Cohaesive™ cord locks, magnetic storm flaps, and helmet-compatible 3-way storm hood.', badge: 'Hydrostatic Rating: 35,000mm Water Column Protection' },
    'alpinerunner': { title: 'The Glacial Fastpack Ultralight Parka', desc: 'Aerogel-infused synthetic insulation hybrid weighing only 480 grams with high-altitude windproof breathability.', badge: 'Weight-to-Warmth Ratio: 480g Total Garment Weight' }
  };

  if (optionCards.length > 0 && resultTitle) {
    optionCards.forEach(card => {
      card.addEventListener('click', () => {
        optionCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        const type = card.getAttribute('data-parka');
        if (expeditionParkas[type]) {
          resultTitle.textContent = expeditionParkas[type].title;
          resultDesc.textContent = expeditionParkas[type].desc;
          if (resultBadge) resultBadge.textContent = expeditionParkas[type].badge;
        }
      });
    });
  }

  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) { item.classList.add('active'); }
      });
    }
  });
});