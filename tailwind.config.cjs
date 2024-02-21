/** @type {import('tailwindcss').Config} config */
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      },
    },
    extend: {
      colors: {
        primary: {
          500: '#b4d455'
        }
      }, // Extend Tailwind's default colors
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
      },
      spacing: {
        'fluid-sm': 'clamp(1rem, 0.67rem + 1.67vw, 2rem)',
        'fluid-md': 'clamp(1.5rem, 1rem + 2.5vw, 3rem)',
        'fluid-lg': 'clamp(2rem, 1.33rem + 3.33vw, 4rem)',
        'fluid-xl': 'clamp(3rem, 2rem + 5vw, 6rem)',
      },
    },
  },
  plugins: [
    require('@tailwindcss/container-queries'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
