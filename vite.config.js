import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/dashboard.css",
                "resources/css/landing.css",
                "resources/css/navbar.css",
            ,'resources/css/style.css'],
            refresh: true,
        }),
    ],
});
