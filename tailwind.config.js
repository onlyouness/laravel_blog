/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php"
  ],
  theme: {
    extend: {},
  },
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  plugins: [],
}

