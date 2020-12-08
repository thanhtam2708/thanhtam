module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
    },
  },
  variants: {
    transitionDuration: ['responsive', 'hover', 'focus'],
    transformOrigin: ['responsive', 'hover', 'focus'],
    translate: ['responsive', 'hover', 'focus', 'active', 'group-hover']
  },
  plugins: [],
}
