/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "main": "#e29a10",
        "main-altern": "#333333",
        "acent": "#e3991182",
        "secondary": "#dc9b466d",
        "main-light": "#f5f5f5",
        "secondary-light": "#F6F9FB",
        "dark-text": "#747474",
        "dark": "#222425",
        "dark-medium": "#414141",
        "main-dark": "#212529",
        "gray": "#A1A1A1",
      },
    },
  },
  plugins: [],
}
