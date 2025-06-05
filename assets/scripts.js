document.addEventListener('DOMContentLoaded', () => {
  const toggles = document.querySelectorAll('.dropdown-toggle');
  const header = document.querySelector('header');
  const overlay = document.getElementById('header-overlay');

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
});
