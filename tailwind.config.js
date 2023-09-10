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
            animation: {
                'intro': 'intro 0.5s ease-in-out forwards'
            },
            keyframes: {
              'intro': {
                  '0%': { transform: 'translateX(150px)' },
                  '100%': { transform: 'translateX(0px)'}
              }
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'white': '#FFFFFF',
                'fourth': '#430f58',
                'third': '#6643b5',
                'second': '#8594e4',
                'first': '#d5def5'
            },
        },
    },

    plugins: [forms],
};
