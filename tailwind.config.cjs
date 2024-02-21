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
          500: '#b4d455',
        },
      }, // Extend Tailwind's default colors
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
      },
      fontSize: {
        'fluid-0': 'clamp(1rem, 0.9167rem + 0.3333vi, 1.25rem)',
        'fluid-1': 'clamp(1.25rem, 1.1458rem + 0.4167vi, 1.5625rem)',
        'fluid-2': 'clamp(1.5625rem, 1.4323rem + 0.5208vi, 1.9531rem)',
        'fluid-3': 'clamp(1.9531rem, 1.7904rem + 0.651vi, 2.4414rem)',
        'fluid-4': 'clamp(2.4414rem, 2.238rem + 0.8138vi, 3.0518rem)',
        'fluid-5': 'clamp(3.0518rem, 2.7974rem + 1.0173vi, 3.8147rem)',
        'fluid-6': 'clamp(3.8147rem, 3.4968rem + 1.2716vi, 4.7684rem)',
      },
      // type/calculator?c=400,16,1.25,1600,20,1.25,6,0,&s=,1.5|2|2.5|3|4|5|6|7.5|10,&g=s,l,xl,12
      spacing: {
        'fluid-sm': 'clamp(1rem, 0.8333rem + 0.6667vi, 1.5rem)',
        'fluid-md': 'clamp(1.5rem, 1.25rem + 1vi, 2.25rem)',
        'fluid-lg': 'clamp(2rem, 1.6667rem + 1.3333vi, 3rem)',
        'fluid-xl': 'clamp(2.5rem, 2.0833rem + 1.6667vi, 3.75rem)',
        'fluid-2xl': 'clamp(3rem, 2.5rem + 2vi, 4.5rem)',
        'fluid-3xl': 'clamp(4rem, 3.3333rem + 2.6667vi, 6rem)',
        'fluid-4xl': 'clamp(5rem, 4.1667rem + 3.3333vi, 7.5rem)',
        'fluid-5xl': 'clamp(6rem, 5rem + 4vi, 9rem)',
        'fluid-6xl': 'clamp(7.5rem, 6.25rem + 5vi, 11.25rem)',
        'fluid-7xl': 'clamp(10rem, 8.3333rem + 6.6667vi, 15rem)',
      },
      // space/calculator?c=400,16,1.25,1600,24,1.25,7,0,&s=,1.5|2|2.5|3|4|5|6|7.5|10,&g=s,l,xl,12 */
    },
  },
  plugins: [
    require('@tailwindcss/container-queries'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
