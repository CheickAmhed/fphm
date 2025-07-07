import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin.css', 
                'resources/css/style.css', 
                'resources/js/admin_app.js',
                'resources/js/public_app.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
