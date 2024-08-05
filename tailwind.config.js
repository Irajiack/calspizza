/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ './**/*.{html,php}'],
  theme: {
    extend: {
      colors: {
        'timberwolf' : '#E5DCD5',
        'taupe' : '#47423E',
        'beaver' : '#9B8471',
        'smokeyBlack' : '#1B1A07',
      },
      fontFamily: {
        'fairplex' : ['Fairplex']
      }
    },
  },
  plugins: [],
}


