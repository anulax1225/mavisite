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
    darkMode: 'class',
    theme: {
        screens: {
            'tablet': '640px',
            'laptop': '1024px',
            'desktop': '1400px',
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                pro: ['Open Sans', 'Arial'],
                robo: ['Roboto']
            },
            colors: {
                gray: {
                    1000: "hsl(0 0 2)",
                    950: "hsl(0 0 5)",
                    900: "hsl(0 0 10)",
                    850: "hsl(0 0 15)",
                    800: "hsl(0 0 20)",
                    750: "hsl(0 0 25)",
                    700: "hsl(0 0 30)",
                    650: "hsl(0 0 35)",
                    600: "hsl(0 0 40)",
                    550: "hsl(0 0 45)",
                    500: "hsl(0 0 50)",
                    450: "hsl(0 0 55)",
                    400: "hsl(0 0 60)",
                    350: "hsl(0 0 65)",
                    300: "hsl(0 0 70)",
                    250: "hsl(0 0 75)",
                    200: "hsl(0 0 80)",
                    150: "hsl(0 0 85)",
                    100: "hsl(0 0 90)",
                    50: "hsl(0 0 95)",
                    0: "hsl(0 0 98)",
                },
            },
        },
    },
    plugins: [],
};
