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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#059669',
                    light: '#10b981',
                    dark: '#047857'
                },
                surface: {
                    light: '#f8fafc',
                    muted: '#f1f5f9'
                },
                card: '#ffffff'
            },
        },
    },

    plugins: [forms],
};
