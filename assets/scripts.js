document.addEventListener('DOMContentLoaded', () => {
  const toggles = document.querySelectorAll('.dropdown-toggle');
  const header = document.querySelector('header');
  const overlay = document.getElementById('header-overlay');
  const navButton = document.getElementById('mobile-nav');
  const mtoggles = document.querySelectorAll('.m-dropdown-toggle');

  /* Dropdown */
  if (toggles && header && overlay) {
    toggles.forEach((toggle) => {
      toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        e.preventDefault();
        // const menuItem = toggle.parentElement;
        if (toggle.classList.contains('is-open')) {
          toggle.classList.remove('is-open');
          header.classList.remove('menu-open');
        } else {
          toggle.classList.add('is-open');
          header.classList.add('menu-open');
        }
        console.log('clicked!');

        // Close all other dropdowns
        toggles.forEach((item) => {
          if (item !== toggle) {
            item.classList.remove('is-open');
          }
        });
      });
    });

    overlay.addEventListener('click', (e) => {
      e.stopPropagation();
      e.preventDefault();

      // Remove all 'is-open' class and 'menu-open'
      toggles.forEach((item) => {
        item.classList.remove('is-open');
      });
      header.classList.remove('menu-open');
    });
  }

  /* Mobile Nav/Header */
  if (header && navButton) {
    navButton.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const isOpen = header.classList.contains('mobile-menu-open');
      if (isOpen) {
        header.classList.remove('mobile-menu-open');
      } else {
        header.classList.add('mobile-menu-open');
      }
    });
  }

  if (mtoggles) {
    mtoggles.forEach((mtoggle) => {
      const innerDiv = mtoggle.querySelector('div');
      if (innerDiv) {
        innerDiv.addEventListener('click', (e) => {
          e.stopPropagation();
          e.preventDefault();
          if (mtoggle.classList.contains('is-open')) {
            mtoggle.classList.remove('is-open');
          } else {
            mtoggle.classList.add('is-open');
          }
        });
      }
    });
  }

  /* Trigger Testimonial Carousel */
  var testimonialSelector = document.querySelector('.testimonial-carousel');
  if (testimonialSelector) {
    var testimonialCarousel = new Splide('.testimonial-carousel', {
      type: 'fade',
      rewind: true,
      pagination: false,
      arrows: true,
    });
    testimonialCarousel.mount();
  }

  /* Trigger Featured Carousel */
  var featuredSelector = document.querySelector('.featured-carousel');
  if (featuredSelector) {
    var featuredCarousel = new Splide('.featured-carousel', {
      type: 'slide',
      rewind: true,
      pagination: true,
      paginationDirection: 'ltr',
      arrows: true,
    });
    featuredCarousel.mount();
  }

  /* Trigger Featured Carousel */
  var cardSelector = document.querySelector('.cards-carousel');
  if (cardSelector) {
    var cardCarousel = new Splide('.cards-carousel', {
      type: 'slide',
      rewind: false,
      pagination: false,
      arrows: true,
      perPage: 3,
      gap: '2rem',
      start: 0,
      focus: 0,
      breakpoints: {
        480: {
          perPage: 1,
        },
        767: {
          perPage: 2,
        },
      },
    });
    cardCarousel.mount();
  }

  /* Trigger Asset Carousel */
  var assetSelectors = document.getElementsByClassName('asset-carousel');
  if (assetSelectors) {
    for (var i = 0; i < assetSelectors.length; i++) {
      new Splide(assetSelectors[i], {
        type: 'fade',
        rewind: true,
        arrows: true,
      }).mount();
    }
  }

  /* Active/Deactive CTA */
  const ctaContainer = document.getElementById('cta');
  const ctaBlue = document.getElementById('cta-blue');
  const ctaOrange = document.getElementById('cta-orange');

  if (ctaBlue && ctaOrange && ctaContainer) {
    ctaBlue.addEventListener('mouseenter', () => {
      ctaContainer.classList.add('blue-active');
    });
    ctaBlue.addEventListener('mouseleave', () => {
      ctaContainer.classList.remove('blue-active');
    });
    ctaOrange.addEventListener('mouseenter', () => {
      ctaContainer.classList.add('orange-active');
    });
    ctaOrange.addEventListener('mouseleave', () => {
      ctaContainer.classList.remove('orange-active');
    });
  }

  /* Tabs */
  const tabs = document.querySelectorAll('[role="tablist"] [role="tab"]');
  const panels = document.querySelectorAll('[role="tabpanels"] [role="tabpanel"]');

  if (tabs && panels) {
    tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        const selectedIndex = tab.getAttribute('data-tab');

        // Update tab selection
        tabs.forEach((t) => t.setAttribute('aria-selected', 'false'));
        tab.setAttribute('aria-selected', 'true');

        // Update panel visibility
        panels.forEach((panel) => {
          const isMatch = panel.getAttribute('data-panel') === selectedIndex;
          panel.hidden = !isMatch;
        });
      });
    });
  }

  /* Scroll Progress in Articel */
  const progressBar = document.getElementById('scroll-progress');

  if (progressBar) {
    window.addEventListener('scroll', () => {
      const scrollTop = window.scrollY;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      const scrollPercent = scrollTop / docHeight;

      progressBar.style.transform = `scaleX(${scrollPercent})`;
    });
  }

  /* Add Lagacy markup wrapper to all GF */
  const gfWrapper = document.querySelector('.gform_wrapper');

  if (gfWrapper) {
    if (!gfWrapper.classList.contains('gform_legacy_markup_wrapper')) {
      gfWrapper.classList.add('gform_legacy_markup_wrapper');
      gfWrapper.classList.add('gform-theme--no-framework');
      gfWrapper.dataset.formTheme = 'legacy';
    }
    if (gfWrapper.classList.contains('gform-theme')) {
      gfWrapper.classList.remove('gform-theme');
    }
    if (gfWrapper.classList.contains('gform-theme--orbital')) {
      gfWrapper.classList.remove('gform-theme--orbital');
    }
    if (gfWrapper.classList.contains('gform-theme--foundation')) {
      gfWrapper.classList.remove('gform-theme--foundation');
    }
    if (gfWrapper.classList.contains('gform-theme--framework')) {
      gfWrapper.classList.remove('gform-theme--framework');
    }
  }
});
