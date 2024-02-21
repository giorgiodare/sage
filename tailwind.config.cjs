/** @type {import('tailwindcss').Config} config */
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
      colors: {}, // Extend Tailwind's default colors
    },
  },
  plugins: [
    require('@tailwindcss/container-queries'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
