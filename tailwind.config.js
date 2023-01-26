/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "views\\partials\\footer.php",
    "views\\partials\\header.php",
    "views\\partials\\navbar.php",
    "views\\pages\\home\\home.view.php",
    "views\\pages\\login\\login.view.php"
  ],
  theme: {
    extend: {},
    container: {
      screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        xl: '1240px',
        '2xl': '1496px',
      },
    }
  },
  plugins: [],
};
