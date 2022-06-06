const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                sky: colors.sky,
                teal: colors.teal,
                rose: colors.rose,
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                lato: ['Lato', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                '570': '570px',
                '700': '700px',
                '1600': '1600px',
            },
            transitionDelay: {
                '50': '50ms',
                '250': '250ms',
                '600': '600ms',
                '800': '800ms',
                '900': '900ms',
                '1100': '1100ms',
                '1200': '1200ms',
                '1300': '1300ms',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
