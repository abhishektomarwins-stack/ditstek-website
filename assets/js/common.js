document.addEventListener('DOMContentLoaded', () => {
  const yearEl = document.getElementById('footer-year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  const marqueeWrappers = document.querySelectorAll('.marquee-wrapper');
  
  marqueeWrappers.forEach(marqueeWrapper => {
    const track = marqueeWrapper.querySelector('.marquee-track');
    if (track) {
      const originals = Array.from(track.children);
      for (let i = 0; i < 6; i++) {
        originals.forEach(img => track.appendChild(img.cloneNode(true)));
      }

      let paused = false;
      marqueeWrapper.addEventListener('mouseenter', () => { paused = true; });
      marqueeWrapper.addEventListener('mouseleave', () => { paused = false; });

      function startMarquee() {
        let half = 0;
        originals.forEach(img => {
          // Fallback to 120px gap if window matchMedia isn't used, sticking to original logic
          let gap = 120;
          if (window.innerWidth <= 991 && window.innerWidth > 576) gap = 60;
          if (window.innerWidth <= 576) gap = 30;
          half += img.getBoundingClientRect().width + gap;
        });
        if (half === 0) { setTimeout(startMarquee, 100); return; }
        let pos = 0;
        function tick() {
          if (!paused) {
            pos -= 1;
            if (pos <= -half) pos = 0;
            track.style.transform = 'translateX(' + pos + 'px)';
          }
          requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
      }

      window.addEventListener('load', startMarquee);
      // In case the load event already fired
      if (document.readyState === 'complete') {
        startMarquee();
      }
    }
  });
});

async function loadIncludes() {
  const elements = document.querySelectorAll('[common]');
  await Promise.all([...elements].map(async (el) => {
    const includePath = el.getAttribute('common');
    const res = await fetch(includePath);
    el.innerHTML = res.ok ? await res.text() : `<!-- failed: ${includePath} -->`;
  }));
}

loadIncludes().then(() => {
  const scriptEl = document.querySelector('script[src*="common.js"]');
  const isSubPage = scriptEl ? scriptEl.getAttribute('src').includes('../') : false;
  const subPagePrefix = isSubPage ? '../' : '';

  function normalizeCommonPath(value) {
    if (!value || value === '#' || /^(https?:|mailto:|tel:|\/|\.\/|\.\.\/)/.test(value)) {
      return value;
    }

    if (
      value === 'index.php' ||
      value.startsWith('assets/') ||
      value.startsWith('pages/') ||
      value.startsWith('services/')
    ) {
      return `${subPagePrefix}${value}`;
    }

    return value;
  }

  document.querySelectorAll('header a[href], footer a[href], .site-footer-dark a[href]').forEach(link => {
    link.setAttribute('href', normalizeCommonPath(link.getAttribute('href')));
  });

  document.querySelectorAll('header img[src], footer img[src], .site-footer-dark img[src]').forEach(image => {
    image.setAttribute('src', normalizeCommonPath(image.getAttribute('src')));
  });

  const logoLink = document.querySelector('.navbar-brand');
  if (logoLink) {
    logoLink.href = isSubPage ? '../index.php' : 'index.php';
  }

  const navLogos = document.querySelectorAll('.nav-logo-img');
  navLogos.forEach(logo => {
    logo.src = isSubPage ? '../assets/images/svg/logo.svg' : 'assets/images/svg/logo.svg';
  });

  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
  const mobileMenuClose = document.getElementById('mobileMenuClose');

  function openMenu() {
    mobileMenu.classList.add('open');
    mobileMenuOverlay.classList.add('open');
    hamburgerBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileMenu.classList.remove('open');
    mobileMenuOverlay.classList.remove('open');
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMenu);
  if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMenu);
  if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMenu);

  document.querySelectorAll('[data-toggle="mobile-dropdown"]').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const item = trigger.closest('.mobile-nav-item');
      item.classList.toggle('open');

      const icon = trigger.querySelector('.mobile-arrow');
      if (icon) {
        if (item.classList.contains('open')) {
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus');
        } else {
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-plus');
        }
      }
    });
  });
});


$(document).ready(function () {
  $(".services-slider").owlCarousel({
    loop: true,
    margin: 24,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoWidth: true,
    center: true,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    responsive: {
      0: { autoWidth: false, center: false, items: 1 },
      576: { autoWidth: false, center: false, items: 2 },
      992: { autoWidth: true, center: true }
    }
  });

  $(".industry-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 2 }
    }
  });

  $(".roadmap-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa fa-arrow-right"></i>'
    ],
    dots: false,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3 }
    }
  });

  $(".tech-slider").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 900,
    autoplaySpeed: 5000,
    autoplayHoverPause: false,
    responsive: {
      0: { items: 2 },
      480: { items: 3 },
      768: { items: 4 },
      992: { items: 5 },
      1200: { items: 8 }
    }
  });
});

const benefitCards = document.querySelectorAll('.benefit-card');
const contentBoxes = document.querySelectorAll('.content-box');

function setActive(index) {
  if (!benefitCards.length || !benefitCards[index]) return;

  benefitCards.forEach(c => c.classList.remove('active'));
  contentBoxes.forEach(b => b.classList.remove('active'));
  benefitCards[index].classList.add('active');
  if (contentBoxes[index]) contentBoxes[index].classList.add('active');
}

if (benefitCards.length) {
  setActive(0);
}

benefitCards.forEach(card => {
  card.addEventListener('mouseenter', () => {
    setActive(parseInt(card.dataset.index));
  });
});

document.querySelector('.cards-wrapper')?.addEventListener('mouseleave', () => {
  setActive(0);
});

// FAQ Accordion Logic
document.addEventListener("DOMContentLoaded", function() {
    const faqItems = document.querySelectorAll('.faq-item');

    if (faqItems.length) {
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            if (question) {
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Close all
                    faqItems.forEach(faq => {
                        faq.classList.remove('active');
                        const ans = faq.querySelector('.faq-answer');
                        if(ans) ans.style.maxHeight = null;
                    });

                    // If it wasn't active, open it
                    if (!isActive) {
                        item.classList.add('active');
                        const answer = item.querySelector('.faq-answer');
                        if(answer) answer.style.maxHeight = answer.scrollHeight + "px";
                    }
                });
            }
        });

        // Set max height for the initially active item
        const activeItems = document.querySelectorAll('.faq-item.active .faq-answer');
        activeItems.forEach(activeItem => {
            activeItem.style.maxHeight = activeItem.scrollHeight + "px";
        });
    }
});