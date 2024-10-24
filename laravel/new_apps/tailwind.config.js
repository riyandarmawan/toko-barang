import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    100: "#d3f3df",
                    200: "#a7e8bf",
                    300: "#7adc9e",
                    400: "#4ed17e",
                    500: "#22c55e",
                    600: "#1b9e4b",
                    700: "#147638",
                    800: "#0e4f26",
                    900: "#072713"
                },
                background: {
                    100: "#fcfdfe",
                    200: "#f9fbfd",
                    300: "#f7f9fb",
                    400: "#f4f7fa",
                    500: "#f1f5f9",
                    600: "#c1c4c7",
                    700: "#919395",
                    800: "#606264",
                    900: "#303132"
                },
            },
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
