// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'], // Input files to compile
      refresh: true, // Enable automatic page refresh
    }),
  ],
  build: {
    outDir: 'public',  // Change to 'dist' to match Vercel's expectations
    manifest: true,          // Generate a manifest for Laravel
    rollupOptions: {
      input: 'resources/js/app.js', // Define entry point for JS (usually needed in Laravel)
    },
  },
});

