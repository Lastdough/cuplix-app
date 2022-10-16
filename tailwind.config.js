const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                dmsans:['"DM Sans"', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'sec': '#cdc2ae',
              },
        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography')
    ],
};
