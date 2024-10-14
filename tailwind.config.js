/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,js,php}",
    "./node_modules/flowbite/**/*.js"
  ],
  
   theme: {
    extend: {
      animation: {
        'fade-in': 'fadeIn 2s ease-in-out forwards',
      },
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
