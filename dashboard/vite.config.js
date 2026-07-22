import path from 'path';
import { defineConfig, loadEnv } from 'vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, path.resolve(__dirname, '..'), '');
    const appUrl = env.APP_URL?.trim() || 'http://127.0.0.1:8000';

    return {
        envDir: path.resolve(__dirname, '..'),
        build: {
            emptyOutDir: true,
        },
        define: {
            __API_BASE_URL__: JSON.stringify('/api/v1'),
        },
        plugins: [
            laravel({
                input: ['src/app.tsx'],
                refresh: true,
                buildDirectory: 'build/dashboard',
                publicDirectory: '../public',
                appUrl,
            }),
            react(),
            tailwindcss(),
        ],
        resolve: {
            alias: {
                '@': path.resolve(__dirname, './src'),
            },
        },
        server: {
            port: 3000,
            host: '0.0.0.0',
            proxy: {
                '/api': {
                    target: appUrl,
                    changeOrigin: true,
                },
            },
        },
    };
});
