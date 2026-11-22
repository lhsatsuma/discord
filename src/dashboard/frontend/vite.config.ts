import react from '@vitejs/plugin-react'
import { defineConfig } from 'vite'
import { readFileSync } from 'node:fs'

const backendTarget = process.env.DASHBOARD_API_TARGET || 'http://127.0.0.1:8000'
const frontendPackage = JSON.parse(readFileSync(new URL('./package.json', import.meta.url), 'utf8')) as { version: string }

// https://vite.dev/config/
export default defineConfig({
  define: {
    __DASHBOARD_VERSION__: JSON.stringify(frontendPackage.version),
  },
  build: {
    emptyOutDir: false,
  },
  plugins: [react()],
  server: {
    proxy: {
      '/api': {
        target: backendTarget,
        changeOrigin: true,
        configure(proxy) {
          proxy.on('error', (error, request) => {
            console.error('Dashboard API proxy failed.', {
              path: request.url,
              message: error.message,
            })
          })
        },
      },
    },
  },
})
