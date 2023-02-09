/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/partials/nav.php",
    "./views/partials/header.php",
    "./views/partials/footer.php",
    "./views/pages/home/home.view.php",
    "./views/pages/login/login.view.php",
    "./views/pages/register/register.view.php",
    "./views/partials/card.php",
    "./views/pages/account/account.view.php",
    "./views/partials/side_menu.php",
    "./views/pages/details/details.view.php"
  ],
  theme: {
    extend: {
      colors: {
        // primary: "#101b37",
        primary: "#222624",
        secondary: "#86c232",
        danger: "#e41376",
      },
    },
  },
  plugins: [],
};
