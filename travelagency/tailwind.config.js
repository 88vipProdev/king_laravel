module.exports = {
  purge: [],
  darkMode: false,
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true,
  },
  autoprefixer: {
    flexbox: true,
    grid: true,
  },
  cssnano: {
    preset: 'default',
  },
};