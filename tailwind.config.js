module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily:{
        "Poppins": "Poppins"
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}