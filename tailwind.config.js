/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#065590",
        dark: "#252525",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

