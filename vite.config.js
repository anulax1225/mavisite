import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as fs from "fs"

export default defineConfig({
    server: {
        hmr: { host: 'viewer360.lndo.site', protocol: 'wss' },
        host: true,
        https: {
            cert: fs.readFileSync('/lando/certs/appserver_nginx.viewer360.crt'),
            key: fs.readFileSync('/lando/certs/appserver_nginx.viewer360.key'),
        },
        // If you have multiple active apps, you might want to change the port number
        // to avoid conflicts
        port: 5173,
    },

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
