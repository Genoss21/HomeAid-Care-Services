/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./admin/**/*.php",      // PHP files in the /admin directory
    "./includes/**/*.php",    // PHP files in the /includes directory
    "./*.{html,js,php}",      // Root-level HTML, JS, and PHP files
    "./src/**/*.css",         // CSS files in /src (for input.css)
    "./node_modules/flowbite/**/*.js" // Flowbite files
  ],
  
  theme: {
    extend: {
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
      },
    },
  },
  
  plugins: [
    require('flowbite/plugin')
  ],
}
