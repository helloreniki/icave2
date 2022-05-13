const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        // typography: theme => ({
        //   DEFAULT: {
        //     css: {
        //       a: { color: theme('colors.gold'), '&:hover': { color: theme('colors.gold'), opacity: 0.8 }, },
        //       strong: { color: theme('colors.gold'), fontWeight: '700' },

        //     },
        //   },
        // }),
      },
      fontFamily: {
        sans: ['Lato', 'ui-sans-serif', 'Helvetica', 'sans-serif'], // 400 - regular, 700, 900
        special: ['Parisienne'], // 400 - regular
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        black: colors.black,
        white: colors.white,
        gray: colors.trueGray, // blueGray, coolGray, gray, trueGray, warmGray
        red: colors.red[500],

        gold: '#c59d5f',
        beige: '#f4f1ea',
        grayish: '#505050', // dark gray
      },
      screens: {
        'xs': '460px',
        ...defaultTheme.screens,
      },
    },
    plugins: [
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/forms'),
      require('@tailwindcss/line-clamp'),
      require('@tailwindcss/typography'),
    ],
  }
