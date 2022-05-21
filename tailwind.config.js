const defaultTheme = require('tailwindcss/defaultTheme');

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
                lato: ['Lato', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '2560': '160rem',
            },
            transitionDelay: {
                '50': '50ms',
                '250': '250ms',
                '800': '800ms',
                '900': '900ms',
                '1100': '1100ms',
                '1200': '1200ms',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio'),],
};
