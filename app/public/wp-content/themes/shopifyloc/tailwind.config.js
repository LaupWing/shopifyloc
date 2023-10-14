/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./**/*.php",
      "./src/**/*.jsx"
   ],
   theme: {
      extend: {},
   },
   plugins: [
      require("@tailwindcss/forms")
   ],
}
