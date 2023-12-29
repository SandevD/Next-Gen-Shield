/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
module.exports = {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    {
      pattern: /(stone|amber|lime|green|teal|sky|violet|fuchsia|rose)-(50|100|200|300|400|500|600|700|800|900)/,
      variants: ['hover', 'bg', 'gradient', 'focus'],
    },
    {
      pattern: /text-(stone|amber|lime|green|teal|sky|violet|fuchsia|rose)-(50|100|200|300|400|500|600|700|800|900)/,
      variants: ['hover', 'gradient', 'text'],
    },

  ],
  theme: {
    extend: {
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    // ...
  ],
}
