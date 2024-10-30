import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                bg01: "url('https://www.era.rothamsted.ac.uk/images/metadata/NorthWyke/herbage.jpg')",
                bg02: "url('https://www.era.rothamsted.ac.uk/images/metadata/NorthWyke/bg02.jpg')",
                bg02muted: "url('https://www.era.rothamsted.ac.uk/images/metadata/NorthWyke/bg02-muted.jpg')",
              },


        },
        listStyleType: {
            none: 'none',
            disc: 'disc',
            decimal: 'decimal',
            square: 'square',
            roman: 'upper-roman',
          },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            //emerald: colors.emerald,
            amber:colors.amber,
            lime:colors.lime,
            orange:colors.orange,
            //indigo: colors.indigo,
            yellow: colors.yellow,
            'nw-blue': {
                '50': '#ebfffe',
                '100': '#cdfeff',
                '200': '#a1faff',
                '300': '#60f4ff',
                '400': '#18e4f8',
                '500': '#00c6de',
                '600': '#0097b2',
                '700': '#087d96',
                '800': '#10647a',
                '900': '#125467',
                '950': '#053747',
            },

          },

    },

    plugins: [forms, typography, require("tailgrids/plugin")],
};
