import react from '@vitejs/plugin-react'
import { defineConfig } from 'vite'

const backendTarget = process.env.DASHBOARD_API_TARGET || 'http://127.0.0.1:8000'

// https://vite.dev/config/
export default defineConfig({
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
