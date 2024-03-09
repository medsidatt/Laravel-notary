/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    extend: {
        screens: {
            print: { raw: 'print' },
            screen: { raw: 'screen' },
        },
    },

  theme: {
    extend: {},
  },
  plugins: [],
}


