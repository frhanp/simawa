import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
          colors: {
            oceanBlue: "#006A8E", // Biru Laut
            sunnyYellow: "#F9C74F", // Kuning Cerah
            lightBlue: "#00B4D8", // Biru Muda
            darkGray: "#333333", // Abu-abu Gelap
          },
          fontFamily: {
            sans: ["Figtree", "Arial", "sans-serif"],
          },
        },
      },

    plugins: [forms],
};
