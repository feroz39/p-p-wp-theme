/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    fontFamily: {
      serif: ['var(--font-quarto)'],
      sans: ['var(--font-stem)'],
    },
    extend: {
      colors: {
        'accent-1': '#FAFAFA',
        'accent-2': '#EAEAEA',
        'accent-7': '#333',
        success: '#0070f3',
        cyan: '#79FFE1',
        // pandp colors
        brand: '#2B3990',
        orange: '#F3703A',
        beige: '#F8F7F4',
        darkbeige: '#EFEDE5',
        navy: '#363E56',
      },
      transitionProperty: {
        height: 'height',
        'max-height': 'max-height',
      },
    },
  },
  variants: {
    extend: {
      height: ['hover', 'focus', 'active'],
    },
  },
  plugins: [require('@tailwindcss/typography'), require('@tailwindcss/forms')],
};
