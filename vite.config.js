import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'public/assets/js/soft-ui-dashboard.js',
                'public/assets/scss/soft-ui-dashboard.scss',
                'public/assets/css/soft-ui-dashboard.css',

            ],
            refresh: true,
        }),
    ],
});
