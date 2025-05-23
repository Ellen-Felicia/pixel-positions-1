import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite'
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss({
            config: {
                content: [
                    './resources/**/*.blade.php',
                    './resources/**/*.js',
                    './resources/**/*.vue',
                ],
                theme: {
                    extend: {
                        colors:{
                            black:'#060606',
                        },
                        fontFamily:{
                            "hanken-grotesk": ['Hanken Grotesk', 'sans-serif'],
                        },
                        fontSize:{
                            '2xs': ".625rem", //10px
                        }
                    },
                },
                plugins: [],
            },
        }),
    ],
});
