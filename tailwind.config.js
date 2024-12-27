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
                sans:           ['Figtree', ...defaultTheme.fontFamily.sans],
                pp:             ['PP Neue Montreal', 'serif'],
                timmons:        ['Timmons NY 2.0', 'serif'],
                noto:           ['Noto Serif JP', 'serif'],
                cormorant:      ['Cormorant Garamond', 'serif'],
                roboto:         ['Roboto Slab', 'serif'],
                noto_sans:      ['Noto Sans JP', 'serif'],
                open_Sans:      ['Open Sans', 'serif'],
                montserrat:     ['Montserrat', 'serif'],
                poppins:        ['Poppins', 'serif'],
                inconsolate:    ['Inconsolata', 'monospace'],
                source:         ['Source Code Pro', 'monospace'],
                fira:           ['Fira Mono', 'monospace'],
                lobster:        ['Lobster', 'serif'],
                pacifico:       ['Pacifico', 'serif'],
                rubiki:         ['Rubik Dirt', 'serif'],
                dancing:        ['Dancing Script', 'selif'],
                sacramento:     ['Sacramento', 'selif'],
                walter:         ['Walter Turncoat', 'serif'],
            },
        },
    },

    plugins: [forms],
};
