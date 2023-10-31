/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./**/*.php",
      "./src/**/*.jsx"
   ],
   theme: {
      extend: {
         height: {
            "screen-minus-nav": "calc(100vh-3.5rem)"
         }
      },
   },
   plugins: [
      require("@tailwindcss/forms")
   ],
}
