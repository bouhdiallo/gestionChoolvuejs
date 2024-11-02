import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path'; // Importer le module path

export default defineConfig({
    resolve: {
        alias: {
            '@admin-lte-img': path.resolve(__dirname, 'node_modules/admin-lte/dist/img'), // Créer un alias pour le dossier des images
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
});
