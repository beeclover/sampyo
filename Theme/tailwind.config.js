const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

const colors = {
  mistyLawn: `#DEF7E0`,
  hospitalGreen: `#9AE3A1`,
  bermudagrass: `#64CC6E`,
  lighthouse: `#F4F4F4`,
  artificialTurf: `#47B951`,
  atmosphere: `#009ddf`,
  winterWizard: `#9de2ff`,
  glitterLake: `#4AC1F2`,
  blackout: `#222222`,
  snowflake: `#f0f0f0`,
  dugong: `#707070`,
  orochimaru: `#d9d9d9`,
  superSilver: `#eeeeee`,
  point: `#009ddf`,
  funnelCloud: `#113a66`,
  squant: `#666666`,
  kiwiSqueeze: `#d3eccc`,
  gardenDawn: `#eff7ed`,
};

module.exports = {
  mode: 'jit',
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      labtop: '1440px',
      xxl: '1536px',
    },
    extend: {
      padding: {
        'container-x': 'var(--container-px)',
        'container-y': 'var(--container-py)',
      },
      inset: {
        'container-x': 'var(--container-px)',
        '-container-x': 'calc(var(--container-px) * -1)',
        'container-y': 'var(--container-py)',
        '-container-y': 'calc(var(--container-py) * -1)',
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
          xxl: '7.1875rem',
        },
      },
      colors,
      borderColor: colors,
      backgroundColor: colors,
      gradientColorStops: colors,
      typography: {
        DEFAULT: {
          css: {
            maxWidth: null,
            color: null,
            a: {
              color: null,
              '&:hover': colorReset,
            },
            strong: colorReset,
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
        sans: ['"Noto Sans KR"', ...defaultTheme.fontFamily.sans],
      },
      gridTemplateColumns: {
        'l1-h-left': '300px minmax(0, 1fr)',
        'l1-h-right': 'minmax(0, 1fr) 300px',
        'l2-h-left': '443px minmax(0, 1fr)',
        'l2-h-right': 'minmax(0, 1fr) 443px',
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
