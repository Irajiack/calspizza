/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ './**/*.{html,php}'],
  theme: {
    extend: {
      colors: {
        'timberwolf' : '#E5DCD5',
        'taupe' : '#47423E',
        'beaver' : '#9B8471',
      },
      fontFamily: {
        'fairplex' : ['Fairplex']
      }
    },
  },
  plugins: [],
}


