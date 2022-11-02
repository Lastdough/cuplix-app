const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                dmsans:['"DM Sans"', ...defaultTheme.fontFamily.sans]
            },
            fontSize: {
                txt : ['45px', '66px']
            },
            colors: {
                'sec': '#cdc2ae',
                'pri': '#ece5c7',
                'back': '#f9f6ec',
                'bluePri' : '#3a4c5d',
                'blueSec' : '#61819e',
                'db3': '#dbdbdb',
                'txtC': '#0A093D',
              },
        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'),
        require('flowbite/plugin'),
    ],
};

