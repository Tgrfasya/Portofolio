import { defineConfig } from 'vite';

export default defineConfig({
    publicDir: false,

    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: 'index.html',
        },
    },
});