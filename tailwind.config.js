/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/admin/**/*.php",       // PHP files in the /src/admin directory
    "./src/employee/**/*.php",     // PHP files in the /src/employee directory
    "./src/client/**/*.php",       // PHP files in the /src/client directory
    "./src/includes/**/*.php",     // PHP files in the /src/includes directory
    "./public/*.html",             // Root-level HTML files in /public
    "./public/css/**/*.css",       // CSS files in /public/css
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
