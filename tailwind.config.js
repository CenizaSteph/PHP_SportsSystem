/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'BG-Sports' : "url('../src/images/BG-Sports.png')"
      },
      height: {
        'half-vh' : "50vh"
      },
      colors: {
        '0c00ff' : '#0c00ff',
        'f5e80d' : '#f5e80d',
        '343434' : '#343434'
      }
    },
  },
  plugins: [],
}

