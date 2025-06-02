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
  var testimonialCarousel = new Splide('.testimonial-carousel', {
    type: 'fade',
    rewind: true,
    pagination: false,
    arrows: true,
  });
  testimonialCarousel.mount();

  /* Active/Deactive CTA */
  const ctaContainer = document.getElementById('cta');
  const ctaBlue = document.getElementById('cta-blue');
  const ctaOrange = document.getElementById('cta-orange');

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
});
