module.exports = {
    content: ["./src/**/*.{html,js}"],
    mode: 'jit',                           //ADD THIS LINE
    darkMode: false,
  theme: {
    extend: {},
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
