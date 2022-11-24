// /** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        primary: ["Spartan", "sans-serif"],
      },
      colors: {
        primary: "#088178",
        secondary: "#041E42",
        // brown: '#52433f'
      },
      boxShadow: {
        'default': '0 0 17px rgba(0,0,0,0.12)',
        boxShadowInput: "rgba(100, 100, 111, 0.2) 0px 7px 29px 0px",
      },
      // boxShadow: {
      //   'default': '0 0 20px 20px rgba(0,0,0,0.02)',
      // }
    },
  },
  plugins: [require("@tailwindcss/line-clamp")],
};
