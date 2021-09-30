const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

function px(min, max) {
  let result = {};
  for (let i = min; i < max + 1; i++) {
    const key = i < 0 ? `-px-${i}` : `px-${i}`;
    result[key] = `${i}px`;
  }
  return result;
}

module.exports = {
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        'max:2xl': { max: '1535px' },
        'max:xl': { max: '1279px' },
        'max:lg': { max: '1023px' },
        'max:md': { max: '767px' },
        'max:sm': { max: '639px' },
      },
      placeholderColor: {
        current:
          '--tw-placeholder-opacity: 1; color: currentColor; opacity: var(--tw-placeholder-opacity)',
      },
      container: {
        padding: {
          DEFAULT: '2rem',
          sm: '2rem',
          lg: '4rem',
          xl: '5rem',
          '2xl': '7.1875rem',
        },
      },
      height: px(0, 300),
      margin: px(0, 80),
      fontSize: px(0, 120),
      padding: px(0, 300),
      gap: px(0, 300),
      colors: {
        point: 'var(--atmosphere, #009ddf)',
        funnelCloud: 'var(--funnel-cloud, #113a66)',
        squant: `var(--squant)`,
      },
      borderColor: {
        dugong: 'var(--dugong, #707070)',
        orochimaru: 'var(--orochimaru, #d9d9d9)',
        blackout: 'var(--black-out, #222222)',
        superSilver: 'var(--super-silver, #eeeeee)',
      },
      backgroundColor: {
        mistyLawn: 'var(--misty-lawn, #DEF7E0)',
        hospitalGreen: 'var(--hospital-green, #9AE3A1)',
        bermudagrass: 'var(--bermudagrass, #64CC6E)',
        lighthouse: 'var(--lighthouse, #F4F4F4)',
        artificialTurf: 'var(--artificial-turf, #47B951)',
        atmosphere: 'var(--atmosphere, #009ddf)',
        winterWizard: 'var(--winter-wizard, #9de2ff)',
        glitterLake: 'var(--glitter-lake, #4AC1F2)',
        blackout: 'var(--black-out, #222222)',
      },
      gradientColorStops: {
        glitterLake: 'var(--glitter-lake, #4AC1F2)',
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
