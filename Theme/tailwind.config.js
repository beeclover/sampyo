const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

module.exports = {
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        point: 'var(--atmosphere, #009ddf)',
        funnelCloud: 'var(--funnel-cloud, #113a66)',
      },
      borderColor: {
        dugong: 'var(--dugong, #707070)',
        orochimaru: 'var(--orochimaru, #d9d9d9)',
        blackout: 'var(--black-out, #222222)',
      },
      backgroundColor: {
        mistyLawn: 'var(--misty-lawn, #DEF7E0)',
        hospitalGreen: 'var(--hospital-green, #9AE3A1)',
        bermudagrass: 'var(--bermudagrass, #64CC6E)',
        lighthouse: 'var(--lighthouse, #F4F4F4)',
        artificialTurf: 'var(--artificial-turf, #47B951)',
      },
      typography: {
        DEFAULT: {
          css: {
            maxWidth: null,
            color: null,
            a: {
              color: null,
              '&:hover': colorReset,
            },
            string: colorReset,
            h1: colorReset,
            h2: colorReset,
            h3: colorReset,
            h4: colorReset,
            h5: colorReset,
            h6: colorReset,
            pre: null,
            code: null,
            'code::after': null,
            'code::before': null,
            'pre code': null,
          },
        },
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],
      textColor: ['disabled'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
